<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 4/22/18
 * Time: 3:49 PM
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ImageUpload extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ImageHelper';
    }
}