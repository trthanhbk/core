@if(env('THEME') == 'adminlte')
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('adminlte/dist/img/avatar5.png') }}" class="img-circle img-responsive" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
@endif
<ul class="{{ sidebar_root_ul() }}">
    <li class="{{ sidebar_li_header() }}"><span>Main Navigation</span></li>
    <li @if(Request::is('dashboard', 'dashboard/*')) class="active" @endif>
        <a href="{!! url('dashboard') !!}"><span class="fa fa-dashboard"></span> Dashboard</a>
    </li>
    <li @if(Request::is('user/settings', 'user/password')) class="active" @endif>
        <a href="{!! url('user/settings') !!}"><span class="fa fa-user"></span> Settings</a>
    </li>
    <li @if(Request::is('teams', 'teams/*')) class="active" @endif>
        <a href="{!! url('teams') !!}"><span class="fa fa-users"></span> Teams</a>
    </li>
    @if (Gate::allows('admin'))
        <li class="{{ sidebar_li_header() }}"><span>Admin</span></li>
        <li @if(Request::is('admin/users', 'admin/users/*')) class="active" @endif>
            <a href="{!! url('admin/users') !!}"><span class="fa fa-users"></span> Users</a>
        </li>
        <li @if(Request::is('admin/roles', 'admin/roles/*')) class="active" @endif>
            <a href="{!! url('admin/roles') !!}"><span class="fa fa-lock"></span> Roles</a>
        </li>
    @endif
</ul>