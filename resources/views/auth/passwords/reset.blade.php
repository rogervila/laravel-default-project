@extends('layouts.app')

@section('body')

@if (session('status'))
    {{ session('status') }}
@endif

<form method="POST" action="{{ url('/password/reset') }}">
    {{ csrf_field() }}

    <input type="hidden" name="token" value="{{ $token or '' }}">


    <input placeholder="email" type="email" name="email" value="{{ $email or old('email') }}" required autofocus>

    @if ($errors->has('email'))
        {{ $errors->first('email') }}
    @endif

    <input placeholder="password" type="password" name="password" required>

    @if ($errors->has('password'))
        {{ $errors->first('password') }}
    @endif

    <input placeholder="password-confirm" type="password" name="password_confirmation" required>

    @if ($errors->has('password_confirmation'))
        {{ $errors->first('password_confirmation') }}
    @endif


    <input type="submit" value="Reset Password">
</form>

@endsection
