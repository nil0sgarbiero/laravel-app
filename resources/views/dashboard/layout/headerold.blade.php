<nav class="bg-black">
    <div class="container mx-auto flex flex-wrap items-center justify-between p-5">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo3.png') }}" alt="Logo" class="img-fluid self-start h-10">
        </a>

        <!-- Considerando que você implementará a funcionalidade de toggle com JavaScript personalizado ou Alpine.js -->
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse hidden w-full md:block md:w-auto" id="navbarNav">
            <ul class="navbar-nav text-white flex flex-col md:flex-row list-none mr-auto">
                @include('dashboard.layout.menu')
            </ul>
        </div>
        <div class="text-white text-end p-3 hidden md:block">
            @include('dashboard.layout.user')
        </div>
        <div class="text-end hidden md:block">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn bg-white text-black py-2 px-4 rounded hover:bg-gray-200" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>