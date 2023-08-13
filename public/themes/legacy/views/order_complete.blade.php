@extends('theme::layouts.main')

@section('content')
    <!-- HEADER SECTION -->
    @include('theme::headers.order_detail')

    <!-- CONTENT SECTION -->
	@include('theme::contents.order_complete')

    <!-- BROWSING ITEMS -->
    @include('theme::sliders.browsing_items')
@endsection