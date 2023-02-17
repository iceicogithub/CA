<?php

namespace App\Http\Controllers;

use App\Models\Cources;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $core = Cources::all();
        $getppr = DB::table('question_paper')->where('alot_product', 1)->get();

        return view('admin/auth/product/product', compact('core', 'getppr'));
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

    public function showpprids(Request $request)
    {
        $getsub = $request->sub;
        $getpprids =  DB::table('question_paper')->where('subject_id', $getsub)->where('alot_product', 1)->get();
        return response()->json($getpprids);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $product  =  new product();

        $product->subject_id = $request->subids;
        $product->paper_alloted = $request->pprids;
        $product->product_name = $request->name;
        $product->product_price = $request->price;
        $product->description = $request->description;
        $product->pack_details = $request->pacg_details;
        $product->exam = $request->exam;
        $product->date = $request->formattedDate;
        $product->format = $request->format;
        $product->test_langauge = $request->test_lang;
        $product->test_assecc = $request->test_ass;
        $product->sol_available = $request->solution;
        $product->rpt_available = $request->report;
        $product->status = $request->status;


        // $fileName =  $request->file('product_image');
        // // dd($fileName);
        // if($fileName != ''){
        //     $image_name = rand().'.'.$fileName->getClientOriginalExtension();
        //     $fileName->move(public_path('productImage'), $image_name);
        //     $product->product_image = $image_name;
        // }


        $imageName = time() . '.' . $request->product_image->extension();
        $request->product_image->move(public_path('productImage'), $imageName);
        $product->product_image = $imageName;




        $product->save();
        return redirect()->back();
    }

    public function userChangeStatus(Request $request)
    {
        Log::info($request->all());
        // dd($request);
        $s = product::find($request->id);
        $s->status = $request->status;
        $s->save();
        return response()->json(['success' => 'Status change successfully.']);
    }


    // public function showproduct(Request $request){
    //  $data = $request;
    //    return view('shop');
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
