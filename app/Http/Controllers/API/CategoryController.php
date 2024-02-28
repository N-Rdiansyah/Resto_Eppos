<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //index api - category
    public function index()
    {
        //Get all data category
        $categories = Category::all();

        return response()->json(
            [
                'status' => 'success',
                'data' =>   $categories
            ],
            200
        );
    }
}
