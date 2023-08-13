<?php

// use Analytics;
use App\Helpers\CharttHelper;
// use Spatie\Analytics\Analytics;
use Spatie\Analytics\AnalyticsFacade as Analytics;
use Spatie\Analytics\Period;
use Incevio\Package\GoogleAnalytics\Helpers\GoogleAnalytics;
use Carbon\Carbon;

/**
 * Here is an glober helper function. This fucntions will be registered autometically
 */
if (!function_exists('is_ggoogle_analytic_ready')) {
    function is_ggoogle_analytic_ready()
    {
        return config('analytics.view_id') && file_exists(config('analytics.service_account_credentials_json'));
    }
}

/**
 * Return formated visitors data from Google analytic to make chart
 *
 * @param int $months
 * @return array
 */
function fetchVisitorsOfMonthsFromGoogle($months = 6, $start = null)
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

/**
 * Return formated visitors data from Google analytic to make chart
 *
 * @param int $days
 * @return array
 */
function fetchVisitorsOfDaysFromGoogle($days = 7, $start = null)
{
    $analyticsData = GoogleAnalytics::fetchTotalVisitorsSessionsAndPageViews(Period::days($days - 1), 'date');

    if (!$start) {
        $start = Carbon::today()->startOfDay();
    }

    $dateRange = CharttHelper::Days($days, 'l', $start);

    $visits_data = [];
    $views_data = [];
    $sessions_data = [];
    foreach ($analyticsData->toArray() as $analytics) {
        $day = Carbon::createFromFormat('Ymd', $analytics['period'])->format('l');

        $index = array_search($day, $dateRange);
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

/**
 * Return formated visitors data from Google analytic to make chart
 *
 * @param int $period
 * @return array
 */
function topReferrers($period = 12, $start = null)
{
    return Analytics::fetchTopReferrers(Period::months($period));
}

/**
 * Return formated visitors data from Google analytic to make chart
 *
 * @param int $period
 * @return array
 */
function userTypes($period = 12, $start = null)
{
    return Analytics::fetchUserTypes(Period::months($period));
}

/**
 * Return formated visitors data from Google analytic to make chart
 *
 * @param int $period
 * @return array
 */
function topBrowsers($period = 12, $start = null)
{
    return Analytics::fetchTopBrowsers(Period::months($period));
}

function topDevice($period = 12)
{
    return GoogleAnalytics::topDevice(Period::months($period));
}

function performQuery($period, string $metrics, array $others = [])
{
    return Analytics::performQuery(Period::months($period), $metrics, $others);
}



// if (SystemConfig::isGgoogleAnalyticReady()) {
    //retrieve visitors and pageviews from GoogleAnalytic
    // $data = CharttHelper::fetchVisitorsOfMonthsFromGoogle($months, $start);

    // $breackdown = config('charts.visitors.breakdown_last_days') > 0 ? config('charts.visitors.breakdown_last_days') : null;

    // if ($breackdown) {
    //     $analyticsData = CharttHelper::fetchVisitorsOfDaysFromGoogle($breackdown);
    //     $data['visits'] = array_merge($data['visits'], $analyticsData['visits']);
    //     $data['sessions'] = array_merge($data['sessions'], $analyticsData['sessions']);
    //     $data['page_views'] = array_merge($data['page_views'], $analyticsData['page_views']);
    // }

    // return $data;
// }
