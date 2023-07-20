<?php
      // proceso para guardar un nuevo registro a la base de datos
      include("conexion.php");
    
      $Dirección = $_REQUEST['Dirección'];
      $Extensión = doubleval($_REQUEST['Extensión']);
      $Ciudad = $_REQUEST['Ciudad'];
      $Inauguración =  doubleval($_REQUEST['Inauguración']);
      $Barrio = $_REQUEST['Barrio'];
      
      $cadena = "insert into `parque`( `Dirección`, `Extensión`,
        `Ciudad`, `Inauguración`, `Barrio`) values
        ('%s', '%f', '%s', '%f', '%s');";
      $cadena = sprintf($cadena, $Dirección, $Extensión, $Ciudad, $Inauguración, $Barrio);
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