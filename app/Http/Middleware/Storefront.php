<?php

namespace App\Http\Middleware;

use App\Helpers\ListHelper;
use App\Jobs\UpdateVisitorTable;
use App\Services\ResponseManipulation;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

class Storefront
{
    /**
     * Handle an incoming request. Supply important data to all views.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check platform maintenance_mode
        if (config('system_settings.maintenance_mode')) {
            return response()->view('errors.503', [], 503);
        }

        // Skip when ajax request
        if ($request->ajax()) {
            return $next($request);
        }

        // $expires = system_cache_remember_for();

        // View::share('active_announcement', ListHelper::activeAnnouncement());

        if (active_theme() == 'legacy') {
            View::share('featured_categories', get_featured_category());
        }

        View::share('promotional_tagline', get_promotional_tagline());
        View::share('pages', ListHelper::pages(\App\Models\Page::VISIBILITY_PUBLIC));
        View::share('all_categories', ListHelper::categoriesForTheme());
        View::share('search_category_list', ListHelper::search_categories());
        View::share('recently_viewed_items', ListHelper::recentlyViewedItems());
        View::share('cart_item_count', cart_item_count());
        // View::share('top_vendors', ListHelper::top_vendors(5));

        //announcement
        if (is_incevio_package_loaded('announcement')){
            View::share('global_announcement', get_global_announcement());
        }


        // Trending Search Keywords
        if (is_incevio_package_loaded('trendingKeywords')) {
            $trending_keywords = Cache::rememberForever('trending_keywords', function () {
                return get_from_option_table('trendingKeywords_keywords', []);
            });

            View::share('trending_keywords', $trending_keywords);
        }

        // $languages = \App\Language::orderBy('order', 'asc')->active()->get();

        // update the visitor table for state
        $ip = get_visitor_IP();
        UpdateVisitorTable::dispatch($ip);

        return $this->insertIntoViewResponse($next($request));
    }

    /**
     * Insert Important content Into View Response
     *
     * @return  \Illuminate\Http\Request  $request
     */
    private function insertIntoViewResponse($response)
    {
        if (!$response instanceof Response) {
            return $response;
        }

        $contents = [
            '</head>' => [
                view('analytic_script')->render(),
            ],
            // '</body>' => view('cookie_consent')->render(),
        ];

        foreach ($contents as $tag => $content) {
            $manipulator = new ResponseManipulation($tag, $content, $response);

            $response = $manipulator->getResponse();
        }

        return $response;
    }
}
