@extends('layoutt.main')

@section('content')
    <h1>Berita</h1>

    <article>
        @foreach ($beritas as $berita)
            <h2>{{ $berita['judul'] }}</h2>
            <h3>{{ $berita['penulis'] }}</h3>
            <p>{{ $berita['konten'] }}</p>
        @endforeach
    </article>
@endsection
