<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
      protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori',
        'harga',
        'jumlah_stok',
        'foto',
        'kapasitas',
        'tinggi',
        'lebar',
        'diameter_tabung',
        'berat_total',
        'fire_rating',
    ];

    public function totalOrder(){
        return $this->hasOne(TotalOrder::class);
    }
}
