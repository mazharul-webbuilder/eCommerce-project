<?php

namespace Incevio\Package\TrendingKeywords\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class TrendingKeywordsController extends Controller
{
    /**
     * Show Trending keywords.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trending_keywords = get_from_option_table('trendingKeywords_keywords', []);

        $trending_keywords = array_combine($trending_keywords, $trending_keywords);

        return view('trendingKeywords::index', compact('trending_keywords'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (update_or_create_option_table_record('trendingKeywords_keywords', $request->trending_keywords)) {
            // Clear trending_keywords from cache
            Cache::forget('trending_keywords');

            return redirect()->back()->with('success', trans('messages.updated', ['model' => trans('trendingKeywords::lang.trending_keywords')]));
        }

        return redirect()->back()->with('warning', trans('messages.failed'));
    }
}
