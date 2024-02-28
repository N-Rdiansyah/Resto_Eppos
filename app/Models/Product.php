<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //filable
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stock',
        'status',
        'price',
        'is_favorite',
        'category_id',
    ];

    //Memanggil Class Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
