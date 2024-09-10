<?php

interface MusicType
{
    public function __construct(string $filename);

    public function getFilename() : string;

    public function listen();
}
