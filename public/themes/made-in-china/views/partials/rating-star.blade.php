  <div class="rating-star">
    @if ($ratings)
      @for ($i = 0; $i < 5; $i++)
        @if ($ratings - $i >= 1) <span class="rated"><i class="fas fa-star"></i></span>
        @elseif( ($ratings - $i) < 1 && ($ratings - $i)> 0 )
            <span class="rated"><i class="fas fa-star-half-alt"></i></span>
          @else
            <span><i class="far fa-star"></i></span> @endif
      @endfor
    @endif
  </div>
