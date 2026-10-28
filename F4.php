    <?php
class F4 extends Monoplaza{
    private $pais_categoria;

    public function __construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje, $pais_categoria) {
        parent::__construct($nombre, $nacionalidad, $dorsal, $escuderia, $puntaje);
        $this->pais_categoria = $pais_categoria;
    }

    public function getPaisCategoria() {
        return $this->pais_categoria;
    }

    public function setPaisCategoria($pais_categoria) {
        $this->pais_categoria = $pais_categoria;
    }

    protected function getMaximoParrilla() {
        return 30;
    }

    public function subirCategoria($academia_piloto) {
        return new F3(
            $this->getNombre(),
            $this->getNacionalidad(),
            $this->getDorsal(),
            $this->getEscuderia(),
            $this->getPuntaje(),
            $academia_piloto
        );
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        $tablaPuntos = array(25, 18, 15, 12, 10, 8, 6, 4, 2, 1);
        $puntos = 0;

        if ($this->posicionValida($posicion) && $posicion <= count($tablaPuntos)) {
            $puntos = $tablaPuntos[$posicion - 1];
        }

        $this->setPuntaje($this->getPuntaje() + $puntos);
    }

}
?>