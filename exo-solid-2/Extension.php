<?php

abstract class ExtensionType 
{
    protected string $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    abstract public function listen();

}

class Mp3 extends ExtensionType
{
    public function listen()
    {
        return 'Lecture du fichier Mp3 '. $this->filename;
    }
}


class Ogg extends ExtensionType
{
    public function listen()
    {
        return 'Lecture du fichier Ogg '. $this->filename;
    }
}

class Wav extends ExtensionType
{
    public function listen()
    {
        return 'Lecture du fichier wav ' . $this->filename;
    }
}