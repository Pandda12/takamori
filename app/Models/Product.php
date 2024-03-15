<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function getImage(): string
    {
        if ( is_null($this->main_image) )
            return asset('/img/products/tea-placeholder.png' );

        if ( !file_exists( public_path('img/products/' . $this->main_image) ) )
            return asset('/img/products/tea-placeholder.png' );

        return asset('/img/products/' . $this->main_image );
    }
}
