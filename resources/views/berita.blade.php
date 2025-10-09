@extends('layoutt.main')

@section('content')
    <h1>Berita</h1>

    <article style="background-color: #F1F0E4; padding: 20px; border-radius: 8px;">
        @foreach ($beritas as $berita)
            <a href="/berita/{{ $berita['slug']}}">
                <h2>{{ $berita['judul'] }}</h2> </a>
            <h3>{{ $berita['penulis'] }}</h3>
            <p>{{ $berita['konten'] }}</p>
        @endforeach
    </article>
@endsection
