<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers\CustomHelper;
use App\Http\Helpers\SlugCreator;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = CustomHelper::CreateSlug( Str::slug( $data['title'] ) );

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = $file->getClientOriginalName();
            dd($filename);
        }

        dd(11111);

        $data['main_image'] = CustomHelper::NameChecker(  );

        Product::create($data);

        return to_route('dashboard.product.index');
    }
}
