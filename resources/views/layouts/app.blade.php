<!DOCTYPE html>
<html lang="{{ config('app.locale') }}"  {{-- prefix="og: http://ogp.me/ns#"--}} >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Title
    </title>

    {{--
    <!--[if lte IE 10]>
        <script src="https://cdn.polyfill.io/v2/polyfill.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script>
    <![endif]-->
    --}}

    {{--
    <meta name="description" content="">
    <meta name="author" content="">
    --}}

    {{--
    <link rel="alternate" hreflang="ca" href="{{ URL::to('/ca') }}">
    <link rel="alternate" hreflang="en" href="{{ URL::to('/en') }}">
    <link rel="alternate" hreflang="es" href="{{ URL::to('/es') }}">
    <link rel="alternate" hreflang="x-default" href="{{ URL::to('/') }}">
    --}}

    {{--
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/mstile-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    --}}

    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" type="image/x-icon">

    {{--
    <link rel="icon" type="image/png" href="{{ asset('favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('favicons/favicon-48x48.png') }}" sizes="48x48">
    <link rel="icon" type="image/png" href="{{ asset('favicons/favicon-96x96.png') }}" sizes="96x96">
    --}}

    {{--
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon-180x180.png') }}">
    --}}

    {{--
    <link href="https://plus.google.com/+NAME " rel="publisher">
    --}}

    {{--
    <meta property="og:locale" content="{{ App::getLocale() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{ URL::to('/') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:image" content="{{ asset('img/placeholder.jpg') }}">
    --}}

    {{--
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:site" content=""> 
    <meta name="twitter:domain" content="{{ URL::to('/') }}">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image:src" content="{{ asset('img/placeholder.jpg') }}">
    --}}

    {{--
    <meta name="dc.language" content="{{ App::getLocale() }}">
    <meta name="dc.title" content="">
    <meta name="dc.keywords" content="">
    <meta name="dc.description" content="">
    --}}

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    @yield('head')
</head>
<body data-csrf="{{ csrf_token() }}">

@yield('body')

{{-- Scripts --}}
<script src="{{ asset('/js/app.js') }}"></script>

</body>
</html>
