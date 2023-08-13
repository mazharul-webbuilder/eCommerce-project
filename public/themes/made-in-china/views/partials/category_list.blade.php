<ul class="main-category-list list-unstyled">
    @foreach($all_categories as $catGroup)
        @if($catGroup->subGroups->count())
            @php
                $categories_count = $catGroup->subGroups->sum('categories_count');
                $cat_counter = 0;
            @endphp

            <li class="has-dropdown-megamenu">
                <a href="{{ route('categoryGrp.browse', $catGroup->slug) }}">
                    {{ $catGroup->name }}
                </a>

                <div class="zcart-megamenu">
                    <div class="row zcart-low-gap">
                        @foreach($catGroup->subGroups as $subGroup)
                            <div class="col-lg-4">
                                <div class="zcart-megamenu-list">
                                    <div class="menu-title">{{ $subGroup->name }}</div>
                                    <ul class="list-unstyled">
                                        @foreach($subGroup->categories as $cat)
                                            <li>
                                                <a href="{{ route('category.browse', $cat->slug) }}">
                                                    {{ $cat->name }}
                                                </a>
                                                {{-- @if($cat->description)
                                                    <p>{!! $cat->description !!}</p>
                                                @endif --}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="{{ route('categoryGrp.browse', $catGroup->slug) }}" class="megamenu-more-categories">{{ trans('theme.all_categories') }}</a>

                    <div class="zcart-megamenu-slider">
                        @foreach($catGroup->subGroups as $subGroup)
                            <a href="{{ route('categories.browse', $subGroup->slug) }}" class="megamenu-slider-item">
                                <img src="{{ get_cover_img_src($subGroup, 'category') }}" alt="{{ $subGroup->name }}">
                                <p>{{ $subGroup->name }}</p>
                            </a>
                        @endforeach
                    </div>

                    {{-- <div class="more-hot-prodducts">
                        {{ trans('theme.hot_item') }} :
                        @foreach($catGroup->subGroups as $subGroup)
                            <a href="">{{ $subGroup->name }}</a> &nbsp;
                        @endforeach
                    </div> --}}
                </div>
            </li>
        @else
            <li>
                <a href="{{ route('categoryGrp.browse', $catGroup->slug) }}">
                    {{ $catGroup->name }}
                </a>
            </li>
        @endif
    @endforeach

    {{-- <li class="more-category-list has-dropdown-megamenu">
        <a href="#">More Categories<span class="lnr lnr-chevron-right"></span></a>
        <div class="zcart-megamenu">
            <ul class="more-category-links list-unstyled">
                <li class="has-more-child-menu">
                    <a href="#">Chemicals</a>
                    <div class="more-child-menu">
                        <div class="row zcart-low-gap">
                            <div class="col-lg-6">
                                <div class="zcart-megamenu-list">
                                    <div class="menu-title">Agriculture Machinery</div>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Agricultural Machinery</a></li>
                                        <li><a href="#">Livestock Machinery</a></li>
                                        <li><a href="#">Feed Processing Machinery</a></li>
                                        <li><a href="#">Tiller</a></li>
                                        <li><a href="#">Harvesting Machine</a></li>
                                    </ul>
                                </div>
                                <div class="zcart-megamenu-list">
                                    <div class="menu-title">Plastic & Woodworking Machinery</div>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Plastic Machinery</a></li>
                                        <li><a href="#">Woodworking Machinery</a></li>
                                        <li><a href="#">Blow Molding Machine</a></li>
                                        <li><a href="#">Plastic Recycling Machine</a></li>
                                        <li><a href="#">Injection Molding Machine</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="zcart-megamenu-list">
                                    <div class="menu-title">Agriculture Machinery</div>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Agricultural Machinery</a></li>
                                        <li><a href="#">Livestock Machinery</a></li>
                                        <li><a href="#">Feed Processing Machinery</a></li>
                                        <li><a href="#">Tiller</a></li>
                                        <li><a href="#">Harvesting Machine</a></li>
                                    </ul>
                                </div>
                                <div class="zcart-megamenu-list">
                                    <div class="menu-title">Plastic & Woodworking Machinery</div>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Plastic Machinery</a></li>
                                        <li><a href="#">Woodworking Machinery</a></li>
                                        <li><a href="#">Blow Molding Machine</a></li>
                                        <li><a href="#">Plastic Recycling Machine</a></li>
                                        <li><a href="#">Injection Molding Machine</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="megamenu-more-categories">More Categoreis</a>
                        <div class="zcart-megamenu-slider">
                            <a href="#" class="megamenu-slider-item">
                                <img src="assets/images/categories/Automatic-Machinery.jpg" alt="Automatic-Machinery">
                                <p>Automatic Machinery</p>
                            </a>
                            <a href="#" class="megamenu-slider-item">
                                <img src="assets/images/categories/China-Machinery-Brands.png" alt="China-Machinery-Brands">
                                <p>China Machinery Brands</p>
                            </a>
                            <a href="#" class="megamenu-slider-item">
                                <img src="assets/images/categories/China-Machinery.jpg" alt="China-Machinery">
                                <p>China Machinery</p>
                            </a>
                            <a href="#" class="megamenu-slider-item">
                                <img src="assets/images/categories/General-Machinery.jpg" alt="General-Machinery">
                                <p>General Machinery</p>
                            </a>
                            <a href="#" class="megamenu-slider-item">
                                <img src="assets/images/categories/Machinery.png" alt="Machinery">
                                <p>Machinery</p>
                            </a>
                            <a href="#" class="megamenu-slider-item">
                                <img src="assets/images/categories/Selected-Machinery.jpg" alt="Selected-Machinery">
                                <p>Selected Machinery</p>
                            </a>
                            <a href="#" class="megamenu-slider-item">
                                <img src="assets/images/categories/Selected-Products-with-Videos.png" alt="Selected-Products-with-Videos">
                                <p>Selected Products with Videos</p>
                            </a>
                        </div>
                        <div class="more-hot-prodducts">
                            Hot Products :
                            <a href="#">Drilling Rig</a>, <a href="#">Stamping</a>, <a href="#">Crane</a>, <a href="#">CNC Cutting Machine</a>, <a href="#">Engraving Machine</a>
                        </div>
                    </div>
                </li>
                <li><a href="#">Furniture</a></li>
                <li><a href="#">Instruments & Meters</a></li>
                <li><a href="#">Office Supplies</a></li>
            </ul>
        </div>
    </li> --}}
</ul>