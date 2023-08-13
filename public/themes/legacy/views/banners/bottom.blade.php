@if(isset($banners['group_6']))
	<section>
	  <div class="container full-width">
    	  <div class="space20"></div>
	      <div class="row">
	        @foreach($banners['group_6'] as $banner)
	          @include('theme::layouts.banner', $banner)
	        @endforeach
	    </div><!-- /.row -->
	  </div><!-- /.container -->
	</section>
@endif