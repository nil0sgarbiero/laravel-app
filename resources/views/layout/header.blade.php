    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo3.png') }}" alt="Logo" class="img-fluid align-self-start" style="height: 40px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-white">
{{--                    @include('layout.menu')--}}
                </ul>
            </div>
            <div class="text-end p-3">
{{--                @include('dashboard.layout.user')--}}
            </div>
            <div class="text-end">
                <a class="btn btn-light" href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </nav>

