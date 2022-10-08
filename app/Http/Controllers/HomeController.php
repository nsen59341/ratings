<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

    function shopify_auth(Request $request)
    {
        $shop_url = $request->input('shop-url');

        $api_key = "a718ba29d8d0d181666d046d2a103d25";
        $scopes = "read_orders,write_products";
        $redirect_uri = "/authenticate/token";

        $install_url = $shop_url . "/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

        // Redirect
        return redirect($install_url);

    }

}
