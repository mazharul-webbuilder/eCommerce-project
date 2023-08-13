<style type="text/css">
  {{ get_search_autocomplete_config('css') }}

</style>

<div class="search-box__dropdown">
  <ul id="autoSearchResult">
    <li>{{ trans('theme.type_min_char', ['min' => get_search_autocomplete_config()['min_char']]) }}</li>
  </ul>
</div>
