@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('barberadmin.appointments.title')</h3>

    <div class="container">
        <div class="card-header">
            @lang('barberadmin.qa_view')
        </div> 

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('barberadmin.appointments.fields.client')</th>
                            <td>{{ $appointment->client->first_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.clients.fields.last-name')</th>
                            <td>{{ isset($appointment->client) ? $appointment->client->last_name : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.clients.fields.phone')</th>
                            <td>{{ isset($appointment->client) ? $appointment->client->phone : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.clients.fields.email')</th>
                            <td>{{ isset($appointment->client) ? $appointment->client->email : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.appointments.fields.employee')</th>
                            <td>{{ $appointment->employee->first_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.employees.fields.last-name')</th>
                            <td>{{ isset($appointment->employee) ? $appointment->employee->last_name : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.appointments.fields.start-time')</th>
                            <td>{{ $appointment->start_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.appointments.fields.finish-time')</th>
                            <td>{{ $appointment->finish_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.appointments.fields.comments')</th>
                            <td>{!! $appointment->comments !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.appointments.index') }}" class="btn btn-default">@lang('barberadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop