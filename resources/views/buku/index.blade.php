@extends('layouts.app')

@section('content')

<h2>Data Buku</h2>

<a href="{{ url ('buku/create') }}" class="btn btn-warning mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>PENGARANG</th>
        <th>SINOPSIS</th>
        <th>EDIT</th>
        <th>DELETE</th>
</tr>

@foreach ($rows as $row)
    <tr>
            <td>{{ $row->buku_id }}</td> 
            <td>{{ $row->buku_nama }}</td>
            <td>{{ $row->buku_pengarang }}</td> 
            <td>{{ $row->buku_sinopsis }}</td>
            <td><a href="{{ url ('buku/edit/' . $row->buku_id ) }}" class="btn btn-primary">Edit</a></td> 
            <td>
                <form action="{{url ('buku/'. $row->buku_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">
</form>
</td>
     </tr>
@endforeach
</table>
@endsection
