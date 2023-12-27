@extends('layout.utama')
@section('content')
<div class="container" >
    <h1 align="center">Tambah Data</h1>
<form action="/mahasiswa/simpan" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama">
      </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" id="exampleFormControlInput1" placeholder="jurusan">
      </div>

       
    <select class="form-select" name=jenis_kelamin>
        <option value="">pilih jenis Klamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select><br>

    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="alamat">
      </div>    
    
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Masukan Foto</label>
        <input type="file" name="foto" class="form-control" >
      </div>   

    <input class="btn btn-primary" type="submit" name="submit" value="simpan">
</form>
</div>
@endsection