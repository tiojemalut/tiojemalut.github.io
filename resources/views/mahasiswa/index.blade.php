@extends('layout.utama')
@section('content')
    <div class="container" >
        <h2 align="center">Data</h2><br>
       
        <table  class="table table-hover">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Jurusan</th>
                <th>jenis Klamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
                
                
            </tr>
            @foreach($mahasiswa as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nama }}</td>
                <td>
                    <img src="{{asset ('fotoMhs/'.$p-> foto) }}" alt="" style= "width:50px;">
                </td>
                <td>{{ $p->jurusan }}</td>
                <td>{{ $p->jenis_kelamin}}</td>
                <td>{{ $p->alamat }}</td>
                <td> <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a class="btn btn-primary" href="/mahasiswa/{{ $p->id }}/edit">edit</a>
                    <form action="/mahasiswa/{{ $p->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="delete" >
                    </form>
                    </div>
                </td>
               
                    @endforeach
            </table>
           <center> <a class="btn btn-danger" href="/mahasiswa/tambahData">Tambahkan</a></center>
    </div>   

    
@endsection