@extends('layouts.main')

@section('title','comics')

@section('content')
<div class="container">
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <hr>
    <div class="row">

    <div class="mb-3 col-12">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title">
    </div>

    <div class="mb-3 col-12">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description"></textarea>
    </div>

    <div class="mb-3 col-12">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="url" class="form-control" id="thumb">
    </div>

    <div class="mb-3 col-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price">
    </div>

    <div class="mb-3 col-3">
        <label for="series" class="form-label">series</label>
        <input type="text" class="form-control" id="series">
    </div>

    <div class="mb-3 col-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input type="date" class="form-control" id="sale_date">
    </div>

    <div class="mb-3 col-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type">
    </div>

    <div class="mb-3 col-6">
        <label for="artists" class="form-label">Artists</label>
        <textarea class="form-control" id="artists"></textarea>
    </div>

    <div class="mb-3 col-6">
        <label for="writers" class="form-label">Writers</label>
        <textarea class="form-control" id="writers"></textarea>
    </div>
</div>
<button type="submit" class="btn btn-primary my-3">Add Comic</button>
  </form>

</div>

@endsection