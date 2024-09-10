<?php

require_once 'MusicType.php';
require_once 'InvalidFileException.php';

class Ogg implements MusicType
{
    protected string $filename;
    
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function listen()
    {
        $extension = pathinfo($this->filename, PATHINFO_EXTENSION);
        if ($extension !== 'ogg') {
            throw new InvalidExtensionException("Fichier Ogg attendu mais ''$extension'' obtenu");
        }

        return 'Lecture du fichier Ogg '. $this->filename;
    }
}
