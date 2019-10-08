@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('barberadmin.clients.title')</h3>

    <div class="card card-default">
        <div class="card-header">
            @lang('barberadmin.qa_view')
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('barberadmin.clients.fields.first-name')</th>
                            <td>{{ $client->first_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.clients.fields.last-name')</th>
                            <td>{{ $client->last_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.clients.fields.phone')</th>
                            <td>{{ $client->phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.clients.fields.email')</th>
                            <td>{{ $client->email }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#appointments" aria-controls="appointments" role="tab" data-toggle="tab">Appointments</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabcard" class="tab-pane active" id="appointments">
<table class="table table-bordered table-striped {{ count($appointments) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('barberadmin.appointments.fields.client')</th>
                        <th>@lang('barberadmin.clients.fields.last-name')</th>
                        <th>@lang('barberadmin.clients.fields.phone')</th>
                        <th>@lang('barberadmin.clients.fields.email')</th>
                        <th>@lang('barberadmin.appointments.fields.employee')</th>
                        <th>@lang('barberadmin.employees.fields.last-name')</th>
                        <th>@lang('barberadmin.appointments.fields.start-time')</th>
                        <th>@lang('barberadmin.appointments.fields.finish-time')</th>
                        <th>@lang('barberadmin.appointments.fields.comments')</th>
                        <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @if (count($appointments) > 0)
            @foreach ($appointments as $appointment)
                <tr data-entry-id="{{ $appointment->id }}">
                    <td>{{ $appointment->client->first_name or '' }}</td>
<td>{{ isset($appointment->client) ? $appointment->client->last_name : '' }}</td>
<td>{{ isset($appointment->client) ? $appointment->client->phone : '' }}</td>
<td>{{ isset($appointment->client) ? $appointment->client->email : '' }}</td>
                                <td>{{ $appointment->employee->first_name or '' }}</td>
<td>{{ isset($appointment->employee) ? $appointment->employee->last_name : '' }}</td>
                                <td>{{ $appointment->start_time }}</td>
                                <td>{{ $appointment->finish_time }}</td>
                                <td>{!! $appointment->comments !!}</td>
                                <td>
                                    @can('appointment_view')
                                    <a href="{{ route('admin.appointments.show',[$appointment->id]) }}" class="btn btn-xs btn-primary">@lang('barberadmin.qa_view')</a>
                                    @endcan
                                    @can('appointment_edit')
                                    <a href="{{ route('admin.appointments.edit',[$appointment->id]) }}" class="btn btn-xs btn-info">@lang('barberadmin.qa_edit')</a>
                                    @endcan
                                    @can('appointment_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("barberadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.appointments.destroy', $appointment->id])) !!}
                                    {!! Form::submit(trans('barberadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="9">@lang('barberadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.clients.index') }}" class="btn btn-default">@lang('barberadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop