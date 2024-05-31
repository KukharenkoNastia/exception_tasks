<?php

namespace ExceptionTask\Exceptions;

use Exception;

class InvalidFormatException extends Exception
{
    private string $details;

    public function __construct(string $message, string $details = "", int $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->details = $details;
    }

    public function getDetails(): string
    {
        return $this->details;
    }

}