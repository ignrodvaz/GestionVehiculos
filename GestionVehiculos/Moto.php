<?php
    class Moto extends Vehiculo{
        public int $cilindrada;

        public function __construct(string $marca, string $modelo, string $color, int $cilindrada) {
            parent::__construct($marca, $modelo, $color);
            $this->cilindrada=$cilindrada;
        }

        public function getCilindrada(){
            return $this->cilindrada;
        }

        public function setCilindrada(int $cilindrada){
            $this->cilindrada=$cilindrada;
        }

        public function obtenerInformacion(): string {
            return parent :: obtenerInformacion() . "cilindrada: {$this->cilindrada}";
        }

        public function mover(){

        }

        public function detener(){
            
        }
    }


?>