@extends('admin.layouts.master')

@section('content')
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">{{ trans('app.visitors') }}</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div> <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-hover" id="all-visitors-table">
        <thead>
          <tr>
            <th>{{ trans('app.flag') }}</th>
            <th>{{ trans('app.ip') }}</th>
            <th>{{ trans('app.hits') }}</th>
            <th>{{ trans('app.page_views') }}</th>
            <th>{{ trans('app.last_visits') }}</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div> <!-- /.box-body -->
  </div> <!-- /.box -->
@endsection

@section('page-script')
  <script type="text/javascript">
    $('#all-visitors-table').DataTable({
      // "aaSorting": [],
      "aaSorting": [
        [1, "desc"]
      ],
      "iDisplayLength": {{ getPaginationValue() }},
      "processing": true,
      "serverSide": true,
      "ajax": "{{ route('admin.report.visitors.getMore') }}",
      "columns": [{
          'data': 'flag',
          'name': 'flag',
          'searchable': false
        },
        {
          'data': 'ip',
          'name': 'ip'
        },
        {
          'data': 'hits',
          'name': 'hits',
          'searchable': false
        },
        {
          'data': 'page_views',
          'name': 'page_views',
          'searchable': false
        },
        {
          'data': 'last_visits',
          'name': 'last_visits',
          'searchable': false
        },
        {
          'data': 'option',
          'name': 'option',
          'orderable': false,
          'searchable': false,
          'exportable': false,
          'printable': false
        }
      ],
      "oLanguage": {
        "sInfo": "_START_ to _END_ of _TOTAL_ entries",
        "sLengthMenu": "Show _MENU_",
        "sSearch": "",
        "sEmptyTable": "No data found!",
        "oPaginate": {
          "sNext": '<i class="fa fa-hand-o-right"></i>',
          "sPrevious": '<i class="fa fa-hand-o-left"></i>',
        },
      },
      "aoColumnDefs": [{
        "bSortable": false,
        "aTargets": [-1]
      }],
      "lengthMenu": [
        [10, 25, 50, -1],
        ['10 rows', '25 rows', '50 rows', 'Show all']
      ], // page length options
      dom: 'Bfrtip',
      buttons: [
        'pageLength', 'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
  </script>
@endsection
