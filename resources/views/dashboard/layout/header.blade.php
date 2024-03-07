<nav class="navbar bg-black ">
    <div class="navbar-start basis-1/4">
        <img src="{{ asset('img/logo3.png') }}" alt="Logo" class="img-fluid align-self-start" style="height: 40px;">
{{--        <div class="dropdown">--}}
{{--            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>--}}
{{--            </div>--}}
{{--            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">--}}
{{--                @include('dashboard.layout.menu')--}}
{{--            </ul>--}}
{{--        </div>--}}
    </div>
        <div class="navbar-center basis-1/2">
            <ul class="menu menu-horizontal ">
                @include('dashboard.layout.menu')
            </ul>
        </div>
        <div class="navbar-end basis-1/4">
            <ul class="menu menu-horizontal ">
                @include('dashboard.layout.user')
            </ul>
{{--        </div>--}}
{{--        <div class="navbar-end">--}}
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <div class="text-end " >
                    <button class="btn bg-white text-black rounded hover:bg-gray-200" type="submit">Logout</button>
                </div>
            </form>
        </div>
</nav>
