<h3 class="widget-title mt-4">
	<i class="far fa-stethoscope"></i> {{ trans('pharmacy::lang.upload_prescription') }}
</h3>

<div class="form-group mt-3 mb-5">
  	{!! Form::file('prescription', ['required']) !!}
  	<div class="help-block with-errors"></div>
</div>