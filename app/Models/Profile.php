<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
      protected $fillable = [
        'nama_customer',
        'nomor_telepon',
        'email',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'nomor_npwp',
        'username',
        'password',
        'total_diskon',
        'credit_limit_transaksi',
      ];
}
