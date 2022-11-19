@extends('layout.main')
@section('container')
<h3>Data Mahasiswa</h3>
<table>
    @foreach($mahasiswa as $m)
      <tr>
          <td>
            <ul mt-10>
              <li>{{$m->Nama}}</li>
              <li>{{$m->NIM}}</li>
              <li>{{$m->Email}}</li>
              <li>{{$m->Alamat}}</li>
            </ul>
          </td>
          <td>
            <a href="/mahasiswa/{{$m->id}}/edit">edit</a>
            <form action="/mahasiswa/{{$m->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>

        </td>
      </tr>
    @endforeach
</table>
<style>
   table,
   tr{
      border: 1px solid black;
      border-collapse: collapse;
      margin-bottom: 10px;
   }
   h3{
    color: red;
   }
</style>
@endsection