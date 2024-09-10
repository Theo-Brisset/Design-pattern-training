<?php

namespace App\Domain ;

use App\Domain\FileInformations\File;
use App\Domain\FileInformations\FileExtension;
use App\Domain\FileManipulation\FileResizer;

class Uploader
{
    public $directory = '';
    public $validTypes = [];

    public function uploadFile($fileName)
    {
        $UploadedFile = new File($fileName);
        if (!in_array($UploadedFile->type, $UploadedFile->validTypes)) {
            

            return false;
        } else {
            return true;
        }
    }

    public function getExtension(File $fileName)
    {
        $fileExtension = new FileExtension();

        return $fileExtension->getFileExtension($fileName);
    }

    public function resize($origin, $destination, $width, $maxHeight, File $fileName)
    {
        $fileResizer = new FileResizer();

        return $fileResizer->resize($this->getExtension($fileName), $origin, $destination, $width, $maxHeight);
    }
}
