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

//Negative

$res = calc('abc', 0, '/');

if ($res == 0) {
    echo 'OK' . PHP_EOL;
}

$res = calc('10', 'abc', '/');

if ($res == 0) {
    echo 'OK' . PHP_EOL;
}

$res = calc(INF, 1, '/');

if ($res == INF) {
    echo 'OK' . PHP_EOL;
}

$res = calc(1, INF, '*');

if ($res == INF) {
    echo 'OK' . PHP_EOL;
}

$res = calc(100, 100, '*');

if ($res < 10000) {
    echo 'Not Pass' . PHP_EOL;
} else {
    echo 'Pass' . PHP_EOL;
}

$res = calc(100, 100, '+');

if ($res < 200) {
    echo 'Not Pass' . PHP_EOL;
} else {
    echo 'Pass' . PHP_EOL;
}

$res = calc(100, 100, '/');

if ($res < 1) {
    echo 'Not Pass' . PHP_EOL;
} else {
    echo 'Pass' . PHP_EOL;
}

$res = calc(100, 100, '-');

if ($res < 0) {
    echo 'Not Pass' . PHP_EOL;
} else {
    echo 'Pass' . PHP_EOL;
}

$res = calc(100, 100, '*');

if ($res > 10000) {
    echo 'Not Pass' . PHP_EOL;
} else {
    echo 'Pass' . PHP_EOL;
}

$res = calc(100, 100, '+');

if ($res > 200) {
    echo 'Not Pass' . PHP_EOL;
} else {
    echo 'Pass' . PHP_EOL;
}

$res = calc(100, 100, '/');

if ($res > 1) {
    echo 'Not Pass' . PHP_EOL;
} else {
    echo 'Pass' . PHP_EOL;
}

$res = calc(100, 100, '-');

if ($res > 0) {
    echo 'Not Pass' . PHP_EOL;
} else {
    echo 'Pass' . PHP_EOL;
}