<?php
namespace Chuano\Traits;

trait SumableTrait
{
    /**
     * Total de la suma de las propiedades
     *
     * @var int
     */
    protected $total;

    /**
     * Suma el valor de todas las propiedades que no sean "total"
     *
     * @return void
     */
    public function sumaTodasPropiedades()
    {
        $this->total = 0;
        foreach($this as $propiedad => $valor) {
            if ($propiedad == 'total') {
                continue;
            }
            $this->total += $valor;
        }
    }

    /**
     * Get total de la suma de las propiedades
     *
     * @return  int
     */ 
    public function getTotal(): int
    {
        return $this->total;
    }
}