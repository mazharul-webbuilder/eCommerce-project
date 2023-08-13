<div class="form-item">
  {!! Form::label('reply', trans('theme.reply') . '*') !!}
  {!! Form::textarea('reply', null, ['class' => 'form-text', 'rows' => '2', 'placeholder' => trans('theme.placeholder.message'), 'required']) !!}
  <div class="help-block with-errors"></div>
</div>

<div class="form-item">
  {!! Form::label('attachment', trans('theme.attachment')) !!}
  <input type="file" name="attachments[]" id="uploadBtn" class="upload" multiple />
  <div class="help-block with-errors"></div>
</div>
