<?php

namespace App\Http\Controllers\Product\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke( string $slug )
    {
        return Inertia::render('Product/Show', [
            'product' => Product::where('slug', $slug)->firstOrFail()
        ]);
    }
}
