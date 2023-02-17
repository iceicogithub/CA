<?php

namespace App\Http\Controllers;

use App\Models\subProduct;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cources;

class SubProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $core = Cources::all();
        $products = product::all();
        $product = product::distinct()->pluck('subject_id')->toArray();

        $splitValues = array_map(function ($product) {
            return explode(',', $product);
        }, $product);
        $mergedValues = array_merge(...$splitValues);

        $uniqueValues = implode(',', array_unique($mergedValues));

        $array = explode(",", $uniqueValues);
        // dd($array);
        $uniqueSubjects = Product::distinct('subject_id')->pluck('subject_id')->toArray();

        return view('admin/auth/product/sub_product', compact('core', 'array', 'products'));
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
        $sub_product = new subProduct();
        $sub_product->product_id = $request->product;
        $sub_product->sub_product = $request->sub_product;
        $sub_product->group = $request->group;
        $sub_product->subject_id = $request->sub;
        $sub_product->paper_id = $request->ppr;
        $sub_product->subpro_price = $request->price;
        $sub_product->pack_details = $request->pack_detail;
        $sub_product->status = $request->status;

        $sub_product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function show(subProduct $subProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(subProduct $subProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subProduct $subProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(subProduct $subProduct)
    {
        //
    }
}
