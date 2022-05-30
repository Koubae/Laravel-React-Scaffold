<?php
/**
 * @var array $data
 */
$data ??= [];
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="robots" content="all"/>
    <meta name="author" content="Federico Baú, https://federicobau.dev"/>
    <meta name="keywords" content="TODO"/>
    <meta name="description" content="TODO"/>

    <!-- Favicons Icons TODO: Add favicon -->
{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/favicon/logo.svg') }}">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{url('images/favicon/logo.svg') }}">--}}
{{--    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/favicon/logo.svg') }}">--}}
{{--    <link rel="manifest" href="{{ url('images/favicon/site.webmanifest') }}">--}}
{{--    <link rel="mask-icon" href=""{{ url('images/favicon/logo.svg') }}" color="#5bbad5">--}}
{{--    <meta name="msapplication-TileColor" content="#da532c">--}}
{{--    <meta name="theme-color" content="#ffffff">--}}

    <title>{{ config('app.name')  }}</title>
</head>
<body class="antialiased">
    <script id="ServerData">
        window.__SERVER__DATA__ = <?= json_encode($data) ?>;
    </script>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>

    <script type="text/javascript" src="{{ mix('js/index.js') }}"></script>
</body>
</html>
