<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        // dd(Review::find(1)->user->name);
        // echo("Published ".$_GET['publ']);
        if(!empty($_GET['publ']) AND ($_GET['publ']=='yes' OR $_GET['publ']=='no')){
            // echo 1;
            $publ = $_GET['publ']=='yes' ? 1 : 0;
            $reviews_arr = Review::where('deleted_at', NULL)->where('is_published', $publ)->get();
            // dd($reviews_arr);
        }
        else{
            // echo 0;
            $reviews_arr = Review::where('deleted_at', NULL)->get();
        }
        // dd($reviews_arr);
        // $reviews_arr = !empty($_GET['publ']) ? Review::where('is_published',intval($_GET['publ']))->get() : Review::all() ;
        return view('reviews', ['reviews' => $reviews_arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        // dd($review);
        return view('edit-review', ['review' => $review]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->input('statmnt'));
        Review::where('id',$id)->update(['review_statements' => $request->input('statmnt')]);
        return redirect('/reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo "Delete ".$id;
        // echo "Delete ".$review;
        Review::find($id)->delete();
        return redirect('/reviews');
    }

}
