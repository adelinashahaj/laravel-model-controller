@extends('layouts.app')

@section('title', 'Home page')

@section('content')
<div class="row">
    @foreach ($movies as $movie)
    <div class="card my-2 mx-2" style="width: 18rem;">

        <img src="{{ Vite::asset('resources/img/ntx.png') }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title text-primary"> Title:{{$movie['title']}}</h5>
          <h5 class="card-title text-primary"> Date:{{$movie['date']}}</h5>

        </div>
      </div>
    @endforeach
</div>

@endsection
