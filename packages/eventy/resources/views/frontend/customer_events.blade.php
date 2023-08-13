<!-- CONTENT SECTION -->
<div class="clearfix space20"></div>
<section class="eventy">
    <div class="container">
        <div class="row">
            @foreach($events as $event)
                <div class="col-xl-4 col-md-6">
                    <div class="card card-margin">
                        <div class="feature-img">
                            <a href="{{ route('event.show', $event->slug) }}">
                                <img class="full-width"
                                     src="{{ get_storage_file_url(optional($event->image)->path, 'large') }}"
                                     alt="{{ $event->title }}" title="{{ $event->title }}"/>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-primary">
                                            <span class="date">
                                                @if(date('d', strtotime($event->starts)) == date('d', strtotime($event->ends)))
                                                    {{date('d', strtotime($event->starts))}}
                                                @else
                                                    {{date('d', strtotime($event->starts))}}
                                                    - {{date('d', strtotime($event->ends))}}
                                                @endif
                                            </span>
                                        <span class="month">{{date('F', strtotime($event->ends))}}</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <a href="{{ route('event.show', $event->slug) }}">
                                            <h3>{!! Str::limit($event->title, '40','..') !!}</h3></a>
                                        <span class="widget-49-pro-title">{{ Str::limit($event->venue, '25', '..') }}</span>
                                        <span class="widget-49-meeting-time"> {{date('D', strtotime($event->starts))}} {{date('F', strtotime($event->starts))}} {{date('d', strtotime($event->starts))}} {{date('Y', strtotime($event->starts))}} at {{date('h:i A', strtotime($event->starts))}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

