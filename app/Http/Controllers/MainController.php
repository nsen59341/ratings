<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class MainController extends Controller
{
    public function index()
    {
        $products = auth()->user()->api()->rest('GET', '/admin/api/2022-07/products.json')['body']['products']['container'];
        // dd($products);
        foreach($products as $product)
        {
            Products::firstOrCreate([
                'product_id' => $product['id'],
                'product_name' => $product['title'],
                'product_images' => json_encode($product['images'], 1),
            ]);
        }

        return view('welcome');
    }
}
