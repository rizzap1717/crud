<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','harga','stok','id_merk'];
    protected $visible = ['nama_barang','harga','stok','id_merk'];
    public function merk(){
        return $this->belongsTo(Merk::class,'id_merk');
    }
}
