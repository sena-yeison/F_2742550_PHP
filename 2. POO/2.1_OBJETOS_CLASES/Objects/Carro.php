<?php
class Carro
    {

        // Atributos
        private $Placa;
        private $Modelo;
        private $Color;
        private $Marca;
        private $Tipo;
        private $Ocupantes;


        private $vehiculos = array();


        // Metodos
        public function Enceder(){
            echo("Carro encendido!<br>");
        }

        public function Apagar(){
            echo("Carro apagado!<br>");
        }

        public function InformacionVehiculo($placa, $modelo, $color){
            echo 'Información del vehiculo<br>Placa:'.$placa."<br>Modelo: ". $modelo."<br>Color: ".$color;
        }



        public function cargaVehiculos($placa, $modelo, $color, $marca, $tipo, $ocupantes){
            $this->vehiculos[] = [
                "placa" => $placa,
                "modelo" => $modelo,
                "color" => $color,
                "marca" => $marca,
                "tipo" => $tipo,
                "ocupantes" => $ocupantes,
            ];
        }


        public function verVehiculos(){
            foreach ($this->vehiculos as $value) {
                echo "Datos<br>Placa: ".$value['placa']."<br>Modelo: ".$value['modelo']."<br>Color: ".$value['color']."<br>Marca: ".$value['marca']."<br>Tipo: ".$value['tipo']."<br>Ocupantes: ".$value['ocupantes']."<br><br><br>";
            }
        }

    }
