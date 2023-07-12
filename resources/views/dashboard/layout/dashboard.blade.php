<!DOCTYPE html>
<html>
<head>
    <title>Dashboard {{ Auth::user()->name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container">
        <a class="navbar-brand text-dark" href="#">Meu Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('dashboard') }}">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Página 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Página 3</a>
                </li>
            </ul>
        </div>
        <div class="text-end p-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="navbar-text text-dark me-2">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('users.edit', ['user' => auth()->user()->id]) }}">Editar Usuário</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    @if($isAdmin)
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('users.index') }}">Cadastrar Usuário</a></li>
                    @endif

                </ul>
            </li>
        </div>
        <div class="text-end">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-light" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container mt-4 py-5">
    @yield('body')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
