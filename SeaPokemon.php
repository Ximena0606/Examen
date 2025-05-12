<?php
require_once 'pokemon.php';

class SeaPokemon extends Pokemon {
    private $numero_aletas;

    public function __construct($nombre, $peso, $numero_aletas) {
        parent::__construct($nombre, $peso);
        $this->numero_aletas = $numero_aletas;
    }

    // Método que calcula la velocidad en el mar
    public function calcular_Velocidad() {
        return ($this->peso / 25) * $this->numero_aletas;
    }

    public function __toString() {
        // Llamamos al método calcular_Velocidad()
        $velocidad = $this->calcular_Velocidad();
        return "Soy el SeaPokemon {$this->nombre}, mi peso es de {$this->peso} kg, mi velocidad es de {$velocidad} km/h, tengo {$this->numero_aletas} aletas.";
    }
}
?>
