<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
        $media = [];
        $data = File::allFiles(public_path() .'/img/products');
        foreach ( $data as $file )
            $media[] = asset('img/products/' . $file->getFilename() );

        return Inertia::render('Dashboard/Media', [
            'media' => $media
        ]);
    }
}
