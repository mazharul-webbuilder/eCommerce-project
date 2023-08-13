@extends('theme::layouts.main')

@section('content')
  <div class="main-container zcart-light-bg">
    <div class="container">
      {{-- <div class="row align-items-center">
        <div class="col-md-12">
          <div class="zcart-breadcrumb">
            <a href="#">Home</a><span class="lnr lnr-chevron-right"></span>
            <a href="#">Categories List</a>
          </div>
        </div>
      </div> --}}
      <div class="category-list-area">
        <!---Zcart category wise products section-->
        @foreach ($all_categories as $categoryGroup)
          <div class="zcart-section zcart-category-section zcart-white-bg pb-20">
            <div class="row no-gutters">
              <div class="col-12 col-lg-auto">
                <div class="left-category-banner">
                  <a href="#" class="d-block">
                    <div class="category-box-img">
                      <img src="{{ get_cover_img_src($categoryGroup, 'category') }}" alt="{{ $categoryGroup->name }}">
                    </div>
                    <div class="category-box-info">
                      <div class="category-title">{{ $categoryGroup->name }}</div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="category-list-group-area">
                  <div class="row zcart-low-gap">
                    @foreach ($categoryGroup->subGroups as $subGroup)
                      <div class="col-xl-3 col-lg-4">
                        <div class="category-list-group">
                          <h3>
                            <a href="{{ route('categories.browse', $subGroup->slug) }}">
                              {!! $subGroup->name !!}c
                            </a>
                          </h3>
                          <ul class="list-unstyled">
                            @foreach ($subGroup->categories as $cat)
                              <li>
                                <a href="{{ route('category.browse', $cat->slug) }}">
                                  {!! $cat->name !!}c
                                </a>
                              </li>
                            @endforeach
                          </ul>
                          {{-- <a href="#" class="zcart-link">More <span class="lnr lnr-chevron-right"></span></a> --}}
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        <!---End Zcart category wise products section-->
      </div>
      <!--- .category-list-area -->
    </div>
    <!--- .container -->
  </div>
  <!--- .main-container -->
@endsection
