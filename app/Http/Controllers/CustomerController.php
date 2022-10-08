<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getcustomers()
    {
        $customers = auth()->user()->api()->rest('GET', '/admin/api/2022-07/customers.json');
        dd($customers);
    }
}
