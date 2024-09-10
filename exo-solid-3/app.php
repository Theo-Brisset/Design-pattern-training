<?php

require_once 'MusicReader.php';
require_once 'Mp3.php';
require_once 'Ogg.php';

function it($m,$p){
    echo"\033[3",$p?'2m✔︎':'1m✘'.register_shutdown_function(function(){die(1);})," $m\033[0m\n";
}

try {
    $mp3File = 'wannabee.mp3';
    $ogg = new Ogg($mp3File);
    $musicReader = new MusicReader($ogg);
    $musicReader->listen();
} catch(Exception $e) {
    echo $e->getMessage();
}

try {
    $oggFile = 'happy.ogg';
    $mp3 = new Mp3($oggFile);
    $musicReader = new MusicReader($mp3);
    $musicReader->listen();
} catch(Exception $e) {
    echo "<br>";
    echo $e->getMessage();
}

try {
    $truncatedFile = 'truncated_file';
    $mp3 = new Mp3($truncatedFile);
    $musicReader = new MusicReader($mp3);
    $musicReader->listen();
} catch(Exception $e) {
    echo "<br>";
    echo $e->getMessage();
}