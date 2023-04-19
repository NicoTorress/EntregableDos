<?php

include_once('Viaje.php');
include_once('Pasajero.php');
include_once('ResponsableV.php');

/*
Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, 
numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. 
También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV
que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable
de realizar el viaje. 
*/
// 1) Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero.
// 2) Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos.
// 3) Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. 
// 4) De la misma forma cargue la información del responsable del viaje.


//MENÚ DE OPCIONES
  function menu(){
    //int $opcionElegida
    echo "\n*******************MENÚ DE OPCIONES*******************" ;
    echo "\n1.MODIFICAR DATOS DEL PASAJERO";
    echo "\n2.AGREGAR PASAJEROS AL VIAJE";
    echo "\n3.CARGAR/MODIFICAR LA INFORMACION DEL RESPONSABLE DEL VIAJE";
    echo "\n4.MOSTRAR INFORMACION COMPLETA";
    echo "\n5.SALIR \n";
    echo "\nIngrese su opción: ";
    $opcionElegida = trim(fgets(STDIN));
    return $opcionElegida;
 }


 $objPasajero1 = new Pasajero("Pablo", "Gonzales", 43530680, 2994584611);
 $objPasajero2 = new Pasajero("Abigail", "Calín", 43575236, 2994448596);
 $objPasajero3 = new Pasajero("Carla", "Gutierrez", 41911258, 2994573646);
 $objPasajero4 = new Pasajero("Daniel", "Gimenez", 42457832, 2992563144);
 
 $arregloPasajeros=[];
 $arregloPasajeros[0]= $objPasajero1;
 $arregloPasajeros[1]= $objPasajero2;
 $arregloPasajeros[2]= $objPasajero3;
 $arregloPasajeros[3]= $objPasajero4;


 $objResponsable =  new ResponsableV(1515, 15763456, "Carlos", "Rodriguez");


 $objViaje = new Viaje(10106, "China", 7, $arregloPasajeros, $objResponsable);

 
 do{
    $opcionElegida = menu();
   switch ($opcionElegida) {
       case 1:
           echo $objViaje->mostrarPasajeros($arregloPasajeros)."\n";
           echo "\nINGRESE EL DNI DEL PASAJERO QUE DESEA MODIFICAR: ";
           $dniBuscado = trim(fgets(STDIN));
           $encontro = $objViaje->buscarPasajero($dniBuscado);
           if($encontro){
               echo "PASAJERO ENCONTRADO!\n";
               echo "MODIFICAR NOMBRE: ";
               $nombreNuevo=trim(fgets(STDIN));
               echo "MODIFICAR APELLIDO: ";
               $apellidoNuevo=trim(fgets(STDIN));
               echo "MODIFICAR TELEFONO: ";
               $telefonoNuevo=trim(fgets(STDIN));
               $arregloModificado= $objViaje->modificarDatosPasajero($dniBuscado, $nombreNuevo, $apellidoNuevo, $telefonoNuevo);
               echo "\nARREGLO MODIFICADO\n". $objViaje->mostrarPasajeros($arregloModificado);
           }
           else{
               echo "NO SE ENCONTRO A UN PASAJERO CON ESE DNI!\n";
           }
           break;

       case 2:
           echo "INGRESE LA CANTIDAD DE PASAJEROS QUE DESEA AGREGAR: ";
           $cantPasajeros = trim(fgets(STDIN));

           for ($i=0; $i < $cantPasajeros ; $i++) {
               echo "INGRESE NOMBRE: ";
               $nombre = trim(fgets(STDIN));
               echo "INGRESE APELLIDO: ";
               $apellido = trim(fgets(STDIN));
               echo "INGRESE NRO DOCUMENTO: ";
               $dni = trim(fgets(STDIN));
               while($objViaje->buscarPasajero($dni)){
                   echo "el dni ingresado ya se encuentra, por favor ingresar otro: ";
                   $dni = trim(fgets(STDIN));
               }
               echo "INGRESE TELEFONO: ";
               $telefono = trim(fgets(STDIN));
               $objPasajero5 = new Pasajero($nombre, $apellido, $dni, $telefono);
               $arregloPasajeros[]=$objPasajero5;
               $objViaje->setColeccionPasajeros($arregloPasajeros);
           }

           echo "\nARREGLO MODIFICADO\n". $objViaje->mostrarPasajeros($arregloPasajeros);
           break;

       case 3:
           echo "\n******MODIFIQUE LOS DATOS DEL RESPONSABLE DEL VIAJE******";
           echo "\nMODIFICAR NOMBRE DEL RESPONSABLE: ";
           $nombreResp = trim(fgets(STDIN));
           echo "MODIFICAR APELLIDO DEL RESPONSABLE: ";
           $apellidoResp = trim(fgets(STDIN));
           echo "MODIFICAR NUMERO DE EMPLEADO: ";
           $numeroEmpleado = trim(fgets(STDIN));
           while($objViaje->verificarNumeroEmpleado($numeroEmpleado)){
               echo "el número de empleado ingresado es igual al anterior, por favor ingresar otro: ";
               $numeroEmpleado = trim(fgets(STDIN));
           }
           echo "MODIFICAR NUMERO DE LICENCIA: ";
           $numeroLicencia = trim(fgets(STDIN));
           $objResponsable = new ResponsableV($nombreResp, $apellidoResp, $numeroEmpleado, $numeroLicencia);
           $objViaje->setObjResponsable($objResponsable);
           echo "\nLOS DATOS DEL RESPONSABLE HAN SIDO MODIFICADOS EXITOSAMENTE\n";
           echo "\n". $objViaje->getObjResponsable();
           break;

       case 4:
           echo "\n" . $objViaje ;
           break;
       
   }
 }while($opcionElegida!=5);