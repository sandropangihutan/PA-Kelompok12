<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'nama',
        'description',
        'price',
        'stock',
        'image',
        'category',
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
