@extends ('layoutt.main')

@section('content')
<h1>Tambah Mahasiswa</h1>
<div class="card">
    <div class="card-body">
<form action="/insertdata" method="POST" enctype="multipart/form-data" >
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" name="name" id="nama" placeholder="Nama Lengkap" class="form-control" >
  <div class="mb-3">
    <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
    <input type="number" name="nim" id="nim" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Program Studi</label>
    <input type="text" name="prodi" id="prodi" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="nohp" class="form-label">Nomor Handphone</label>
    <input type="number" name="nohp" id="nohp" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection