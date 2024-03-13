<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Inertia\Inertia;

class CreateController extends Controller
{
    public function __invoke()
    {
        return inertia('Dashboard/Product/Create');
    }
}
