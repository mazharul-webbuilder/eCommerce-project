@if(isset($banners['group_1']))
	<section>
	  <div class="container">
	    <div class="section-title"></div>
		<div class="row featured">
	        @foreach($banners['group_1'] as $banner)
	          @include('theme::layouts.banner', $banner)
	        @endforeach
	    </div><!-- /.row -->
	  </div><!-- /.container -->
	</section>
@endif