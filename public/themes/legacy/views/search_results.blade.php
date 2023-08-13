@extends('theme::layouts.main')

@section('content')
    <!-- HEADER SECTION -->
    @include('theme::headers.search_results')

    <!-- CONTENT SECTION -->
    @include('theme::contents.search_results')

    <!-- BROWSING ITEMS -->
    @include('theme::sliders.browsing_items')
@endsection