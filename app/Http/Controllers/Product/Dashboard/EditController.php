<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Inertia\Inertia;

class EditController extends Controller
{
    public function __invoke( int $product_id )
    {
        $product = Product::where('id', $product_id)->first();

        return Inertia::render('Dashboard/Product/Edit', [
            'product' => $product
        ]);
    }
}
