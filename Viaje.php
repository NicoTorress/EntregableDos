<?php

//Creo la clase y sus atributos
class viaje{
    private $codigoViaje;
    private $destinoViaje;
    private $cantidadMax;
    private $coleccionPasajeros;
    private $objResponsable;


    //Función constructora de nuestro objeto
    public function __construct($pcodigo, $pdestino, $pcantMaxPasajeros, $colPasajeros, $responsable){
        $this -> codigoViaje = $pcodigo;
        $this -> destinoViaje = $pdestino;
        $this -> cantidadMax = $pcantMaxPasajeros;
        $this -> coleccionPasajeros = $colPasajeros;
        $this-> objResponsable = $responsable;
    }


    //Métodos de acceso GET que permiten obtener y mostrar los datos de nuestros atributos 
    public function getCodigoViaje(){
        return $this -> codigoViaje;
    }

    public function getDestinoViaje(){
        return $this -> destinoViaje;
    }

    public function getCantidadMax(){
        return $this -> cantidadMax;
    }

    public function getColeccionPasajeros(){
        return $this -> coleccionPasajeros;
    }

    public function getObjResponsable(){
        return $this-> objResponsable;
    }


    //Métodos de acceso SET que nos permiten modificar los valores de nuestros atributos 
    public function setCodigo($codigo){ 
        $this -> codigo = $codigo; 
    }

    public function setDestino($destino){
        $this -> destino = $destino;
    }

    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
    }

    public function setColeccionPasajeros($colPasajeros){
        $this -> coleccionPasajeros = $colPasajeros; 
    }

    public function setObjResponsable($responsable){
        $this-> objResponsable = $responsable;
    }


    public function verificarNumeroEmpleado($numEmpleado){
        //bolean $numCoincide
        $numCoincide = false;
        if ($numEmpleado == ($this->getObjResponsable())->getNumeroEmpleado()){
            $numCoincide = true;
        }
        
        return $numCoincide;
    }

    public function mostrarPasajeros($coleccionPasajeros){
        //string $arregloPasajeros
        $arregloPasajeros = null;
        for ($i=0; $i < (count($this->coleccionPasajeros)) ; $i++) { 
            $pasajero = $this->coleccionPasajeros[$i];
            $arregloPasajeros = $arregloPasajeros . $pasajero;
        }
        return $arregloPasajeros;
    }


    public function buscarPasajero($dniBuscado){
        //boolean $coincide
        $coincide = false;
        $i = 0;
        while($i<count($this->getColeccionPasajeros()) && !$coincide){
            $colPasajeros = $this->getColeccionPasajeros()[$i];
            if($dniBuscado == $colPasajeros->getNroDocumento()){
                $coincide = true;
            }
            $i++;
        }
        return $coincide;
    }


    public function modificarDatosPasajero($dniBuscado, $nombre, $apellido, $telefono){
        $coincide = false;
        $i = 0;
        while($i<count($this->getColeccionPasajeros()) && !$coincide){
            $colPasajeros = $this->getColeccionPasajeros()[$i];
            if($dniBuscado == $colPasajeros->getNroDocumento()){
                $coincide = true;
                $coleccionPasajeros[$i]->setNombre($nombre);
                $coleccionPasajeros[$i]->setApellido($apellido);
                $coleccionPasajeros[$i]->setTelefono($telefono);
            }
            $i++;
        }
        return $coleccionPasajeros;
    }


    public function __toString(){
        //string $arregloPasajeros
        $arregloPasajeros = null;
        for ($i=0; $i < (count($this->coleccionPasajeros)) ; $i++) { 
            $pasajero = $this->coleccionPasajeros[$i];
            $arregloPasajeros = $arregloPasajeros . $pasajero;
        }

        $cadena = "\nCODIGO DE VIAJE: " .$this->getCodigoViaje().
                  "\nDESTINO: " .$this->getDestinoViaje().
                  "\nCANTIDAD MAXIMA DE PASAJEROS: " .$this->getCantidadMax(). "\n".
                  "\nCOLECCION DE PASAJEROS: " . $arregloPasajeros . "\n" . 
                  "\nRESPONSABLE DEL VIAJE: " .$this->getObjResponsable(). "\n";
        return $cadena;

    }
 }