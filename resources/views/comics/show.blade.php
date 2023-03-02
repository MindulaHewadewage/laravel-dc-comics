@extends('layouts.main')

@section('title','comics')


@section('content')
<div class="comics-jumbo"></div>
<div class="container">
<section class="comic-preview">
<div class="section-comic-description">
    <img class="img-preview" src="{{$comic->thumb}}" alt="">
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

<div class="light-bg">
<section class="comic-spec-table container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody> 
          <tr>
            <th scope="row">Art By:</th>
            <td>{{$comic->artists}}</td>
          </tr>
          <tr>
            <th scope="row">Written By:</th>
            <td>{{$comic->writers}}</td>
          </tr>
          <tr>
            <th scope="row">Series:</th>
            <td>{{$comic->series}}</td>
          </tr>

          <tr>
            <th scope="row">Us price:</th>
            <td>{{$comic->price}}</td>
          </tr>

          <tr>
            <th scope="row">On sale Date:</th>
            <td>{{$comic->sale_date}}</td>
          </tr>
        </tbody>
      </table>
</section>
</div>

<div class="buttons d-flex justify-content-center">
  <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
    @method('PATCH')
    @csrf
    <button type="submit" class="btn btn-warning">Elimina</button>
  </form>


  <a href="{{route('comics.edit',$comic->id)}}" class="back btn btn-secondary">Modifica</a>
  <a href="{{route('comics.index')}}" class="back btn btn-secondary">Go Back</a>

</div>



@endsection