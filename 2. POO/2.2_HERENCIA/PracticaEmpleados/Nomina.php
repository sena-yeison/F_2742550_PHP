<?php

    class Nomina{
        protected $Documento;
        protected $Nombre;
        protected $Apellidos;
        protected $Email;
        protected $Cargo;
        protected $Salario;


        public function RegistroNomina($doc, $nombre, $apellido, $email, $cargo, $salario){
            $this->Documento = $doc;
            $this->Nombre = $nombre;
            $this->Apellidos = $apellido;
            $this->Email = $email;
            $this->Cargo = $cargo;
            $this->Salario = $salario;
        }

    }




    class Administrativos extends Nomina{
        
       
        public function PagoAdmin(){

            $Aumento = 20;

            echo "Información del empleado<br>";
            echo "--------------------------<br>";
            echo "Documento : $this->Documento<br>";
            echo "Nombre : $this->Nombre<br>";
            echo "Apellidos : $this->Apellidos<br>";
            echo "Email : $this->Email<br>";
            echo "Cargo : $this->Cargo<br>";
            echo "--------------------------<br><br>";

            $aumento = ($this->Salario * $Aumento ) / 100;
            $salarioTotal = ($this->Salario + $aumento );

            echo "Salario $this->Salario<br>";
            echo "Aumento $aumento<br>";
            echo "--------------------------<br>";
            echo "Total a pagar:  $salarioTotal<br>";


        }
    };



    
    class Vendedores extends Nomina{
        
       
        public function PagoAdmin(){

            $Aumento = 5;

            echo "Información del empleado<br>";
            echo "--------------------------<br>";
            echo "Documento : $this->Documento<br>";
            echo "Nombre : $this->Nombre<br>";
            echo "Apellidos : $this->Apellidos<br>";
            echo "Email : $this->Email<br>";
            echo "Cargo : $this->Cargo<br>";
            echo "--------------------------<br>";

            $aumento = ($this->Salario * $Aumento ) / 100;
            $salarioTotal = ($this->Salario + $aumento );

            echo "Salario $this->Salario<br>";
            echo "Aumento $aumento<br>";
            echo "--------------------------<br>";
            echo "Total a pagar:  $salarioTotal<br>";

        }
    };