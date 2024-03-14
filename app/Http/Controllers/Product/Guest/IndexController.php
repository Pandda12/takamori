<?php

namespace App\Http\Controllers\Product\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Product/Index', [
            'products' => Product::where('is_published', 1)->get()
        ]);
    }
}
