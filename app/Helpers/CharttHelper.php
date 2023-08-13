<?php

namespace App\Helpers;

use App\Models\Order;
// use App\Models\SystemConfig;
use App\Models\Visitor;
// use App\Helpers\Period;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 * This is a helper class to prodive data to charts
 */
class CharttHelper
{
    /**
     * Return formated days array to make labels
     *
     * @param int $days
     * @return array
     */
    public static function Days($days = null, $format = 'F d', $start = null)
    {
        if (!$days) {
            $days = config('charts.default.days', 30);
        }

        if (!$start) {
            $start = Carbon::today();
        }

        $data = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $data[] = $start->copy()->subDays($i)->format($format);
        }

        return $data;
    }

    /**
     * Return formated Months array to make labels
     *
     * @param int $Months
     * @return array
     */
    public static function Months($months = null, $format = 'F', $start = null)
    {
        if (!$months) {
            $months = config('charts.default.months', 12);
        }

        if (!$start) {
            $start = Carbon::today()->startOfMonth();
        }

        $data = [];
        for ($i = $months - 1; $i >= 0; $i--) {
            $data[] = $start->copy()->subMonths($i)->format($format);
        }

        return $data;
    }

    /**
     * Return formated sales total array to make chart
     *
     * @param int $days
     * @return array
     */
    public static function SalesOfLast($days = null, $start = null)
    {
        if (!$start) {
            $start = Carbon::today();
        }

        $dateRange = static::Days($days, 'M-d', $start);

        $sales = Order::select('total', 'created_at')
            ->mine()->withTrashed() //Include the arcived orders also
            ->whereDate('created_at', '>=', $start->subDays($days))
            ->orderBy('created_at', 'DESC')->get()
            ->groupBy(function ($item) {
                return $item->created_at->format('M-d');
            })
            ->map(function ($item) {
                return $item->sum('total');
            })
            ->toArray();

        $data = [];
        foreach ($dateRange as $day) {
            if (array_key_exists($day, $sales)) {
                $data[] = round($sales[$day]);
            } else {
                $data[] = 0;
            }
        }

        return $data;
    }

    /**
     * Return formated sales total array to make chart
     *
     * @param int $days
     * @return array
     */
    public static function prepareSaleTotal(Collection $salesData, $grp_by = 'M')
    {
        // $start = static::getStartDate();
        // $end = $start->copy()->subMonths(12)->startOfMonth();

        if ($grp_by == 'D') {
            $grp_by = 'M-d';
            // $dateRange = static::Days(30, $grp_by, $start);
        } else {
            $grp_by = 'F';
            // $dateRange = static::Months(12);
        }

        $sales = $salesData->groupBy(function ($item) use ($grp_by) {
            return $item->created_at->format($grp_by);
        })
            ->map(function ($item) {
                return $item->sum('total');
            })
            ->toArray();

        return $sales;

        // $data = [];
        // foreach ($dateRange as $day) {
        //     if (array_key_exists($day, $sales))
        //         $data[] = round($sales[$day]);
        //     else
        //         $data[] = 0;
        // }

        // return $data;
    }

    /**
     * Return formated Discounts total array to make chart
     *
     * @param int $days
     * @return array
     */
    // public static function prepareDiscountTotal(Collection $salesData, $grp_by = 'M')
    // {
    //     if ($grp_by == 'D')
    //         $grp_by = 'M-d';
    //     else
    //         $grp_by = 'F';

    //     $sales = $salesData->groupBy(function($item) use ($grp_by) {
    //                 return $item->created_at->format($grp_by);
    //             })
    //             ->map(function ($item) {
    //                 return $item->sum('discount');
    //             })
    //             ->toArray();
    //     return $sales;
    // }

    /**
     * Return formated visitors data array to make chart
     *
     * @param int $months
     * @return array
     */
    // public static function VisitorsOfLast($months = Null, $start = Null)
    public static function visitorsOfMonths($months = null, $start = null)
    {
        if (!$start) {
            $start = Carbon::today()->startOfMonth();
        }

        $monthRange = static::Months($months, 'F', $start);

        $visitors = Visitor::select('hits', 'page_views', 'updated_at')
            ->withTrashed() //Include the blocked ips also
            ->whereDate('updated_at', '>=', Carbon::today()->subMonths($months))
            ->orderBy('updated_at', 'DESC')->get()
            ->groupBy(function ($item) {
                return $item->updated_at->format('F');
            });

        $visits = $visitors->map(function ($item) {
            return $item->sum('hits');
        })->toArray();

        $page_views = $visitors->map(function ($item) {
            return $item->sum('page_views');
        })->toArray();

        $visits_data = [];
        $views_data = [];
        foreach ($monthRange as $day) {
            if (array_key_exists($day, $visits)) {
                $visits_data[] = round($visits[$day]);
                $views_data[] = round($page_views[$day]);
            } else {
                $visits_data[] = 0;
                $views_data[] = 0;
            }
        }

        $data = [
            'visits' => $visits_data,
            'page_views' => $views_data,
        ];

        $breackdown = config('charts.visitors.breakdown_last_days') > 0 ? config('charts.visitors.breakdown_last_days') : null;

        if ($breackdown) {
            $weeks = static::visitorsOfDays($breackdown);
            $data['visits'] = array_merge($data['visits'], $weeks['visits']);
            $data['page_views'] = array_merge($data['page_views'], $weeks['page_views']);
        }

        return $data;
    }

    /**
     * VisitorsOfDays
     *
     * @return array
     */
    public static function visitorsOfDays($days = null, $start = null)
    {
        if (!$start) {
            $start = Carbon::today()->startOfDay();
        }

        $visitors = Visitor::select('hits', 'page_views', 'updated_at')
            ->withTrashed() //Include the blocked ips also
            ->whereDate('updated_at', '>=', Carbon::today()->subDays($days))
            ->orderBy('updated_at', 'DESC')->get()
            ->groupBy(function ($item) {
                return $item->updated_at->format('l');
            });

        $visits = $visitors->map(function ($item) {
            return $item->sum('hits');
        })
            ->toArray();

        $page_views = $visitors->map(function ($item) {
            return $item->sum('page_views');
        })
            ->toArray();

        $dayRange = static::Days($days, 'l');

        $visits_data = [];
        $views_data = [];
        foreach ($dayRange as $day) {
            if (array_key_exists($day, $visits)) {
                $visits_data[] = round($visits[$day]);
                $views_data[] = round($page_views[$day]);
            } else {
                $visits_data[] = 0;
                $views_data[] = 0;
            }
        }

        $data = [
            'visits' => $visits_data,
            'page_views' => $views_data,
        ];

        return $data;
    }

    public static function getStartDate($date = null)
    {
        return $date ? Carbon::parse($date) : Carbon::today();
    }

    // public static function getEndDate($date = Null, $period = 'day')
    // {
    //     if ($date)
    //         return Carbon::parse($date);

    //     if ($period == 'month')

    //     return $date ? Carbon::parse($date) : Carbon::today();
    //     return $start->subMonths(12)->startOfMonth();
    // }
}
