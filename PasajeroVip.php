<?php

include_once ("Pasajero.php");

class PasajeroVip extends Pasajero{

  //ATRIBUTOS
  private $nroViajeroFrec;
  private $cantMillasPasajero;

  //METODO CONSTRUCT
  public function __construct($nombre,$apellido, $dni, $telefono, $nroAsiento, $nroTicket, $nroViajeroFrec,$cantMillasPasajero){
      parent :: __construct ($nombre, $apellido, $dni, $telefono, $nroAsiento, $nroTicket);
      $this -> $nroViajeroFrec;
      $this -> $cantMillasPasajero;
  }

  //METODO DE ACCESO GET
  public function getNroViajeroFrec (){
      return $this -> nroViajeroFrec;
  }
  public function getCantMillasPasajero (){
      return $this -> cantMillasPasajero;
  }
  //METODO DE ACCESO SET
  public function setNroViajeroFrec ($nroViajeroFrecNuevo){
      $this -> nroViajeroFrec = $nroViajeroFrecNuevo;
  }
  public function setCantMillasPasajero ($cantMillasPasajeroNuevo){
      $this -> cantMillasPasajero = $cantMillasPasajeroNuevo;
  }

  //METODO __toString
  public function __toString(){
      $cadena = parent::__toString();
      $cadena = $cadena. "Numero de viajero frecuente". $this -> getNroViajeroFrec(). 
      "Cantidad de millas de pasajeros". $this -> getCantMillasPasajero();
    return  $cadena;
  }

  public function darPorcentajeIncremento(){
    $porcentaje = 35;
    if ($this-> getCantMillasPasajero()>300){
      $porcentaje = $porcentaje + 30;
    }  
    return $porcentaje;
  }
  

}