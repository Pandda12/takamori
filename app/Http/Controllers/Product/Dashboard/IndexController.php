<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard/Product/Index', [
           'products' =>  Product::all()
        ]);
    }
}
