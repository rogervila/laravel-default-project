@extends('layouts.app')

@section('body')

<form method="POST" action="{{ url('/login') }}">

    {{ csrf_field() }}

    <input type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="email">

    @if ($errors->has('email'))
        <strong>{{ $errors->first('email') }}</strong>
    @endif

    <br><br>

    <input type="password" name="password" required placeholder="password">

    @if ($errors->has('password'))
        <strong>{{ $errors->first('password') }}</strong>
    @endif

    <br><br>

    <label>
        <input type="checkbox" name="remember"> Remember Me
    </label>

    <br><br>

    <input type="submit" value="Login">

    <br><br>

    <a class="btn btn-link" href="{{ url('/password/reset') }}">
        Forgot Your Password?
    </a>

</form>

@endsection
