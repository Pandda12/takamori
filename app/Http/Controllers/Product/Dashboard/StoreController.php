<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers\CustomHelper;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = CustomHelper::CreateSlug( Str::slug( $data['title'] ) );

        if ( $request->hasFile('main_image') ) {
            $file = $request->file('main_image');

            // Get the original name of the uploaded file
            $originalName = $file->getClientOriginalName();

            // Get the filename without extension
            $filename = pathinfo($originalName, PATHINFO_FILENAME);

            // Get the file extension
            $ext = $file->getClientOriginalExtension();

            $main_img = CustomHelper::NameChecker( $filename, $ext );

//            Storage::disk('public')->put('img/products', $main_img);

            // Save the file directly to the public directory
            $file->move(public_path('img/products'), $main_img);

            $data['main_image'] = $main_img;
        }




        Product::create($data);

        return to_route('dashboard.product.index');
    }
}
