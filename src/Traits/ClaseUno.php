<?php

namespace Chuano\Traits;

use Chuano\Traits\SumableTrait;

class ClaseUno
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
     * Constructor de la clase
     *
     * @param int $a
     * @param int $b
     */
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
}