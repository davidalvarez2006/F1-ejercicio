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

}
?>