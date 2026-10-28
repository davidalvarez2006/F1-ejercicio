<?php
class F2 extends Monoplaza{
    private $minimo_puntos_licencia;

    public function __construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje, $minimo_puntos_licencia) {
        parent::__construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje);
        $this->minimo_puntos_licencia = (bool) $minimo_puntos_licencia;
    }

    public function getMinimoPuntosLicencia() {
        return $this->minimo_puntos_licencia;
    }

    public function setMinimoPuntosLicencia($minimo_puntos_licencia) {
        $this->minimo_puntos_licencia = (bool) $minimo_puntos_licencia;
    }

    protected function getMaximoParrilla() {
        return 24;
    }

}
?>