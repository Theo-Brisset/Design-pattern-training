<?php

require_once 'DatabaseInterface.php';

class JSONClient implements DatabaseInterface
{
    public function fetchAll() : array
    {
        $filePath = __DIR__ . '/../data/users.json';

        $fileContent = file_get_contents($filePath);

        $decodedContent = json_decode($fileContent);

        return $decodedContent;
    }
}
