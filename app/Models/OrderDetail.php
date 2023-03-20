<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;

    public $table = "orderdetails";
    protected $primaryKey = 'idorderdetail';
    protected $fillable = ['idpelanggan', 'pelanggan', 'alamat', 'telp', 'idbarang', 'title', 'category', 'price', 'stock'];
}
