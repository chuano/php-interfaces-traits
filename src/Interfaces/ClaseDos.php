<?php

namespace Chuano\Interfaces;

use Chuano\Interfaces\SumableInterface;

class ClaseDos implements SumableInterface
{
    /**
     * Total
     *
     * @var int
     */
    private $total;

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

    /**
     * Suma todas las propiedades
     */
    public function sumaTodasPropiedades()
    {
        $this->total = 0;
        $this->total += $this->a;
        $this->total += $this->b;
        $this->total += $this->c;
    }

    /**
     * Devulve el total
     */
    public function getTotal(): int
    {
        return $this->total;
    }
}