@extends('layoutt.main')

@section('content')
  <div class="container mt-4">
    <h1 class="text-center mb-4">Kontak</h1>

    <div class="card shadow-lg p-4 mx-auto text-center" 
         style="max-width: 500px; border-radius: 15px; background-color: #F1F0E4;">
      
      <div class="mb-3">
        <i class="bi bi-envelope-fill" style="font-size: 3rem; color: #0d6efd;"></i>
      </div>
      
      <h3 class="mb-2">{{ $gmail }}</h3>
      <a href="mailto:{{ $gmail }}" class="btn btn-primary">
        <i class="bi bi-send-fill"></i> Kirim Email
      </a>
    </div>
  </div>
@endsection


