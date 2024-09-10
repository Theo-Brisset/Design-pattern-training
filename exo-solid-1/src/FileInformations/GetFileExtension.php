<?php

namespace App\Domain\FileInformations;

use App\Domain\FileInformations\File;

class FileExtension 
{
    public function getFileExtension(File $fichier){
        return pathinfo($fichier->name, PATHINFO_EXTENSION);
    }
}