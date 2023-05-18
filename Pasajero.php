<?php

class Pasajero{

    //ATRIBUTOS
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $telefono;
    private $nroAsiento;
    private $nroTicket;


    //METODO CONSTRUCTOR DEL OBJETO
    public function __construct($nombre, $apellido, $nroDocumento, $telefono, $nroAsiento, $nroTicket){
        $this->nombre= $nombre;
        $this->apellido= $apellido;
        $this->nroDocumento= $nroDocumento;
        $this->telefono= $telefono;
        $this -> nroAsiento = $nroAsiento;
        $this -> nroTicket = $nroTicket;
    }
    

    //MÉTODO DE ACCESO QUE OBTIENE Y MUESTRA LOS DATOS DE LOS ATRIBUTOS
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getNroDocumento(){
        return $this->nroDocumento;
    }

    public function getTelefono(){
        return $this->telefono;
    }


    //MÉTODOS DE ACCESO QUE PERMITEN MODIFICAR LOS DATOS DE LOS ATRIBUTOS
    public function setNombre($nombreNuevo){
        $this->nombre = $nombreNuevo;
    }

    public function setApellido($apellidoNuevo){
        $this->apellido = $apellidoNuevo;
    }
    
    public function setNroDocumento($dni){
        $this->nroDocumento = $dni;
    }

    public function setTelefono($tel){
        $this->telefono = $tel;
    }


    //MÉTODO TOSTRING QUE IMPRIME LOS DATOS DE LOS ATRIBUTOS
    public function __toString(){
        $cadena = "\n\nNombre: " . $this->getNombre()." -". 
                  " Apellido: " . $this->getApellido()." -".
                  " Número de documento: " . $this->getNroDocumento()." -".
                  " Teléfono: " . $this->getTelefono();
        return $cadena;
    }

    public function darPorcentajeIncremento(){
        $porcentaje = 35;
        return $porcentaje;
    }
}