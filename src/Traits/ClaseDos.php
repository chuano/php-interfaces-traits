<?php

namespace Chuano\Traits;

use Chuano\Traits\SumableTrait;

class ClaseDos
{
    use SumableTrait;
    
    /**
     * Número A
     *
     * @var int
     */
    protected $a;

    /**
     * Número B
     *
     * @var int
     */
    protected $b;

    /**
     * Número C
     *
     * @var int
     */
    protected $c;

    /**
     * Constructor de la clase
     *
     * @param int $a
     * @param int $b
     * @param int $c
     */
    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
}