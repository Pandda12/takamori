<?php

namespace App\Http\Controllers\Product\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers\CustomHelper;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(Product $product, UpdateRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = CustomHelper::CreateSlug( Str::slug( $data['title'] ), $data['id'] );

        if ( $request->hasFile('main_image') ) {
            $file = $request->file('main_image');

            // Get the original name of the uploaded file
            $originalName = $file->getClientOriginalName();

            // Get the filename without extension
            $filename = pathinfo($originalName, PATHINFO_FILENAME);

            // Get the file extension
            $ext = $file->getClientOriginalExtension();

            $main_img = CustomHelper::NameChecker( $filename, $ext );

            // Save the file directly to the public directory
            $file->move(public_path('img/products'), $main_img);

            $data['main_image'] = $main_img;
        }

        $product->update($data);

        return to_route('dashboard.product.index');
    }
}
