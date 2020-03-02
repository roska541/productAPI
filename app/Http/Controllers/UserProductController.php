<?php

namespace App\Http\Controllers;

use App\UserProduct;
use App\User;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\UserProduct  $userProducts
     * @return \Illuminate\Http\Response
     */
    public function show(UserProduct $userProducts, $id)
    {
        try{
            $user = User::findOrFail($id);
            $products = $user->user_product;

            return response()->json($products, 200);

        }catch (\Exception $e){
            return response()->json([
                'message' => 'User could not be found'
            ], 500);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProduct  $userProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProduct $userProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProduct  $userProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProduct $userProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProduct  $userProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProduct $userProducts)
    {
        //
    }
}
