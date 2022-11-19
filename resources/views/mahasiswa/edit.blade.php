@extends('layout.main')
@section('container')

<h3>Edit Data</h3>
<form action="/mahasiswa/{{$mahasiswa->id}}" method="post">
    @method('put')
    @csrf
    <label>Nama Mahasiswa</label>
    <input type="text" name="Nama" value="{{$mahasiswa->Nama}}">

    <label>NRP</label>
    <input type="text" name="NIM" value="{{$mahasiswa->NIM}}">

    <label>Email</label>
    <input type="text" name="Email" value="{{$mahasiswa->Email}}">

    <label>Alamat</label>
    <input type="text" name="Alamat" value="{{$mahasiswa->Alamat}}">

    <input type="submit" name="submit" value="kirim">
</form>

<style type="text/css">
	form{
		display: grid;
		grid-template-columns: 1fr 1fr;
	}
	form label{
        display:block;
    }
	h3{
		color: red;
	}
</style>

@endsection