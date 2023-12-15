@extends('layouts.app')

@section('content')

<h2>Edit Data Buku</h2>

<form action="{{url ('buku/'. $row->buku_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="buku_nama" id="" class="form-control" value="{{ $row->buku_nama}}">
        </div>

        <div class="mb-3">
            <label for="">PENGARANG</label>
            <input type="text" name="buku_pengarang" id="" class="form-control" value="{{$row->buku_pengarang}}">
        </div>

        <div class="mb-3">
            <label for="">SINOPSIS</label>
            <textarea name="buku_sinopsis" class="form-control" id="" cols="30" rows="10">{{$row->buku_sinopsis}}</textarea>
        </div>

        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>

@endsection