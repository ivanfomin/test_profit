<?php

include_once __DIR__ . '/functions.php';

$res = calc(10, 10, '+');
if ($res == 20) {
    echo 'OK' . PHP_EOL;
}

$res = calc(10, 10, '*');
if ($res == 100) {
    echo 'OK' . PHP_EOL;
}

$res = calc(10, 10, '-');
if ($res == 0) {
    echo 'OK' . PHP_EOL;
}

$res = calc(10, 10, '/');
if ($res == 1) {
    echo 'OK' . PHP_EOL;
}


$res = calc(10, 0, '/');

if ($res == 0) {
    echo 'OK' . PHP_EOL;
}

