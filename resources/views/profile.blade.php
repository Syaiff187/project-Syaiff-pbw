@extends('layoutt.main')

@section('content')
  <h1>profile</h1>

  <h3>{{ $nama }}</h3>
  <p>{{$nohp}}</p>
  <img src="{{ $foto }}" width="200px" />

@endsection