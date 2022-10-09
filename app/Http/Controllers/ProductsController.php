<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class ProductsController extends Controller
{
    public function getproducts()
    {
        $products = Products::all();
        // dd($products);
        
        return view('products', ['products' => $products]);

    }
}
