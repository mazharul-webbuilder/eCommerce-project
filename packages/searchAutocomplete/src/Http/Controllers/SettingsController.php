<?php

namespace Incevio\Package\SearchAutocomplete\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Incevio\Package\SearchAutocomplete\Http\Requests\UpdateRequest;

class SettingsController extends Controller
{
    /**
     * Search autocomplete option.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        $settings = get_from_option_table('searchAutocomplete_settings', []);
        $styling = get_from_option_table('searchAutocomplete_css', []);

        return view('searchAutocomplete::settings', compact('settings', 'styling'));
    }

    /**
     * Search autocomplete option.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request)
    {
        if (
            update_option_table_record('searchAutocomplete_settings', $request->settings) &&
            update_option_table_record('searchAutocomplete_css', $request->styling_css)
        ) {
            // Clear searchAutocomplete_settings from cache
            Cache::forget('searchAutocomplete_settings');
            Cache::forget('searchAutocomplete_css');

            return redirect()->back()->with('success', trans('messages.updated', ['model' => trans('searchAutocomplete::lang.search_settings')]));
        }

        return redirect()->back()->with('warning', trans('messages.failed'));
    }
}
