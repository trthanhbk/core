@extends('themes.adminlte.layouts.master')

@section('app-content')

    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">
            @include('dashboard.panel')
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper" style="min-height: 916px;">
        <section class="content">
            @yield('content')
        </section>
    </div>

@stop