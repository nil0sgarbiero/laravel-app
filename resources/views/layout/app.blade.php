<!DOCTYPE html>
<html>
<head>
    <title>Piacentini - Painel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex-auto place-content-stretch">
    <div class="flex flex-col h-screen justify-between place-content-stretch">
        @include('layout.header')

            @yield('body')

        @include('layout.footer')
    </div>
</body>
</html>
