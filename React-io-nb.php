<?php
require_once 'vendor/autoload.php';

use React\EventLoop\Factory;
use React\Stream\ReadableResourceStream;

$loop =  Factory::create();
$stream = new ReadableResourceStream(fopen('arquivo.txt', 'r'), $loop);


    $stream->on('data', function(string $data){
        echo $data;
    });

$loop->run();