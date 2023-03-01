@extends('layouts.main')

@section('title','comics')


@section('content')
<div class="comics-jumbo"></div>
<div class="comics-card-section">
<div class="comics-card-deck container">
    @foreach($comics as $comic)
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <p>{{$comic['title']}}</p>
        </div>
    @endforeach
</div>
</div>


@endsection