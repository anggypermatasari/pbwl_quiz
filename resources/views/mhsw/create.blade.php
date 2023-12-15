@extends('layouts.app')

@section('content')

<h2>Tambah Data Mahasiswa</h2>

    <form action="{{url ('mhsw')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NIM</label>
            <input type="text" name="mhsw_nim" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="mhsw_nama" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">ALAMAT</label>
            <textarea name="mhsw_alamat" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>

@endsection