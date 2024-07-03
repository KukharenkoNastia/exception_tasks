<?php

declare(strict_types=1);

namespace ExceptionTask\Classes;

use ExceptionTask\Interfaces\DependencyInterface;
use InvalidArgumentException;

class Calculator
{

    protected DependencyInterface $dependency;

    public function __construct(DependencyInterface $dependency)
    {
        $this->dependency = $dependency;
    }

    public function add($number)
    {
        return $number + $this->dependency->getValue();
    }

    public function divideNumbers($number): float|int
    {
        return $number / $this->dependency->getValue();
    }

    public function multiplyNumbers($number): float|int
    {
        return $number * $this->dependency->getValue();
    }
}