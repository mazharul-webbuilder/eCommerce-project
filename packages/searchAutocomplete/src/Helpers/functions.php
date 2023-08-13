<?php

use Illuminate\Support\Facades\Cache;

if (!function_exists('get_search_autocomplete_config')) {
  /**
   * Get Flash Deals
   * @return array | null
   */
  function get_search_autocomplete_config($config = 'config')
  {
    if ($config == 'css') {
      return Cache::rememberForever('searchAutocomplete_css', function () {
        return get_from_option_table('searchAutocomplete_css', '');
      });
    }

    return Cache::rememberForever('searchAutocomplete_settings', function () {
      $defaults = ['min_char' => 3, 'max_result' => 10, 'show_char' => 50];

      return get_from_option_table('searchAutocomplete_settings', $defaults);
    });
  }
}
