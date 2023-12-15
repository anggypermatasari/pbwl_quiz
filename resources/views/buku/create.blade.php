@extends('layouts.app')

@section('content')

<h2>Tambah Data Buku</h2>

        <form action="{{url ('buku')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="buku_nama" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">PENGARANG</label>
                <input type="text" name="buku_pengarang" id="" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">SINOPSIS</label>
                <textarea name="buku_sinopsis" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>

@endsection