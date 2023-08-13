@if(isset($banners['group_2']))
	<div class="row featured">
        @foreach($banners['group_2'] as $banner)
          @include('theme::layouts.banner', $banner)
        @endforeach
    </div><!-- /.row -->
@endif