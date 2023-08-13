@if(isset($banners['group_3']))
    <div class="space20"></div>
	<div class="row featured">
        @foreach($banners['group_3'] as $banner)
          @include('theme::layouts.banner', $banner)
        @endforeach
    </div><!-- /.row -->
@endif