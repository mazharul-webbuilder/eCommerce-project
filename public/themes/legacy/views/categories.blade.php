@extends('theme::layouts.main')

@section('content')
    <!-- CONTENT SECTION -->
    @include('theme::contents.categories_page')

    <!-- BROWSING ITEMS -->
    @include('theme::sliders.browsing_items')
@endsection