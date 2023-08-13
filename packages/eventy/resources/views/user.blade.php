@extends('admin.layouts.master')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('eventy::lang.registered_user') }}</h3>
            <div class="box-tools pull-right">

            </div>
        </div> <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-hover table-no-sort">
                <thead>
                <tr>
                    <th>{{ trans('app.name') }}</th>
                    <th>{{ trans('app.email') }}</th>
                    <th>{{ trans('app.sex') }}</th>
                    <th>{{ trans('app.dob') }}</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody id="massSelectArea">
                @foreach($users as $user)
                    <tr>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>{!! get_formated_gender($user->sex) !!}</td>
                        <td>
                            {{ $user->dob }}
                        </td>
                        <td class="row-options" style="width: 75px">
                            {!! Form::open(['route' => ['event.user.remove', $id, $user->id], 'method' => 'delete', 'class' => 'data-form']) !!}
                            {!! Form::button('<i class="fa fa-trash-o fa-lg"></i>', ['type' => 'submit', 'class' => 'confirm ajax-silent', 'title' => trans('eventy::lang.cancel_this_event'), 'data-toggle' => 'tooltip', 'data-placement' => 'top']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- /.box-body -->
    </div>
@endsection
