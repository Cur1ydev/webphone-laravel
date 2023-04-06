<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="description">
    <title>Client</title>
    @include('web.css')
</head>
<body class="template-index index-demo22" ng-app="myapp">
@if(session()->has('client'))
    @include('web.headerlogin')
@else
    @include('web.header')
@endif
@yield('content')
@if(session()->has('client'))
@include('web.footerlogin')
@else
    @include('web.footer')
@endif
@include('web.js')
</body>
</html>
