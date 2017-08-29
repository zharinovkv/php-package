<?php

namespace Php\Package\Tests;

use \PHPUnit\Framework\TestCase;
use \Php\Package\User;

class UserTest extends TestCase
{
    public function testGetName()
    {
        $name = 'john';
        $user = new User($name);

        $this->assertEquals($name, $user->getName());
    }
}
