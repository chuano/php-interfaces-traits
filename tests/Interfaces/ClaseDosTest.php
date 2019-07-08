<?php

namespace Chuano\Interfaces;

use Chuano\Interfaces\ClaseDos;
use PHPUnit\Framework\TestCase;

class ClaseDosTest extends TestCase
{
    public function testSumaTodasPropiedades()
    {
        $rand1 = rand(0,1000);
        $rand2 = rand(0,1000);
        $rand3 = rand(0,1000);

        $claseDos = new ClaseDos($rand1, $rand2, $rand3);
        $claseDos->sumaTodasPropiedades();
        $this->assertEquals(($rand1 + $rand2 + $rand3), $claseDos->getTotal());
    }
}