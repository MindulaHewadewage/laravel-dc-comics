@extends('layouts.main')

@section('title','comics')

@section('content')
<div class="container">
<form action="{{route('comics.update',$comic->id)}}" method="POST" novalidate>
    @method('PUT')
    @csrf
    <hr>
    <div class="row">

    <div class="mb-3 col-12">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" required value="{{old('title',$comic->title)}}">
    </div>

    <div class="mb-3 col-12">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" required value="{{old('description',$comic->description)}}"></textarea>
    </div>

    <div class="mb-3 col-12">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="url" class="form-control" id="thumb" name="thumb" required value="{{old('thumb',$comic->thumb)}}">
    </div>

    <div class="mb-3 col-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price"required value="{{old('price',$comic->price)}}">
    </div>

    <div class="mb-3 col-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" required value="{{old('series',$comic->series)}}">
    </div>

    <div class="mb-3 col-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" required value="{{old('sale_date',$comic->sale_date)}}">
    </div>

    <div class="mb-3 col-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type"required value="{{old('type',$comic->type)}}">
    </div>

    <div class="mb-3 col-6">
        <label for="artists" class="form-label">Artists</label>
        <textarea class="form-control" id="artists" name="artists" required value="{{old('artists',$comic->artists)}}"></textarea>
    </div>

    <div class="mb-3 col-6">
        <label for="writers" class="form-label">Writers</label>
        <textarea class="form-control" id="writers" name="writers"required value="{{old('writers',$comic->writers)}}"></textarea>
    </div>
</div>
<button type="submit" class="btn btn-primary my-3">Add Comic</button>
  </form>

</div>

@endsection