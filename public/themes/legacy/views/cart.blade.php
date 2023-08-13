@extends('theme::layouts.main')

@section('content')
    <!-- breadcrumb -->
    @include('theme::headers.cart_page')

    <!-- CONTENT SECTION -->
    @include('theme::contents.cart_page')

    <div class="space30"></div>

    <!-- BROWSING ITEMS -->
    @include('theme::sliders.browsing_items')

    <!-- bottom Banner -->
    @include('theme::banners.bottom')
@endsection

@section('scripts')
    @include('theme::modals.ship_to')
    @include('theme::scripts.cart')
    @include('theme::scripts.dynamic_checkout')
@endsection