<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.  
     */
    public function show(string $id)
    {
        $product = Product::with('variants')->find($id);
        if (!$product) {
            return response()->json(['code' => '400', 'message' => 'Unauthorized Access'], 400, [], JSON_PRETTY_PRINT);
        } else {
            return response()->json($product, 200, [], JSON_PRETTY_PRINT);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
