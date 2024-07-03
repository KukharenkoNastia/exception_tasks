<?php

declare(strict_types=1);

namespace ExceptionTask\Classes;

use ExceptionTask\Interfaces\DependencyInterface;

class User
{
    private $name;
    private $email;
    private $password;
    private $age;

    public function __construct(DependencyInterface $dependency)
    {
        $this->dependency = $dependency;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age->getValue();
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): int
    {
        return $this->age = $age;
    }
}