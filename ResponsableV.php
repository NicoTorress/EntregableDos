<?php

class ResponsableV{

    //ATRIBUTOS
    private $nombreResp;
    private $apellidoResp;
    private $numeroEmpleado;
    private $numeroLicencia;


    //MÉTODO CONSTRUCTOR DEL OBJETO
    public function __construct($nombre, $apellido, $numEmpleado, $numLicencia){
        $this->nombreResp = $nombre;
        $this->apellidoResp = $apellido;
        $this->numeroEmpleado = $numEmpleado;
        $this->numeroLicencia = $numLicencia;
    }


    //MÉTODO DE ACCESO QUE OBTIENE Y PERMITE MOSTRAR LOS DATOS DE LOS ATRIBUTOS 
    public function getNombreResp(){
        return $this->nombreResp;
    }

    public function getApellidoResp(){
        return $this->apellidoResp;
    }

    public function getNumeroEmpleado(){
        return $this->numeroEmpleado;
    }

    public function getNumeroLicencia(){
        return $this->numeroLicencia;
    }


    //MÉTODO DE ACCESO QUE PERMITE MODIFICAR LOS DATOS DE LOS ATRIBUTOS
    public function setNombreResp($nombre){
        $this->nombreResp = $nombre;
    }

    public function setApellidoResp($apellido){
        $this->apellidoResp = $apellido;
    }

    public function setNumeroEmpleado($nroEmpleado){
        $this->numeroEmpleado = $nroEmpleado;
    }

    public function setNumeroLicencia($nroLicencia){
        $this->numeroLicecia = $nroLicencia;
    }


    //MÉTODO QUE PERMITE IMPRIMIR LOS DATOS DE LOS ATRIBUTOS
    public function __toString(){
        $cadena = "\nNOMBRE RESPONSABLE: " . $this->getNombreResp()." -".
                  " APELLIDO RESPONSABLE: " . $this->getApellidoResp()." -".
                  " NUMERO DE EMPLEADO: " . $this->getNumeroEmpleado()." -".
                  " NUMERO DE LICENCIA: " . $this->getNumeroLicencia()." -" ;
        
        return $cadena;
    }
}