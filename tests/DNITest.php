<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\DNI;

class DNITest extends TestCase
{
    public function testGetDNIConLetra()
    {
        $dni = new DNI("12345678A");
        $this->assertEquals("12345678A", $dni->getDNIConLetra());
    }
}

