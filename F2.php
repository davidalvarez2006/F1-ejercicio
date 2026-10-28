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

    public function otorgarPuntos($posicion, $vueltaRapida) {
        $tablaPuntos = array(10, 8, 7, 6, 5, 4, 3, 2, 1, 0);
        $puntos = 0;

        if ($this->posicionValida($posicion) && $posicion <= count($tablaPuntos)) {
            $puntos = $tablaPuntos[$posicion - 1];
        }

        if ($vueltaRapida && $this->posicionValida($posicion) && $posicion <= count($tablaPuntos)) {
            $puntos++;
        }

        $this->setPuntaje($this->getPuntaje() + $puntos);
    }

}
?>