<?php

namespace App\Services;
use Illuminate\Support\Facades\File;

class FileServices {
    /**
     * @param $file
     * @param $folderName
     * @return string
     */
    public static function UploadFileToPublicPath($file, $folderName)
    {
        //$host = request()->getHost();
        $fileName = uniqid() . $file->getClientOriginalName();
        $destinationPath = public_path() . '/' . $folderName;
        $file->move($destinationPath, $fileName);
        $fullpath = $folderName . '/' . $fileName;
        return $fileName;
    }
    public static function DeleteFile($file_full_path){
        if (File::exists($file_full_path)) {
            File::delete($file_full_path);
            return true;
        }
        return false;
    }
}
