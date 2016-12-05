@extends('themes.' . env('THEME', THEME_DEFAULT) . '.layouts.authen')

@section('content')
    <div class="login-box">
        <h1 class="text-center">Forgot Password</h1>

        <form method="POST" action="{{ url('password/email') }}">
            {!! csrf_field() !!}
            <div class="col-md-12 pull-left {{ get_field_error_class('email', $errors) }}">
                <label>Email</label>
                <input class="form-control" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                {!! get_field_error_detail('email', $errors) !!}
            </div>
            <div class="col-md-12 pull-left raw-margin-top-24">
                <a class="btn btn-default pull-left" href="/login">Wait I remember!</a>
                <button class="btn btn-primary pull-right" type="submit" class="button">Send Password Reset Link</button>
            </div>
        </form>
    </div>
@stop
