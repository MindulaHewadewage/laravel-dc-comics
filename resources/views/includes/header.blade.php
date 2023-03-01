@php
    $links = config('menu')
@endphp

<header class="container">

    <div class="logo">
        <a href="#"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo dc"></a>
    </div>
    <div class="menu">
    <ul>
        <li>
            <a class="@if(Route::is('home')) active @endif" href="{{url('/')}}">Home</a>
        </li>
        <li>
            <a class="@if(Route::is('comics.index')) active @endif" href="{{route('comics.index')}}">Comics</a>
        </li>
    </ul>
    </div>
    <div class="search">
        <input type="text" placeholder="search">
    </div>

</header>