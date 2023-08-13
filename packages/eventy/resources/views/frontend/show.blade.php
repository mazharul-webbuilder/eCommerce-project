@extends('theme::layouts.main')

@section('content')
    <!-- COVER IMAGE -->
    <section class="brand-cover-img-wrapper">
        {{-- <div class="banner banner-o-hid cover-img-wrapper" style="background-image:url( {{ get_cover_img_src($blog, 'blog') }} );"> --}}
        <div class="banner banner-o-hid cover-img-wrapper" style="background-color: #333;">
            <div class="page-cover-caption">
                <h5 class="page-cover-title">{!! trans('eventy::lang.event_details', ['platform' => get_platform_title()]) !!}</h5>
            </div>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="eventy-detail-page my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <div class="event-description">
                        <div class="feature-img">
                            <img class="full-width"
                                 src="{{ get_storage_file_url(optional($event->image)->path, 'full') }}"
                                 alt="{{ $event->title }}" title="{{ $event->title }}"/>
                        </div>
                        <div class="title">
                            <h3>{{$event->title}}</h3>
                        </div>
                        <div class="description mb-5">
                            <p>{!! $event->description !!}</p>
                        </div>

                        <div class="location-map mb-3">
                            <h4>{{trans('eventy::lang.map_location')}}</h4>
                            <div class="center mb-2">
                                <i class="fa fa-map-marker-alt"></i>
                                <span>{{ $event->venue }}</span>
                            </div>
                            <div class="map">
                                <iframe width="100%" height="450"
                                        src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=52.70967533219885, -8.020019531250002&amp;q={{ $event->venue }}&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <br/>
                            </div>
                        </div>

                        <div class="social-share">
                            <h4>{{ trans('eventy::lang.share_with_friends') }}</h4>
                            @include('eventy::frontend.share_btn')
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event-location event-side mb-5">

					<!--	disable button after booked the events -->
                        @if(Auth::guard('customer')->check())
                            @if($event->customers->unique()->contains('id', Auth::guard('customer')->user()->id))
                                <a href="{{route('event.cancel', $event->id)}}" class="btn btn-warning btn-block mb-4"
                                   id="eventy-seat-book">{{ trans('eventy::lang.cancel_this_event') }}</a>
                            @else
                                <a href="{{route('event.book', $event->id)}}" class="btn btn-primary btn-block mb-4"
                                   id="eventy-seat-book">{{ trans('eventy::lang.book_this_event') }}</a>
                            @endif

                        @else
                            <a href="{{route('event.book', $event->id)}}" class="btn btn-primary btn-block mb-4"
                               id="eventy-seat-book">{{ trans('eventy::lang.book_this_event') }}</a>
                        @endif

                        <div class="head">
                            <h4>{{ trans('eventy::lang.date_time') }}</h4>
                        </div>
                        <div class="center">
                            <i class="fa fa-clock"></i>
                            <span>{{date('D', strtotime($event->starts))}} {{date('F', strtotime($event->ends))}} {{date('d', strtotime($event->starts))}} {{date('Y', strtotime($event->starts))}} at {{date('h:i A', strtotime($event->starts))}} <b> to </b>  {{date('D', strtotime($event->ends))}} {{date('F', strtotime($event->ends))}} {{date('d', strtotime($event->ends))}} {{date('Y', strtotime($event->ends))}} at {{date('h:i A', strtotime($event->ends))}}</span>
                        </div>

                        <div class="head mt-3">
                            <h4>{{ trans('eventy::lang.location') }}</h4>
                        </div>
                        <div class="center">
                            <i class="fa fa-map-marker-alt"></i>
                            <span>{{ $event->venue }}</span>
                        </div>

                        <div class="social-share mt-3">
                            <h4>Spread the word</h4>
                            @include('eventy::frontend.share_btn')
                        </div>
                    </div>
                    <div class="latest-event event-side">
                        <h4>{{ trans('eventy::lang.latest_events') }}</h4>
                        <ul>
                            @foreach($events as $ev)
                                <li>
                                    <a href="{{ route('event.show', $ev->slug) }}">{!! Str::limit($ev->title,30,'..') !!}  </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

