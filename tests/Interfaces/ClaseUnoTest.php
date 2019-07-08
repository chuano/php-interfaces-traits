<?php

namespace Chuano\Interfaces;

use Chuano\Interfaces\ClaseUno;
use PHPUnit\Framework\TestCase;

class ClaseUnoTest extends TestCase
{
    public function testSumaTodasPropiedades()
    {
        $rand1 = rand(0,1000);
        $rand2 = rand(0,1000);

        $claseUno = new ClaseUno($rand1, $rand2);
        $claseUno->sumaTodasPropiedades();
        $this->assertEquals(($rand1 + $rand2), $claseUno->getTotal());
    }
}