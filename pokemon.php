<?php
abstract class pokemon {
    protected $nombre;
    protected $peso;
    
    public function __construct($nombre, $peso) {
        $this->nombre = $nombre;
        $this->peso = $peso;
    }

     public function getNombre(): string {
        return $this->nombre;
    }

    public function getPeso(): float {
        return $this->peso;
    }

    abstract public function calcular_Velocidad();
    abstract public function __toString();
}
?>
