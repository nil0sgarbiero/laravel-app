{{--    <nav class="navbar navbar-expand-lg bg-black">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="#">--}}
{{--                <img src="{{ asset('img/logo3.png') }}" alt="Logo" class="img-fluid align-self-start" style="height: 40px;">--}}
{{--            </a>--}}

{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"--}}
{{--                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--                <ul class="navbar-nav text-white">--}}
{{--                    @include('layout.menu')--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="text-end p-3">--}}
{{--                @include('dashboard.layout.user')--}}
{{--            </div>--}}
{{--            <div class="text-end">--}}
{{--                <a class="btn btn-light" href="{{ route('login') }}">Login</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

    <div class="navbar bg-black">
        <div class="navbar-start">
{{--            <div class="dropdown">--}}
{{--                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>--}}
{{--                </div>--}}
{{--                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">--}}
{{--                    --}}{{--                @include('layout.menu')--}}
{{--                </ul>--}}
{{--            </div>--}}
            <img src="{{ asset('img/logo3.png') }}" alt="Logo" class="img-fluid align-self-start" style="height: 40px;">
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                {{--            @include('layout.menu')--}}
            </ul>
        </div>
        <div class="navbar-end">
            <div class="text-end">
                <a class="btn btn-outline bg-white text-black" href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </div>

    {{--                    @include('layout.menu')--}}

    {{--                @include('dashboard.layout.user')--}}


