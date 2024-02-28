<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index API
    public function index()
    {
        //Mengambil data product dengan pagination 10
        $products = Product::paginate(10);
        
        return response()->json(
            [
                'status' => 'success',
                'data' => $products
            ],
            200
        );
    }
}
