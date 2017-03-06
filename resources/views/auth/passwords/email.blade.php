@extends('layouts.app')

<!-- Main Content -->
@section('body')

@if (session('status'))
    {{ session('status') }}
@endif

<form method="POST" action="{{ url('/password/email') }}">
    {{ csrf_field() }}

    <input placeholder="email" type="email" name="email" value="{{ old('email') }}" required>

    @if ($errors->has('email'))
        {{ $errors->first('email') }}
    @endif


    <input type="submit" value="Send Password Reset Link">

</form>

@endsection
