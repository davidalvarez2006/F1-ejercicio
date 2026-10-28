<?php
class F3 extends Monoplaza{
    private $academia_piloto;

    public function __construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje, $academia_piloto) {
        parent::__construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje);
        $this->academia_piloto = $academia_piloto;
    }

    public function getAcademiaPiloto() {
        return $this->academia_piloto;
    }

    public function setAcademiaPiloto($academia_piloto) {
        $this->academia_piloto = $academia_piloto;
    }

    protected function getMaximoParrilla() {
        return 30;
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        $tablaPuntos = array(10, 8, 7, 6, 5, 4, 3, 2, 1);
        $puntos = 0;

        if (($posicion >= 1 && $posicion <= $this->getMaximoParrilla()) && $posicion <= count($tablaPuntos)) {
            $puntos = $tablaPuntos[$posicion - 1];
        }

        $this->setPuntaje($this->getPuntaje() + $puntos);
    }

}
?>