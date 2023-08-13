@extends('theme::layouts.main')

@section('content')
    <!-- SHOP COVER IMAGE -->
    @include('theme::banners.shop_cover', ['shop' => $shop])

    <!-- CONTENT SECTION -->
    @include('theme::contents.shop_page')

    <!-- BROWSING ITEMS -->
    @include('theme::sliders.browsing_items')

    <!-- MODALS -->
    @include('theme::modals.shopReviews')

@endsection

@section('scripts')
    @if(is_chat_enabled($shop))
	    @include('theme::scripts.chatbox', ['shop' => $shop, 'agent' => $shop->owner, 'agent_status' => trans('theme.online')])
    @endif
@endsection
