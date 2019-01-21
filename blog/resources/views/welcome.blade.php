@extends('layouts.master',["title"=>"Home"])
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="/about">About</a>
            <a href="/make">Make</a>
            <a href="/array">myArray</a>
            <a href="/compactFunction">compactFunction</a>
            <a href="/events">Events</a>
            <a href="/blade">Blade</a>
        </div>
    </div>
</div>
@endsection
