<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produks extends Model
{
    protected $table = "produks";
    protected $primarykey = "id";
    protected $fillable = [
        'nama', 'kategori', 'harga','stok','id'
    ];
    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id');
    }
    public function prod()
    {
        return $this->hasMany(Transaksi::class, 'id', 'id');
    }
}
