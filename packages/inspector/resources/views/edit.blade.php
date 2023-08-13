<div class="modal-dialog modal-lg">
  <div class="modal-content">
    {!! Form::model($inspetable, ['method' => 'PUT', 'route' => ['admin.inspector.update', $inspetable], 'id' => 'form', 'data-toggle' => 'validator']) !!}
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      {{ trans('inspector::lang.inspectable') }}
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info"> <i class="fa fa-info"></i> <span> {{ trans('app.info') }}</span></a>
            {!! trans('inspector::lang.inspecting_keywors', ['caught' => $inspetable->caught, 'model' => (new ReflectionClass($record))->getShortName(), 'field' => $field]) !!}
            {{ trans('inspector::lang.update_to_appove') }}
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            {!! Form::label('inspectable', trans('inspector::lang.inspectable') . '*', ['class' => 'with-help']) !!}
            {!! Form::textarea('inspectable', $record->$field, ['class' => 'form-control summernote', 'rows' => '4', 'placeholder' => trans('inspector::lang.inspectable'), 'required']) !!}
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      {!! Form::submit(trans('app.update'), ['class' => 'btn btn-flat btn-new']) !!}
    </div>
    {!! Form::close() !!}
  </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog -->
