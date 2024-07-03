<?php

declare(strict_types=1);

namespace ExceptionTask\Interfaces;

interface DependencyInterface
{
    public function getValue(): float | int;

}