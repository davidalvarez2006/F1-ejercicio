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

    public function otorgarPuntos($posicion, $vueltaRapida) {
        $tablaPuntos = array(18, 15, 12, 10, 8, 6, 4, 2, 1, 0);
        $puntos = 0;

        if (($posicion >= 1 && $posicion <= $this->getMaximoParrilla()) && $posicion <= count($tablaPuntos)) {
            $puntos = $tablaPuntos[$posicion - 1];
        }

        if ($vueltaRapida && ($posicion >= 1 && $posicion <= $this->getMaximoParrilla()) && $posicion <= count($tablaPuntos)) {
            $puntos++;
        }

        $this->setPuntaje($this->getPuntaje() + $puntos);
    }

}