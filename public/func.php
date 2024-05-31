<?php

declare(strict_types=1);

namespace ExceptionTask;

use ExceptionTask\Exceptions\InvalidFormatException;
use ExceptionTask\Exceptions\MyException;

/**
 * @throws MyException
 */
function division(float $dividend, float $divider): float
{
    if ($divider == 0) {
        throw new MyException('Происходит деление на ноль', 'добавление доп инфрмации');
    }

    return $dividend / $divider;
}

function validateData(int|float|string $data): void
{
    if (!is_numeric($data)) {
        $format = 'Неподходящий формат вводных: %s не является числом';
        throw new InvalidFormatException(sprintf($format, $data));
    }
}