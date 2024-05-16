<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanBarang extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_penerimaan",
        "tgl_penyimpanan",
        "alamat",
        "kode_barang",
        "quantity",
    ];
}
