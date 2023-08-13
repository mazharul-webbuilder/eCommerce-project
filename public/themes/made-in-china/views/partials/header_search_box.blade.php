{!! Form::open(['route' => 'inCategoriesSearch', 'method' => 'GET', 'id' => 'search-categories-form', 'class' => 'navbar-left navbar-form navbar-search', 'role' => 'search']) !!}
    <div class="header-search">
        <div class="zcart-form-group d-flex">
            <input id="zcart-search-field" name="q" autocomplete="off" type="text" placeholder="{{trans('theme.main_searchbox_placeholder')}}" data-search value="{{Request::get('q')}}">
            <button type="submit" class="search-btn"><span class="d-none d-lg-block">{{trans('theme.search')}}</span><span class="lnr lnr-magnifier d-block d-lg-none"></span></button>
        </div>
    </div>
{!! Form::close() !!}