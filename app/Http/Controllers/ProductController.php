<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name','desc')->get();

        return response()->json($products, 200);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required | max:150',
            'size' => 'required | in:small,medium,large,xl',
            'brand' => 'required',
            'color' => 'required | max: 100'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()->first()], 500);
        }


        $new_product = new Product();
        $new_product->fill($request->all());
        $new_product->save();

        return response()->json(['message' => 'Product ' .$new_product->name . ' Successfully created'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products, $id)
    {
        try{
            $product = Product::findOrFail($id);

            return response()->json($product, 200);
        }catch (\Exception $e){
            return response()->json(['message' => 'Sorry the product you are looking for was not found'], 500);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $products)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'max:150',
            'size' => 'in:small,medium,large,xl',
            'color' => 'max: 100'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()->first()], 500);
        }


        $product = Product::find($id);
        $product->fill($request->all());
        $product->update();

        return response()->json(['message' => 'Product ' .$product->name . ' Successfully created'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products, $id)
    {
        try{
            $product = Product::findOrFail($id);
            $product->delete();

            return response()->json('Product deleted', 200);
        }catch (\Exception $e){

            return response()->json(['message' => 'Product could not be found'], 500);
        }
    }
}
