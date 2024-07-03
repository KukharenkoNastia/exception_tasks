<?php

namespace ExceptionTask;

use ExceptionTask\Classes\Logger;
use ExceptionTask\Exceptions\MyException;
use Test\CalculateTest;

require __DIR__ . './../vendor/autoload.php';

function issetVar($var): bool
{
    if (!isset($var)) {
        throw new MyException('Не сущестует такой переменной');
    }
    return true;
}

$log = new Logger();

try {
    $test = new CalculateTest('test');
    $test->testAdd();
} catch (MyException $e) {
    $log->warning($e->getMessage());
}
echo 'Hello';