<?php
class F1 extends Monoplaza{
    private $patrocinador;

    public function __construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje, $patrocinador) {
        parent::__construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje);
        $this->patrocinador = $patrocinador;
    }

    public function getPatrocinador() {
        return $this->patrocinador;
    }

    public function setPatrocinador($patrocinador) {
        $this->patrocinador = $patrocinador;
    }

    protected function getMaximoParrilla() {
        return 22;
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        $tablaPuntos = array(25, 18, 15, 12, 10, 8, 6, 4, 2, 1);
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
?>