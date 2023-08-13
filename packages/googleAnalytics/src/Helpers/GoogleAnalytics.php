<?php

namespace Incevio\Package\GoogleAnalytics\Helpers;

use App\Helpers\CharttHelper;
use Carbon\Carbon;
use Illuminate\Support\Collection;
// use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;
use Spatie\Analytics\AnalyticsFacade as Analytics;

class GoogleAnalytics
{
    public static function fetchTotalVisitorsSessionsAndPageViews(Period $period, $dimension = 'month'): Collection
    {
        // try {
        $response = Analytics::performQuery(
            $period,
            'ga:users,ga:sessions,ga:pageviews,ga:sessionDuration,ga:bounces',
            ['dimensions' => 'ga:' . $dimension]
        );
        // } catch (\Google\Service\Exception $e) {
        //     echo "<pre>"; print_r($e->getMessage()); echo "<pre>"; exit('end!');
        // }

        return collect($response['rows'] ?? [])->map(function (array $dateRow) {
            return [
                'period' => (int) $dateRow[0],
                'visitors' => (int) $dateRow[1],
                'sessions' => (int) $dateRow[2],
                'pageViews' => (int) $dateRow[3],
            ];
        });
    }

    public static function topDevice(Period $period): Collection
    {
        $data = Analytics::performQuery(
            $period,
            'ga:sessions',
            ['dimensions' => 'ga:deviceCategory', 'sort' => '-ga:sessions']
        );

        return collect($data['rows'] ?? [])->map(function (array $dateRow) {
            return [
                'deviceCategory' =>  $dateRow[0],
                'sessions' => (int) $dateRow[1],
            ];
        });
    }

    public static function country(Period $period): Collection
    {
        $country = Analytics::performQuery(
            $period,
            'ga:sessions',
            ['dimensions' => 'ga:country', 'sort' => '-ga:sessions']
        );

        $result = collect($country['rows'] ?? [])->map(function (array $dateRow) {
            return [
                'country' =>  $dateRow[0],
                'sessions' => (int) $dateRow[1],
            ];
        });
        /* $data['country'] = $result->pluck('country'); */
        /* $data['country_sessions'] = $result->pluck('sessions'); */
        return $result;
    }

    /**
     * Return formated visitors data from Google analytic to make chart
     *
     * @param int $period
     * @return array
     */
    public static function userTypes($period = 12, $start = null)
    {
        return Analytics::fetchUserTypes(Period::months($period));
    }

    /**
     * Return formated visitors data from Google analytic to make chart
     *
     * @param int $period
     * @return array
     */
    public static function topReferrers($period = 12, $start = null)
    {
        return Analytics::fetchTopReferrers(Period::months($period));
    }

    /**
     * Return most visited page data from Google analytic to make chart
     *
     * @param int $period
     * @return array
     */
    public static function fetchMostVisitedPages($period = 12, $start = null)
    {
        return Analytics::fetchMostVisitedPages(Period::months($period));
    }

    /**
     * Return formated visitors data from Google analytic to make chart
     *
     * @param int $months
     * @return array
     */
    public static function fetchVisitorsOfMonthsFromGoogle($months = 6, $start = null)
    {
        //retrieve visitors and pageviews since the 6 months ago
        $analyticsData = GoogleAnalytics::fetchTotalVisitorsSessionsAndPageViews(Period::months($months - 1));

        if (!$start) {
            $start = Carbon::now()->startOfMonth();
        }

        $dateRange = CharttHelper::Months($months, 'n', $start);

        $visits_data = [];
        $views_data = [];
        $sessions_data = [];
        foreach ($analyticsData->toArray() as $analytics) {
            $index = array_search($analytics['period'], $dateRange);
            $visits_data[$index] = $analytics['visitors'];
            $sessions_data[$index] = $analytics['sessions'];
            $views_data[$index] = $analytics['pageViews'];
        }

        // sort the data acconding to labals
        ksort($visits_data);
        ksort($sessions_data);
        ksort($views_data);

        $data = [
            'visits' => array_values($visits_data),
            'sessions' => array_values($sessions_data),
            'page_views' => array_values($views_data),
        ];

        return $data;
    }
}
