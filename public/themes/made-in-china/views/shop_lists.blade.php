@extends('theme::layouts.main')

@section('content')
  <div class="zcart-section zcart-brands-section zcart-white-bg">
    <div class="row">
      <div class="col-md-12">
        <h2>{{ trans('theme.all_shops') }}</h2>
        <div class="zcart-brands">
          <div class="row no-gutters">
            @foreach ($shops as $shop)
              <div class="col-xl-2 col-lg-3 col-md-6">
                <a href="{{ route('show.store', $shop->slug) }}" class="zcart-brands-item d-block">
                  <div class="zcart-brands-photo">
                    <img src="{{ get_storage_file_url(optional($shop->logoImage)->path, 'logo_square') }}" alt="{{ $shop->name }}">
                  </div>
                  <div class="zcart-brands-title">{{ $shop->name }}</div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="brands-pagination">
          <div class="zcart-blog-pagination text-center">
            {{ $shops->links('theme::partials.pagination') }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
