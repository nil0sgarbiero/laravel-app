<!DOCTYPE html>
<html>
<head>
    <title>Piacentini - Painel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layout.header')
<div class="container mt-4 py-5">
    @yield('body')
</div>
    @include('layout.footer')
</body>
</html>
