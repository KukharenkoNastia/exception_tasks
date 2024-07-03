<?php

declare(strict_types=1);

namespace ExceptionTask\Classes;

use ExceptionTask\Interfaces\DependencyInterface;
use PHPUnit\Framework\TestCase;
use ExceptionTask\Classes\User;
use Mockery;

class UserTest extends TestCase
{
    private $user;
    protected $mockDependency;

    /**
     * @return void
     * @before
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    protected function setUp(): void
    {
        $this->mockDependency = Mockery::mock(DependencyInterface::class);
    }

    public function testAdult(): void
    {
        $this->mockDependency->shouldReceive('getValue')->andReturn(23);

        $user = new User($this->mockDependency);
        $result = $user->setAge(23);
        $this->assertEquals(23, $result, 'Should be 23');
    }


    protected function tearDown(): void
    {
        parent::tearDown();
    }
}
