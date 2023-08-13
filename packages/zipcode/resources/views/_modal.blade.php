<link href="{{asset('css/select2.css')}}" rel="stylesheet"/>

<div class="modal-dialog modal-sm" id="modal-container">
    <div class="modal-content">
        {!! Form::open(['method' => 'POST', 'route' => [config('zipcode.routes.updateZipcode')], 'data-toggle' => 'validator']) !!}
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            {{ trans('zipcode::lang.setup_zipcode') }}
        </div>
        <div class="modal-body">
            <div class="form-group">
                <select name="default_zipcode" class="form-control input-lg" id="searchZipcode" style="width: 100%" >
                    <option value="{{session('zipcode_default')}}" selected>{{ session('zipcode_default') }}</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit(trans('app.update'), ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog -->

<script src="{{asset('js/select2.js')}}"></script>

<script type="text/javascript">
    $('#searchZipcode').select2({
        theme: 'bootstrap4',
        dropdownParent: "#modal-container",
        minimumInputLength: 3,
        ajax: {
            url : "{{ route(config('zipcode.routes.searchZipcode')) }}",
            dataType: 'json',
            processResults: function (data) {
                return {
                    results: data,
                    flag: 'selectprogram',
                };
            },
            cache: true
        },
        placeholder: "{{ trans('zipcode::lang.search_zipcode') }}",
    });
</script>