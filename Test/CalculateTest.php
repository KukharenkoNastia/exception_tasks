<?php

declare(strict_types=1);

namespace Test;

use ExceptionTask\Classes\Calculator;
use ExceptionTask\Interfaces\DependencyInterface;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Mockery;

class CalculateTest extends TestCase
{

    protected $mockDependency;

    protected function setUp(): void
    {
        $this->mockDependency = Mockery::mock(DependencyInterface::class);
    }

    /**
     * @return void
     * @expectedException InvalidArgumentException
     */

    public function testDivideByZero(): void
    {
        $this->mockDependency->shouldReceive('getValue')->andReturn(1)->andThrow(new \Exception('Исключение'));

        echo $this->mockDependency->getValue();
        $calculator = new Calculator($this->mockDependency);
        $result = $calculator->divideNumbers(4);
        $this->assertEquals(4, $result, 'Should be 0');
    }

    public function testMultiplyNumbers(): void
    {
        $this->mockDependency->shouldReceive('getValue')->andReturn(5);

        $calculator = new Calculator($this->mockDependency);
        $result = $calculator->multiplyNumbers(3);
        $this->assertEquals(15, $result, "Should be 15");
    }

    public function testDivideNumbers(): void
    {
        $this->mockDependency->shouldReceive('getValue')->andReturn(3);

        $calculator = new Calculator($this->mockDependency);
        $result = $calculator->divideNumbers(9);
        $this->assertEquals(3, $result, "Should be 3");
    }
}