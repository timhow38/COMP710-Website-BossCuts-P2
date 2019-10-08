@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('barberadmin.working-hours.title')</h3>

    <div class="card card-default">
        <div class="card-header">
            @lang('barberadmin.qa_view')
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('barberadmin.working-hours.fields.employee')</th>
                            <td>{{ $working_hour->employee->first_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.employees.fields.last-name')</th>
                            <td>{{ isset($working_hour->employee) ? $working_hour->employee->last_name : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.working-hours.fields.date')</th>
                            <td>{{ $working_hour->date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.working-hours.fields.start-time')</th>
                            <td>{{ $working_hour->start_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('barberadmin.working-hours.fields.finish-time')</th>
                            <td>{{ $working_hour->finish_time }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.working_hours.index') }}" class="btn btn-default">@lang('barberadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop