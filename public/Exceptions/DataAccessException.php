<?php

declare(strict_types=1);

namespace ExceptionTask\Exceptions;

class DataAccessException extends ValidationException
{

    public function __construct(string $message = 'Тип данных не подходит', string $details = "", int $code = 0, ValidationException $previous = null)
    {
        parent::__construct($message, $details, $code, $previous);

    }
}