<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() {
        return Sale::with('customer','items.product')->get();
    }

    public function store(Request $r) {
        $sale = Sale::create([
            'customer_id' => $r->customer_id,
            'sale_date' => now(),
            'total' => 0
        ]);

        $total = 0;

        foreach ($r->items as $item) {
            $product = Product::findOrFail($item['product_id']);

            SaleItem::create([
                'sale_id' => $sale->id,
                'product_id' => $product->id,
                'qty' => $item['qty'],
                'price' => $product->price
            ]);

            $total += $product->price * $item['qty'];
        }

        $sale->update(['total' => $total]);

        return $sale->load('items.product');
    }
}
