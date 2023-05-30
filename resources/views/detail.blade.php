@extends('partial/main')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>{{ $data->title }}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p>{{ $data->description }}</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
      <p>Author: {{ $data->author }}</p>
    </div>
    <div class="col-md-4">
      <p>Date: {{ $data->postDate }}</p>
    </div>
    <div class="col-md-4">
      <div class="btn-group" role="group" aria-label="Category Buttons">
        <a href="/category/1" class="btn btn-primary">Quick Reads</a>
        <a href="/category/2" class="btn btn-primary">Medium Reads</a>
        <a href="/category/3" class="btn btn-primary">Long Reads</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <img src="{{ $data->postCover }}" alt="Post Cover" style="width: 100%; height: auto; border: 2px solid #000;" class="img-fluid" >
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-facebook"></i></a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p>{{ $data->description }}</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <iframe src="{{ $data->urlVideo }}" width="100%" height="315" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
@endsection
