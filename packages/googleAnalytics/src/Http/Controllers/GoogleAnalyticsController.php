<?php

namespace Incevio\Package\GoogleAnalytics\Http\Controllers;

use Incevio\Package\GoogleAnalytics\Charts\Visitors;
use Incevio\Package\GoogleAnalytics\Charts\Referrers;
use Incevio\Package\GoogleAnalytics\Charts\DeviceTypes;
use Incevio\Package\GoogleAnalytics\Charts\VisitorTypes;
use Incevio\Package\GoogleAnalytics\Charts\MostVisitedPages;
use App\Helpers\CharttHelper;
use Spatie\Analytics\Period;
use App\Http\Controllers\Controller;
use Incevio\Package\GoogleAnalytics\Http\Requests\GoogleAnalyticsRequest;
use Incevio\Package\GoogleAnalytics\Helpers\GoogleAnalytics;

class GoogleAnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GoogleAnalyticsRequest $request)
    {
        $months = config('analytics.period');

        $period = Period::months($months);

        // DeviceTypes Chart
        $topDevicesData = GoogleAnalytics::topDevice($period);

        $chartDevices = new DeviceTypes($topDevicesData->pluck('deviceCategory'));

        $chartDevices->dataset(trans('app.sessions'), 'pie', $topDevicesData->pluck('sessions')->toArray())->color(['#e4d354', '#7CB5EC']);

        // VisitorTypes Chart
        $visitorTypesData = GoogleAnalytics::userTypes($months);

        $chartVisitorTypes = new VisitorTypes($visitorTypesData->pluck('type'));

        $chartVisitorTypes->dataset(trans('app.sessions'), 'pie', $visitorTypesData->pluck('sessions')->toArray())->color(['#7CB5EC', '#FFBC75']);

        // Referrers Chart
        $referrersData = GoogleAnalytics::topReferrers($months);

        $chartReferrers = new Referrers($referrersData->pluck('url'));

        $chartReferrers->dataset(trans('app.page_views'), 'bar', $referrersData->pluck('pageViews'));

        // Most Visited Pages Chart
        $mostVisitedPagesData = GoogleAnalytics::fetchMostVisitedPages($months);

        $mostVisitedPages = new MostVisitedPages($months);

        // Visitors Chart
        $visitorsData = GoogleAnalytics::fetchVisitorsOfMonthsFromGoogle($months);

        $chartVisitors = new Visitors($months);

        $chartVisitors->dataset(trans('app.page_views'), 'column', $visitorsData['page_views'])->color(config('charts.visitors.colors.page_views'));

        $chartVisitors->dataset(trans('app.sessions'), 'column', $visitorsData['sessions'])->color(config('charts.visitors.colors.sessions'));

        $chartVisitors->dataset(trans('app.unique_visits'), 'column', $visitorsData['visits'])->color(config('charts.visitors.colors.unique_visits'));

        return view('analytics::index', compact('chartVisitors', 'chartReferrers', 'chartVisitorTypes', 'chartDevices'));
    }
}
