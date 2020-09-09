@extends('layouts.standard')

@section('pageTitle')Lista album
@endsection

@section('navContent')
<h1>Lista Album</h1>
@endsection

@section('mainContent')
  <ul class="albumWrapper">
    @foreach ($albums as $album)
    <li class="singleAlbum">
      <h2>Titolo:</h2>
      <h3 class="albumTitle">{{$album->title}}</h3>
      <img class="cover" src="{{$album->image->url}}" alt="">
      <a href="{{route('album.show',$album)}}">Mostra dettagli <i class="fas fa-info-circle"></i></a>
    </li>
    @endforeach
  </ul>
@endsection
