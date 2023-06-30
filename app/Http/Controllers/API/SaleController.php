<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Variant;
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
        $sale = Sale::with('carts.product.variants')->find($id);
        if (!$sale) {
            return response()->json(['code' => '400', 'message' => 'Unauthorized Access'], 400, [], JSON_PRETTY_PRINT);
        }
        $saleData = [
            'id' => $sale->id,
            'total_price' => $sale->total_price,
            'created_at' => $sale->created_at,
            'payment_method' => $sale->payment_method,
            'carts' => [],
        ];
        foreach ($sale->carts as $cart) {
            $product = $cart->product;
            $cartData = [
                'product_id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'variants' => [],
            ];
            foreach ($product->variants as $variant) {
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
