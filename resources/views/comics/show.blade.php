@extends('layouts.main')

@section('title','comics')


@section('content')
<div class="comics-jumbo"></div>
<div class="container">
<section class="description">
<div class="section-comic-description">
    <h1 class="comic-title">{{$comic->title}}</h1>
    <div class="comic-price">
       <p>US. Price: {{$comic->price}}</p>
    </div>
    <p class="comic-description">{{$comic->description}}</p>
    
</div>

<div class="ad">
    <img src="{{Vite::asset('resources/img/placeholder.png')}}" alt="adv">
</div>
</section>

</div>


@endsection