<?php

declare(strict_types=1);

namespace ExceptionTask\Exceptions;

class ValidationException extends BaseException
{
    public function __construct(string $message = 'Валидация не прошла', string $details = "", int $code = 0, BaseException $previous = null)
    {
        parent::__construct($message, $details, $code, $previous);

    }
}