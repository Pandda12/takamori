<?php

namespace App\Http\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CustomHelper
{
    static function CreateSlug( string $slug, int $count = 0 ): string
    {
        $existingSlug = Product::where( 'slug', $slug )->first();

        if ( !$existingSlug )
            return $slug;

        $count++;
        $newSlug = $slug . '-' . $count;
        return self::CreateSlug( $newSlug, $count );
    }
    static function NameChecker( string $img, string $extension, int $count = 0 ): string
    {
        $existingImg = Storage::disk('public')->exists('img/products/' . $img . '.' . $extension);

        if ( !$existingImg )
            return $img . '.' . $extension;

        $count++;
        $newName = $img . '-' . $count;
        return self::NameChecker( $newName, $extension, $count );
    }
}
