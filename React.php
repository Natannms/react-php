<?php
require_once 'vendor/autoload.php';
use React\EventLoop\Loop;

$timer = Loop::addPeriodicTimer(0.1, function () {
    echo 'Tick' . PHP_EOL;
});

Loop::addTimer(1.0, function () use ($timer) {
    Loop::cancelTimer($timer);
    echo 'Done' . PHP_EOL;
});