<?php

class Animales
{

    protected $TipoAnimal;
    protected $Nombre;
    protected $Accion;

    public function Animal($tipo, $nombre, $accion)
    {
        $this->TipoAnimal = $tipo;
        $this->Nombre = $nombre;
        $this->Accion = $accion;
    }
}



class ElAnimal extends Animales
{

    public function accionAnimal()
    {
        echo "El $this->TipoAnimal de nombre $this->Nombre, está $this->Accion";
    }
}





