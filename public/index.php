<?php

declare(strict_types=1);

namespace ExceptionTask;

use ExceptionTask\Exceptions\BaseException;
use ExceptionTask\Exceptions\DataAccessException;
use ExceptionTask\Exceptions\ValidationException;

require __DIR__ . './../vendor/autoload.php';

function exc_func(int|float|string $param): void
{
    if (!is_numeric($param)) {
        throw new BaseException();
    }

    if ($param < 18) {
        throw new ValidationException();
    }

    if ($param > 100) {
        throw new DataAccessException();
    }
}


try {
    exc_func(17);
} catch (BaseException|ValidationException|DataAccessException $e) {
    echo $e->getMessage();
    echo $e->getDetails();
}