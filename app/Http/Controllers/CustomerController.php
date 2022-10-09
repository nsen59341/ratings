<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customers;

use App\Mail\EmailAskReview;

use Symfony\Component\HttpFoundation\Response;

use Auth;

use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function getcustomers()
    {
        $customers = Customers::where('is_review_sent',0)->get();
        // dd($products);
        
        return view('customers', ['customers' => $customers]);
    }

    public function sendemail(Request $request)
    {
        $cust_email = $request->input('cust_email');

        // dd($cust_email);

        $mailData = [
            'email' => $cust_email,
            'url' => "https://" . Auth::user()->name . "/products"
        ];
  
        Mail::to($cust_email)->send(new EmailAskReview($mailData));
   
        $customers = Customers::where('customer_email',$cust_email)->get();
        $customers->toQuery()->update([
            'is_review_sent' => 1
        ]);

        // DB::table('customers')
        //     ->where('customer_email',$cust_email)
        //     ->update(['is_review_sent' => 1]);
        
   
        $request->session()->flash('status', 'Request has been sent');

        return back();

    }
}

