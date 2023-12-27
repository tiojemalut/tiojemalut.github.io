<h1>edit Data</h1>
<form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" placeholder="Nama"  value="{{$mahasiswa->nama }}"><br>
    <input type="text" name="jurusan" placeholder="Jurusan" value="{{$mahasiswa->jurusan }}"><br>
    <select name=jenis_kelamin>
        <option value="">pilih jenis Klamin</option>
        <option value="L" @if($mahasiswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        <option value="P" @if($mahasiswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <input type="text" name="Alamat" placeholder="Alamat" value="{{$mahasiswa->alamat }}"> <br>
    
    <input type="submit" name="submit" value="simpan">
</form>