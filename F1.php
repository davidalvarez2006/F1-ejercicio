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

}
?>