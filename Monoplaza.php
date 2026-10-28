<?php
abstract class Monoplaza{
    private $nombre;
    private $nacionalidad;
    private $dorsal;
    private $escuderia;
    private $puntaje;

    public function __construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje) {
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
        $this->dorsal = $dorsal;
        $this->escuderia = $escuderia;
        $this->puntaje = $puntaje;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function getDorsal() {
        return $this->dorsal;
    }

    public function setDorsal($dorsal) {
        $this->dorsal = $dorsal;
    }

    public function getEscuderia() {
        return $this->escuderia;
    }

    public function setEscuderia($escuderia) {
        $this->escuderia = $escuderia;
    }

    public function getPuntaje() {
        return $this->puntaje;
    }

    public function setPuntaje($puntaje) {
        $this->puntaje = $puntaje;
    }

    abstract protected function getMaximoParrilla();

    abstract public function otorgarPuntos($posicion, $vueltaRapida);

}
?>