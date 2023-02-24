<?php

namespace App\Http\Controllers;

use App\Models\productsM;
use Illuminate\Http\Request;
use App\Http\Resources\ProductsR;

class ProductsC extends Controller
{
    public function index(){
        $products = productsM::all();
       // return response()->json($posts);
       return ProductsR::collection($products);
    }

    public function detail($id){
        $products = productsM::findOrFail($id);
        return new ProductsR($products);
    }
}
