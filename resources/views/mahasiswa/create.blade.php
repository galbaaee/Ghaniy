@extends('layout.main')
@section('container')
<h3>Input Data</h3>
<form action="/mahasiswa/store" method="post">
    @csrf
    <p>
      <label>Nama Mahasiswa</label>
      <input type="text" name="Nama">
    </p>
    <p>
      <label>NRP</label>
      <input type="text" name="NIM">
    </p>
    <p>
      <label>Email</label>
      <input type="text" name="Email">
    </p>
    <p>
      <label>Alamat</label>
      <input type="text" name="Alamat">
    </p>
    <p>
    <input type="submit" name="submit" value="kirim">
    </p>
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