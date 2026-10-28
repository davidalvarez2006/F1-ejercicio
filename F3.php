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

}
?>