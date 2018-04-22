<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 4/22/18
 * Time: 1:44 PM
 */

namespace App\Helpers;


use Intervention\Image\Facades\Image;

class ImageHelper
{
    private $image;

    public function upload($image_file)
    {
        $this->image = $image_file;

        $org_path = $this->getOriginalPath();
        $org_path = $this->image->store($org_path);

        list($width, $height) = $this->getThumbRatio($this->image);
        $image_object = $this->getImageObject($this->image, 'jpg');
        $thumb_path = $this->getThumbPath($image_object);
        $this->thumbMaker($image_object, $width, $height)->save($thumb_path);
        return [
            'original' => $org_path,
            'thumb'    => $thumb_path
        ];
    }

    public function getThumbRatio($path)
    {
        list($width, $height) = getimagesize($path);
        if ($height <> $width) {
            $width = $width > $height ? 270 : null;
            $height = $height > $width ? 270 : null;
        } else {
            $width = $height = 270;
        }
        return [$width, $height];

    }

    public function getOriginalPath()
    {
        return 'uploaded_files/' . date("Y") . '/' . date("m") . '/original';
    }

    public function getThumbPath($image_object)
    {
        $hash = md5(time() . $image_object->__toString());
        return 'uploaded_files/' . date("Y") . '/' . date("m") . '/thumb/' . "{$hash}" . '.jpg';
    }

    public function getImageObject($path, $type)
    {
        return Image::make($path)->encode($type);
    }

    public function thumbMaker($image_object, $width, $height)
    {
        return $image_object->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
    }
}