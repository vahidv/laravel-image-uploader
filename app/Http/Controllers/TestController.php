<?php

namespace App\Http\Controllers;

use App\Facades\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TestController extends Controller
{
    public function upload(Request $request)
    {
//        $image_helper = App::make('App\Helpers\ImageHelper');
//        $image_helper->setImage($request->file('file'));
//        return $image_helper->upload();
      return ImageUpload::upload($request->file('file'));
    }
}

