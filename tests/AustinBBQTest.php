<?php

namespace Tests;

use JMac\AustinBBQ;
use PHPUnit\Framework\TestCase;

class AustinBBQTest extends TestCase
{
    public function testIsGood()
    {
        $subject = new AustinBBQ();

        $this->assertTrue($subject->isGood());
    }
}
