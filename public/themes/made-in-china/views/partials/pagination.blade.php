@if ($paginator->hasPages())
  <ul class="zcart-pagination list-unstyled">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <li class="prev"><a href="#" class="disabled">&laquo;</a></li>
    @else
      <li class="prev"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
      {{-- "Three Dots" Separator --}}
      @if (is_string($element))
        <li><a href="#" class="disabled">{{ $element }}</a></li>
      @endif

      {{-- Array Of Links --}}
      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <li class="active"><a href="#">{{ $page }}</a></li>
          @else
            <li><a href="{{ $url }}">{{ $page }}</a></li>
            {{-- <li class="omit"><a href="{{ $url }}">...</a></li> --}}
          @endif
        @endforeach
      @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <li class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
    @else
      <li class="next"><a class="disabled">&raquo;</a></li>
    @endif
  </ul>
@endif
