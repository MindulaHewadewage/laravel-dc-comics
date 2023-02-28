@php
    $links = config('menu')
@endphp

<header class="container">

    <div class="logo">
        <a href="#"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo dc"></a>
    </div>
    <div class="menu">
    <ul>
        @foreach($links as $link)
        <li><a href="{{route($link['route_name'])}}">{{$link['text']}}</a></li>
        @endforeach
    </ul>
    </div>
    <div class="search">
        <input type="text" placeholder="search">
    </div>

</header>