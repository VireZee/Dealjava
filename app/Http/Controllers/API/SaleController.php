<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
        $sale = Sale::with('carts.products')->find($id);
        if (!$sale) {
            return response()->json(['code' => '400', 'message' => 'Unauthorized Access'], 400, [], JSON_PRETTY_PRINT);
        } else {
            $saleData = [
                'id' => $sale->id,
                'total_price' => $sale->total_price,
                'created_at' => $sale->created_at,
                'payment_method' => $sale->payment_method,
                'carts' => [],
            ];
            foreach ($sale->carts as $cart) {
                $products = $cart->products;
                $cartData = [
                    'product_id' => $products->id,
                    'name' => $products->name,
                    'description' => $products->description,
                    'price' => $products->price,
                    'variants' => [],
                ];
                foreach ($products->variants as $variant) {
                    if ($cart->variant_id === $variant->id) {
                        $variantData = [
                            'id' => $variant->id,
                            'product_id' => $variant->product_id,
                            'name' => $variant->name,
                            'additional_price' => $variant->additional_price,
                        ];
                        $cartData['variants'][] = $variantData;
                    }
                }
                $saleData['carts'][] = $cartData;
            }
            return response()->json($saleData, 200, [], JSON_PRETTY_PRINT);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
