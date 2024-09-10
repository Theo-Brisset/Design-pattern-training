<?php

// Si on doit supporter un nouveau type de format, on doit modifier cette classe :(
require_once 'Extension.php';

class MusicReader
{
    private $filename;
    private $extensionType;

    public function __construct($filename)
    {
        $this->filename = $filename;
        $extension = pathinfo($this->filename, PATHINFO_EXTENSION);
        $this->extensionType = self::createExtension($this->filename, $extension);
    }

    public static function createExtension(string $filename, string $extension): ExtensionType
    {
        return match(strtolower($extension)){
            'mp3' => new Mp3($filename),
            'ogg' => new Ogg($filename),
            'wav' => new Wav($filename),
            default => throw new Exception("unsupported file extension: $extension"),
        };
    }

    public function listen(){
        return $this->extensionType->listen();
    }
}