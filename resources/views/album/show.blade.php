@extends('layouts.standard')

@section('pageTitle')Informazioni album
@endsection

@section('navContent')
<h1>Informazioni dell'Album "<span class="albumTitle">{{$album->title}}</span>"</h1>
@endsection

@section('mainContent')
  <div class="albumWrapperShow">
    <div class="singleAlbum">
      <img class="cover" src="{{$album->image->url}}" alt="">
      <h2>Artista: {{$album->artist}}</h2>
      <h2>Anno: {{$album->year}}</h2>
    </div>

    <h3>Lista canzoni dell'Album "{{$album->title}}"</h3>

    <ul>
      @foreach ($album->songs as $song)
      <li>{{$song->title}} - ({{$song->genre}})</li>
      @endforeach

    </ul>
    <a href="{{route('album.index')}}">Torna alla lista album</a>
  </div>
@endsection
