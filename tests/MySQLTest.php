<?php

namespace Tests;

use JMac\MySQLConnector;
use PHPUnit\Framework\TestCase;

class MySQLTest extends TestCase
{
    public function testUsers()
    {
        $subject = new MySQLConnector();

        $this->assertSame([['root']], $subject->users());
    }
}
