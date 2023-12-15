@extends('layouts.app')

@section('content')

<h2>Edit Data Transaksi</h2>

<form action="{{url ('transaksi/'. $row->id_transaksi) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA MAHASISWA</label>
            <select name="mahsiswa_id" id="mahsiswa_id" class="form-control" required>
                @foreach($mhsw as $Mhsw)
                <option value="{{ $Mhsw->mhsw_id }}">{{ $Mhsw->mhsw_nama }}</option>
                @endforeach
            </select>      
        </div>

        <div class="mb-3">
            <label for="">NAMA BUKU</label>
            <select name="id_buku" id="id_buku" class="form-control" required>
                @foreach($buku as $Buku)
                <option value="{{ $Buku->buku_id }}">{{ $Buku->buku_nama }}</option>
                @endforeach
            </select>   
        </div>

        <div class="mb-3">
            <label for="">TANGGAL PEMINJAMAN</label>
            <input type="date" name="tanggal_pinjam" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">TANGGAL PENGEMBALIAN</label>
            <input type="date" name="tanggal_kembali" id="" class="form-control">
        </div>

        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>

@endsection