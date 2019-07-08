<?php

namespace Chuano\Interfaces;

use Chuano\Interfaces\SumableInterface;

class ClaseUno implements SumableInterface
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

    /**
     * Suma todas las propiedades
     */
    public function sumaTodasPropiedades()
    {
        $this->total = 0;
        $this->total += $this->a;
        $this->total += $this->b;
    }

    /**
     * Devulve el total
     */
    public function getTotal(): int
    {
        return $this->total;
    }
}