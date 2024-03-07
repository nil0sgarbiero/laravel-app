@extends('layout.app')

@section('body')

    <div class="flex-auto bg-white text-black justify-stretch">
        <div class="md:container md:mx-auto m-8 ">
            <div class="card w-96 border-2">
{{--                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="car!"/></figure>--}}
                <div class="card-body">
                    <h2 class="card-title">{{ __('Dashboard') }}</h2>
{{--                                    @if (session('status'))--}}
{{--                                        <div class="alert alert-success" role="alert">--}}
{{--                                            {{ session('status') }}--}}
{{--                                        </div>--}}

{{--                                    {{ __('You are logged in!') }}--}}
{{--                                    @endif  --}}
                    <div class="card-actions justify-end">
    {{--                    <button class="btn btn-primary">Learn now!</button>--}}
                    </div>
                </div>
            </div>
{{--        <div class="card">--}}
{{--            <div class="card-header">{{ __('Dashboard') }} </div>--}}
{{--            <div class="card-body">--}}
{{--                @if (session('status'))--}}
{{--                    <div class="alert alert-success" role="alert">--}}
{{--                        {{ session('status') }}--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                {{ __('You are logged in!') }}--}}
{{--            </div>--}}
{{--        </div>--}}
        </div>
    </div>
@endsection
