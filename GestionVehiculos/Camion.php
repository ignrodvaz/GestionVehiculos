<?php
    class Camion extends Vehiculo{
        public float $capacidadCarga;

        public function __construct(string $marca, string $modelo, string $color, int $capacidadCarga) {
            parent::__construct($marca, $modelo, $color);
            $this->capacidadCarga=$capacidadCarga;
        }

        public function getCapacidadcarga(){
            return $this->capacidadCarga;
        }

        public function setCapacidadCarga(float $capacidadCarga){
            $this->capacidadCarga=$capacidadCarga;
        }

        public function obtenerInformacion(): string {
            return parent :: obtenerInformacion() . "capacidadCarga: {$this->capacidadCarga}";
        }

        public function mover(){

        }

        public function detener(){
            
        }
    }


?>