@extends('themes.' . env('THEME', THEME_DEFAULT) . '.layouts.authen')

@section('content')

    <div class="login-box">

        <h1 class="text-center">Password Reset</h1>

        <form method="POST" action="{{ url('password/reset') }}">
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="col-md-12 raw-margin-top-24 {{ get_field_error_class('email', $errors) }}">
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                {!! get_field_error_detail('email', $errors) !!}
            </div>
            <div class="col-md-12 raw-margin-top-24 {{ get_field_error_class('password', $errors) }}">
                <label>Password</label>
                <input class="form-control" type="password" name="password">
                {!! get_field_error_detail('password', $errors) !!}
            </div>
            <div class="col-md-12 raw-margin-top-24 {{ get_field_error_class('password_confirmation', $errors) }}">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation">
                {!! get_field_error_detail('password_confirmation', $errors) !!}
            </div>
            <div class="col-md-12 raw-margin-top-24">
                <button class="btn btn-primary" type="submit">Reset Password</button>
            </div>
        </form>
    </div>

@stop