<?php

include_once("Pasajero.php");

class PasajeroEspecial extends Pasajero{

  //ATRIBUTOS
  private $servEspecial;

  //METODO CONSTRUCT
  public function __construct($nombre,$apellido, $dni, $telefono, $nroAsiento, $nroTicket, $especial){
    parent :: __construct($nombre, $apellido, $dni, $telefono, $nroAsiento, $nroTicket);
    $this -> servEspecial = $especial;
  }

  //METODO DE ACCESO GET
  public function getServEspecial (){
    return $this -> especial;
  }

  //METODO DE ACCESO SET
  public function setServEspecial ($nuevoEspecial){
    $this -> especial = $nuevoEspecial;
  }

  //METODO __toString
public function __toString(){
  $cadena= parent::__toString();
  $cadena = $cadena . $this -> getEspecial();
return $cadena;
}

  public function darPorcentajeIncremento(){
    $porcentaje = 0;
    $resultado =0;
    $n = count($this -> getEspecial());
    //$valor = true;
    //while($i < $n && $valor){
    for($i=0;$i<$n;$i++){
        if($this -> getEspecial()[$i] == "r"){
            $resultado ++;
        }
        if($this -> getEspecial()[$i] =="s"){
            $resultado ++;
        }
        if ($this -> getEspecial()[$i] =="c"){
            $resultado++;
        }
    }
    if ($resultado == 3){
        $porcentaje = 30;
    } elseif ($resultado == 1){
        $porcentaje = 15;
    }
    return $porcentaje;
  }

}