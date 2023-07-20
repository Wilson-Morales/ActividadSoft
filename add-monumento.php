<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("conexion.php");

      $Personaje = $_REQUEST['Personaje'];
      $Material = $_REQUEST['Material'];
      $Altura =  doubleval($_REQUEST['Altura']);
      $Ciudad =  $_REQUEST['Ciudad'];
      
      $cadena = "insert into `monumento`( `Personaje`, `Material`,
        `Altura`, `Ciudad`) values
        ('%s', '%s', '%f', '%s');";
      $cadena = sprintf($cadena, $Personaje, $Material,
       $Altura, $Ciudad);
      echo $cadena;
      $consultaBD = $conectaBD -> query($cadena);

      if($consultaBD){
        // si hay existo con la inserción,
        // se realiza un redirect a index.php
        header("Location: index.php");
      }else{
        // si exite un error
        // se captura el error
        // se hace un redirect a nuevo.php
        // además se envía el mensaje de error
        // como parámetro
        $mensaje = $conectaBD -> error;
        header("Location: error.php?error=".$mensaje);
      }
?>
