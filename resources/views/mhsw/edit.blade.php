@extends('layouts.app')

@section('content')

<h2>Edit Data Mahasiswa</h2>

    <form action="{{url ('mhsw/'. $row->mhsw_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NIM</label>
            <input type="text" name="mhsw_nim" id="" class="form-control" value="{{ $row->mhsw_nim}}">
        </div>

        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="mhsw_nama" id="" class="form-control" value="{{$row->mhsw_nama}}">
        </div>

        <div class="mb-3">
            <label for="">ALAMAT</label>
            <textarea name="mhsw_alamat" class="form-control" id="" cols="30" rows="10">{{$row->mhsw_alamat}}</textarea>
        </div>

        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>

@endsection