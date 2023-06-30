<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cart;
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
        $sale = Sale::with('carts')->find($id);
        if (!$sale) {
            return response()->json(['code' => '400', 'message' => 'Unauthorized Access'], 400, [], JSON_PRETTY_PRINT);
        } else {
            $formattedCarts = $sale->carts->map(function ($cart) {
                return [
                    'product_id' => $cart->product_id,
                    'price' => $cart->product->price,
                    'variants' => $cart->variants->map(function ($variant) {
                        return [
                            'variant_name' => $variant->name,
                            'price' => $variant->price,
                        ];
                    }),
                ];
            });
            $saleData = [
                'id' => $sale->id,
                'total_price' => $sale->total_price,
                'created_at' => $sale->created_at,
                'payment_method' => $sale->payment_method,
                'carts' => $sale->carts
            ];
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
