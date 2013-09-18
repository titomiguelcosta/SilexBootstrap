<?php

namespace src\TitoMiguelCosta\Controller;

use TitoMiguelCosta\Controller\DefaultController;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testOutput()
    {
        $this->assertSame(2+2, 4);
    }
}