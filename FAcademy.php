<?php
class FAcademy extends Monoplaza{
    private $potencia_max;

    public function __construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje, $potencia_max) {
        parent::__construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje);
        $this->potencia_max = $potencia_max;
    }

    public function getPotenciaMax() {
        return $this->potencia_max;
    }

    public function setPotenciaMax($potencia_max) {
        $this->potencia_max = $potencia_max;
    }

    protected function getMaximoParrilla() {
        return 18;
    }

}