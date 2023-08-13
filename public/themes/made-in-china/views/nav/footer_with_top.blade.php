<footer class="zcart-site-footer zcart-light-bg">
  <div class="footer-top">
    <div class="container">
      <h3>{{ trans('theme.hot_categories') }}</h3>
      <div class="row">
        @foreach ($all_categories->take(6) as $catGroup)
          <div class="col-lg-2 col-md-3">
            <div class="footer-top-widget">
              <ul class="list-unstyled">
                @foreach ($catGroup->subGroups as $subGroup)
                  <li><a href="{{ route('categories.browse', $subGroup->slug) }}">{{ $subGroup->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>

  @include('theme::nav.footer')
</footer>
