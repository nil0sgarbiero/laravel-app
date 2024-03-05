<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard {{ Auth::user()->name }}</title>
    <tallstackui:script />
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('dashboard.layout.header')
<div class="md:container md:mx-auto mt-4 py-5">
    @yield('body')
</div>
    @include('dashboard.layout.footer')
    @livewireScripts
</body>
</html>
