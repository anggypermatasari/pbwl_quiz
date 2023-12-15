@extends('layouts.app')

@section('content')

<h2>Data Transaksi</h2>

<a href="{{ url ('transaksi/create') }}" class="btn btn-warning mb-3">Tambah Data</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NAMA MAHASISWA</th>
        <th>NAMA BUKU</th>
        <th>TANGGAL PEMINJAMAN</th>
        <th>TANGGAL PENGEMBALIAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
</tr>

@foreach ($rows as $row)
    <tr>
            <td>{{ $row->id_transaksi}}</td> 
            <td>{{ $row->Mhsw['mhsw_nama'] }}</td>
            <td>{{ $row->Buku['buku_nama'] }}</td> 
            <td>{{ $row->tanggal_pinjam}}</td>
            <td>{{ $row->tanggal_kembali}}</td>
            <td><a href="{{ url ('transaksi/edit/' . $row->id_transaksi ) }}" class="btn btn-primary">Edit</a></td> 
            <td>
                <form action="{{url ('transaksi/'. $row->id_transaksi) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger">

                </form>
            </td>
    </tr>
@endforeach

</table>

@endsection