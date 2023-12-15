<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table ="tb_transaksi";
    
    protected $primaryKey = "id_transaksi";

    protected $guarded = [];

    protected $fillabel = ['id_tansaksi,', 'mahsiswa_id', 'id_buku', 'tanggal_pinjam', 'tanggal_kembali'];

    public static $rules = [

        'mahsiswa_id' => 'required',
    ];

    protected $casts = [
    ];

    public function Mhsw()
    {
        return $this->belongsTo(Mhsw::class, 'mahsiswa_id','mhsw_id');
    }

    public function Buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku','buku_id');
    }
}
