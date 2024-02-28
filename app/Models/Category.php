<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    //Memanggil Function  Class Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
