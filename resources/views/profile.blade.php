@extends('layoutt.main')

@section('content')
  <div class="container mt-4">
    <h1 class="text-center mb-4">Profil</h1>

    <div class="card shadow-lg p-4 mx-auto" style="max-width: 500px; border-radius: 15px; background-color: #FEFAE0;">
      <div class="text-center">
        <img src="{{ $foto }}" class="rounded-circle shadow mb-3" width="150px" alt="Foto Profil">
        <h3 class="mt-2">{{ $nama }}</h3>
        <p class="text-muted">
          <i class="bi bi-telephone-fill"></i> {{ $nohp }}
        </p>
      </div>
    </div>
  </div>
@endsection
