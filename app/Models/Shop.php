<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table='shops';
    use HasFactory;
    public function shop(){
         return $this->hasMany(Product::class);
    }
}
