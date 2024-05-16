<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalOrder extends Model
{
    use HasFactory;
    protected $table = 'total_orders';
    protected $fillable = [
        'product_id',
        'jumlah_pesanan',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
