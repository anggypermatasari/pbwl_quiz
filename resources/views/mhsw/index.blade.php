@extends('layouts.app')

@section('content')

<h2>Data Mahasiswa</h2>

<a href="{{ url ('mhsw/create') }}" class="btn btn-warning mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
</tr>

@foreach ($rows as $row)
    <tr>
            <td>{{ $row->mhsw_id }}</td> 
            <td>{{ $row->mhsw_nim }}</td>
            <td>{{ $row->mhsw_nama }}</td> 
            <td>{{ $row->mhsw_alamat }}</td>
            <td><a href="{{ url ('mhsw/edit/' . $row->mhsw_id ) }}" class="btn btn-primary">Edit</a></td> 
            <td>
                <form action="{{url ('mhsw/'. $row->mhsw_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">

                </form>
            </td>
    </tr>
@endforeach

</table>

@endsection