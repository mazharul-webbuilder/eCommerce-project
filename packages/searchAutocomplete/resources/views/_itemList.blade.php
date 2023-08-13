<li>
  <a href="{{ route('show.product', $item->slug) }}">
    <img src="{{ get_inventory_img_src($item, 'tiny_thumb') }}" alt="{{ $item->title }}" title="{{ $item->title }}">

    <span class="ml-2">{!! \Str::limit($item->title, get_search_autocomplete_config()['show_char']) !!}</span>
  </a>
</li>
