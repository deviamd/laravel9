<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table ='orders';
    protected $primarykey ='id';
    protected $fillable = [
        'id','id_user', 'nama','jumlah_produk', 'total_bayar',
    ];
    protected $guarded = [
        'id'
    ];

    public function der()
    {
        return $this->hasMany(Transaksi::class, 'id_orders', 'id');
    }
}
