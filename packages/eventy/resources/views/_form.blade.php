<div class="row">
  <div class="col-md-9 nopadding-right">
    <div class="form-group">
      {!! Form::label('title', trans('eventy::lang.title').'*') !!}
      {!! Form::text('title', null, ['class' => 'form-control makeSlug', 'placeholder' => trans('eventy::lang.title'), 'required']) !!}
    </div>
  </div>
  <div class="col-md-3 nopadding-left">
    <div class="form-group">
      {!! Form::label('status', trans('eventy::lang.status').'*') !!}
      {!! Form::select('status', ['1' => trans('eventy::lang.active'), '2' => trans('eventy::lang.inactive')], isset($event) ? null : 1, ['class' => 'form-control select2-normal', 'required']) !!}
      <div class="help-block with-errors"></div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-9 nopadding-right">
    <div class="form-group">
      {!! Form::label('venue', trans('eventy::lang.venue').'*') !!}
      {!! Form::text('venue', null, ['class' => 'form-control', 'placeholder' => trans('eventy::lang.venue'), 'required']) !!}
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="col-md-3 nopadding-left">
    <div class="form-group">
      {!! Form::label('public', trans('eventy::lang.type').'*') !!}
      {!! Form::select('public', ['1' => trans('eventy::lang.public'), '0' => trans('eventy::lang.private')], isset($event) ? null : 1, ['class' => 'form-control select2-normal', 'required']) !!}
      <div class="help-block with-errors"></div>
    </div>
  </div>
</div>

@unless(isset($event))
  <div class="form-group">
    {!! Form::label('slug', trans('eventy::lang.slug').'*') !!}
    {!! Form::text('slug', null, ['class' => 'form-control slug', 'placeholder' => trans('eventy::lang.slug'), 'required']) !!}
    <div class="help-block with-errors"></div>
  </div>
@endunless

<div class="row">
  <div class="col-md-6 nopadding-right">
    <div class="form-group">
      {!! Form::label('starts', trans('eventy::lang.starts').'*') !!}
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        {!! Form::text('starts', null, ['class' => 'form-control datetimepicker', 'placeholder' => trans('eventy::lang.starts'), 'required']) !!}
      </div>
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="col-md-6 nopadding-left">
    <div class="form-group">
      {!! Form::label('ends', trans('eventy::lang.ends').'*') !!}
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        {!! Form::text('ends', null, ['class' => 'form-control datetimepicker', 'placeholder' => trans('eventy::lang.ends'), 'required']) !!}
      </div>
      <div class="help-block with-errors"></div>
    </div>
  </div>
</div>

<div class="form-group">
  {!! Form::label('description', trans('eventy::lang.description').'*') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control summernote-long', 'placeholder' => trans('eventy::lang.description'), 'required']) !!}
  <div class="help-block with-errors"></div>
</div>

{{-- <div class="form-group">
    {!! Form::label('tag_list[]', trans('eventy::lang.tags')) !!}
    {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control select2-tag', 'multiple' => 'multiple']) !!}
</div> --}}
<div class="form-group">
  <label for="exampleInputFile"> {{ trans('app.feature_image') }}</label>
  @if(isset($event) && Storage::exists(optional($event->image)->path))
    <img src="{{ get_storage_file_url(optional($event->image)->path, 'small') }}" width="" alt="{{ trans('app.feature_image') }}">
    <span style="margin-left: 10px;">
      {!! Form::checkbox('delete_image[feature]', 1, null, ['class' => 'icheck']) !!} {{ trans('app.form.delete_image') }}
    </span>
  @endif

  <div class="row">
    <div class="col-md-9 nopadding-right">
      <input id="uploadFile" placeholder="{{ trans('app.feature_image') }}" class="form-control" disabled="disabled" style="height: 28px;" />
      <div class="help-block with-errors"></div>
    </div>
    <div class="col-md-3 nopadding-left">
      <div class="fileUpload btn btn-primary btn-block btn-flat">
        <span>{{ trans('app.form.upload') }}</span>
        <input type="file" name="images[feature]" id="uploadBtn" class="upload" />
      </div>
    </div>
  </div>
</div>
<p class="help-block">* {{ trans('app.form.required_fields') }}</p>