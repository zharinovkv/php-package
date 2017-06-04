<?php

namespace PhpPackage\Tests;

use \PHPUnit\Framework\TestCase;
use \PhpPackage\User;

class UserTest extends TestCase
{
    public function testGetName()
    {
        $name = 'john';
        $user = new User($name);

        $this->assertEquals($name, $user->getName());
    }
}
