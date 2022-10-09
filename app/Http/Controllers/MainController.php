<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

use App\Models\Customers;

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

        $customers = auth()->user()->api()->rest('GET', '/admin/api/2022-07/customers.json')['body']['container']['customers'];

        foreach($customers as $customer)
        {
            Customers::firstOrCreate([
                'customer_id' => $customer['id'],
                'customer_name' => $customer['first_name'].' '.$customer['last_name'],
                'customer_email' => $customer['email'],
            ]);
        }

        return view('welcome');
    }
}
