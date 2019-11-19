<?php
namespace App\Helpers;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class ImageSaver
{
    /**
     * @param UploadedFile $file
     * @param $dir
     * @param $prefix
     * @return string
     */
    public static function save(UploadedFile $file, $dir, $prefix, $params = [])
    {
        $filename = uniqid($prefix . '_') . '.' . mb_strtolower($file->getClientOriginalExtension());
        $img = Image::make($file);
        if (array_key_exists('width', $params) && array_key_exists('height', $params)) {
            $img->resize($params['width'], $params['height']);
        }
        $img->save(public_path($dir .'/'. $filename), 40);
        return $filename;
    }
}
