<!DOCTYPE html>
<html>
<head>
    <title>Dashboard {{ Auth::user()->name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    @include('dashboard.layout.header')
<div class="container mt-4 py-5">
    @yield('body')
</div>
    @include('dashboard.layout.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
