@extends('layout.aplikasi')

@section('konten')
<a href='/akun' class="btn btn-secondary"> >>Kembali</a>
<form method="post" action="{{ '/akun/'.$data->kode_akun }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <h1>Kode Akun: {{ $data->kode_akun }}</h1>
    </div>
    
    <div class="mb-3">
        <label for="nama_akun" class="form-label">Nama Akun</label>
        <input type="text" class="form-control" name='nama_akun' id="nama_akun"
            value="{{ $data->nama_akun }}">
    </div>
    
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" name='deskripsi' id="deskripsi">{{ $data->deskripsi }}</textarea>
    </div>
    
    <div class="mb-3">
        <label for="tipe_akun" class="form-label">Tipe Akun</label>
        <input type="text" class="form-control" name='tipe_akun' id="tipe_akun"
            value="{{ $data->tipe_akun }}">
    </div>
    
    <div class="mb-3">
        <label for="kategori_akun" class="form-label">Kategori Akun</label>
        <input type="text" class="form-control" name='kategori_akun' id="kategori_akun"
            value="{{ $data->kategori_akun }}">
    </div>
    
    <div class="mb-3">
        <label for="level_akun" class="form-label">Level Akun</label>
        <input type="text" class="form-control" name='level_akun' id="level_akun"
            value="{{ $data->level_akun }}">
    </div>
    <div class="mb-3">
        <label for="created_at" class="form-label">Created at</label>
        <input type="text" class="form-control" name='created_at' id="created_at"
            value="{{ \Carbon\Carbon::parse(Session::get('created_at'))->format('Y-m-d H:i:s') }}" readonly>
    </div>
           
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </div>
</form>
@endsection
