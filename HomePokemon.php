<?php
require_once 'pokemon.php';

class HomePokemon extends Pokemon {
    private $numero_patas;
    private $tamaño;
    private $horas_en_tv;

    public function __construct($nombre, $peso, $numero_patas, $tamaño, $horas_en_tv) {
        parent::__construct($nombre, $peso);
        $this->numero_patas = $numero_patas;
        $this->tamaño = $tamaño;
        $this->horas_en_tv = $horas_en_tv;
    }

    public function calcular_Velocidad() {
        return $this->numero_patas * $this->tamaño * 3;
    }

    public function __toString() {
        // Llamamos al método calcular_Velocidad()
        $velocidad = $this->calcular_Velocidad();
        return "Soy HomePokemon {$this->nombre}, mi peso es de {$this->peso} kg, mi velocidad es de {$velocidad} km/h, tengo {$this->numero_patas} patas, mi tamaño es de {$this->tamaño} m, veo TV {$this->horas_en_tv}h al día.";
    }
}
?>
