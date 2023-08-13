<div class="form-group">
	{!! Form::label('expiry_date', trans('pharmacy::lang.expiry_date'), ['class' => 'with-help']) !!}
	<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="{{ trans('pharmacy::lang.help_expiry_date') }}"></i>
	<div class="input-group">
	  	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	  	{!! Form::text('expiry_date', null, ['class' => 'datepicker form-control', 'placeholder' => trans('pharmacy::lang.expiry_date'), get_from_option_table('pharmacy_expiry_date_required', 1) ? 'required' : '']) !!}
	</div>
  	<div class="help-block with-errors"></div>
</div>
