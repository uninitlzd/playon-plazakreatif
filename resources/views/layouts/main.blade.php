<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Plaza Kreatif 13</title>
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
<div id="app" >
    <navbar></navbar>
    @yield('content')
</div>
<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{ mix('/js/vendor.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
