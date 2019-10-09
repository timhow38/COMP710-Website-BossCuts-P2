@inject('request', 'Illuminate\Http\Request')

<div class="row">
  <div class="col">
    <li class="list-group-item{{ $request->segment(1) == 'home' ? 'active' : '' }}">
      <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('barberadmin.qa_dashboard')</span>
                </a>
    </li>
  </div>
  <div class="col">
    @can('client_access')
    <li class="list-group-item{{ $request->segment(2) == 'clients' ? 'active' : '' }}">
      <a href="{{ route('admin.clients.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">@lang('barberadmin.clients.title')</span>
                </a>
    </li>
  </div>
  <div class="col">
    @endcan @can('employee_access')
    <li class="list-group-item{{ $request->segment(2) == 'employees' ? 'active' : '' }}">
      <a href="{{ route('admin.employees.index') }}">
                    <i class="fa fa-suitcase"></i>
                    <span class="title">@lang('barberadmin.employees.title')</span>
                </a>
    </li>
  </div>
  <div class="col">
    @endcan @can('working_hour_access')
    <li class="list-group-item{{ $request->segment(2) == 'working_hours' ? 'active' : '' }}">
      <a href="{{ route('admin.working_hours.index') }}">
                    <i class="fa fa-hourglass"></i>
                    <span class="title">@lang('barberadmin.working-hours.title')</span>
                </a>
    </li>
  </div>
</div>
<div class="row">
  <div class="col">
    @endcan @can('service_access')
    <li class="list-group-item{{ $request->segment(2) == 'services' ? 'active' : '' }}">
      <a href="{{ route('admin.services.index') }}">
                    <i class="fa fa-hourglass"></i>
                    <span class="title">@lang('barberadmin.services.title')</span>
                </a>
    </li>
  </div>
  <div class="col">
    @endcan @can('appointment_access')
    <li class="list-group-item{{ $request->segment(2) == 'appointments' ? 'active' : '' }}">
      <a href="{{ route('admin.appointments.index') }}">
                      <i class="fa fa-calendar"></i>
                      <span class="title">@lang('barberadmin.appointments.title')</span>
                  </a>
    </li>
  </div>

  <div class="col">
    <li class="list-group-item{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
      <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
    </li>
  </div>
  <div class="col">
    <li class="list-group-item">
      <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('barberadmin.qa_logout')</span>
                </a>
    </li>

    {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
    <button type="submit">@lang('barberadmin.logout')</button> {!! Form::close() !!}

  </div>
</div>

  @endcan @can('user_management_access')
  <li class="list-group-item">
    <a href="#">
                          <i class="fa fa-users"></i>
                          <span class="title">@lang('barberadmin.user-management.title')</span>
                          <span class="fa arrow"></span>
                      </a>
    <ul class="sub-menu">

      @can('role_access')
      <li class="list-group-item{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
        <a href="{{ route('admin.roles.index') }}">
                                      <i class="fa fa-briefcase"></i>
                                      <span class="title">
                                  @lang('barberadmin.roles.title')
                              </span>
                                  </a>
      </li>
      @endcan @can('user_access')
      <li class="list-group-item{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
        <a href="{{ route('admin.users.index') }}">
                                      <i class="fa fa-user"></i>
                                      <span class="title">
                                  @lang('barberadmin.users.title')
                              </span>
                                  </a>
      </li>
      @endcan
    </ul>
  </li>
  @endcan





