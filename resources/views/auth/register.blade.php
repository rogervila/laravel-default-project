@extends('layouts.app')

@section('body')

<form method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <input type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="name">

    @if ($errors->has('name'))
        {{ $errors->first('name') }}
    @endif

    <br><br>

    <input type="email" name="email" value="{{ old('email') }}" required placeholder="email">

    @if ($errors->has('email'))
        {{ $errors->first('email') }}
    @endif

    <br><br>

    <input id="password" type="password" name="password" required placeholder="password">

    @if ($errors->has('password'))
        {{ $errors->first('password') }}
    @endif

    <br><br>

    <input id="password-confirm" type="password" name="password_confirmation" required placeholder="password confirmation">

    <br><br>

    <input type="submit" value="Register">
</form>

@endsection
