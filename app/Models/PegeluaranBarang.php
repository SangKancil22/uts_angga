<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegeluaranBarang extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_pengeluaran",
        "tgl_keluar",
        "tujuan",
        "kode_barang",
        "quantity",
    ];
}
