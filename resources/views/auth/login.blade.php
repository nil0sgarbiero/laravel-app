<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black">
    @if ($errors->has('login'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $errors->first('login') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 h-50 p-4">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo" class="img-fluid mb-4" style="max-width: 30%;">
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="username" class="form-label">Usuário:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


