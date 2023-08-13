@extends('admin.layouts.master')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('eventy::lang.events') }}</h3>
            <div class="box-tools pull-right">
                @can('create', \Incevio\Package\Eventy\Models\Event::class)
                    <a href="javascript:void(0)" data-link="{{ route('event.create') }}"
                       class="ajax-modal-btn btn btn-new btn-flat">{{ trans('eventy::lang.create_event') }}</a>
                @endcan
            </div>
        </div> <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-hover table-no-sort">
                <thead>
                <tr>
                    <th>{{ trans('app.image') }}</th>
                    <th>{{ trans('eventy::lang.title') }}</th>
                    <th>{{ trans('eventy::lang.venue') }}</th>
                    <th>{{ trans('eventy::lang.schedule') }}</th>
                    <th>{{ trans('eventy::lang.registered') }}</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody id="massSelectArea">
                @foreach($events as $event)
                    <tr>
                        <td>
                            <img src="{{ get_storage_file_url(optional($event->featureImage)->path, 'tiny') }}"
                                 class="img-sm" alt="{!! $event->title !!}">
                        </td>
                        <td>
                            {{ $event->title }}

                            @unless($event->public)
                                {!! $event->type !!}
                            @endunless

                            @if($event->status != \Incevio\Package\Eventy\Models\Event::STATUS_ACTIVE)
                                {!! $event->statusName() !!}
                            @endif
                        </td>
                        <td>{{ $event->venue }} </td>
                        <td>
                            {{ $event->starts }} -
                            {{ $event->ends }}
                        </td>
                        <td>
                            <span class="label label-default"> {{ count($event->customers->unique()) }} </span>
                        </td>
                        <td class="row-options" style="width: 75px">
                            <a href="{{ route('event.user', $event->id) }}"><i data-toggle="tooltip"
                                                                               data-placement="top"
                                                                               title="{{ trans('eventy::lang.registered_user') }}"
                                                                               class="fa fa-user"></i></a>&nbsp;
                            @can('update', $event)
                                <a href="javascript:void(0)" data-link="{{ route('event.edit', $event->id) }}"
                                   class="ajax-modal-btn"><i data-toggle="tooltip" data-placement="top"
                                                             title="{{ trans('app.edit') }}" class="fa fa-edit"></i></a>
                                &nbsp;
                            @endcan
                            @can('delete', $event)
                                {!! Form::open(['route' => ['event.destroy', $event->id], 'method' => 'delete', 'class' => 'data-form']) !!}
                                {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'confirm ajax-silent', 'title' => trans('app.delete_permanently'), 'data-toggle' => 'tooltip', 'data-placement' => 'top']) !!}
                                {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- /.box-body -->
    </div>
@endsection
