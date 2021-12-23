<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products'; 
    use HasFactory;
public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function catalogue(){
        return $this->belongsTo(Catalogue::class);
    }
    
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
}
