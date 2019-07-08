<?php

namespace Chuano\Interfaces;

interface SumableInterface
{
    /**
     * Suma todas las propiedades
     */
    public function sumaTodasPropiedades();

    /**
     * Devuelve el total
     *
     * @return int
     */
    public function getTotal(): int;
}