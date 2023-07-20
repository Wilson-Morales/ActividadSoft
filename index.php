<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    
    <link rel="stylesheet" href="estilos.css" type="text/css" />
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"> </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    </script>
    <title>Actividad Experimental 1</title>
  </head>
  <body>
      <h1>Programación en PHP</h1>

         <br>

    <h3>Listado de Parques y Monumentos</h3>
    <div>
       [<a href="form-parque.php">Agregar Parques</a>] - [<a href="form-monumento.php">Agregar Monumentos</a>]
    </div>
    <div id="miaccordion">
      <h3>Listado de Parques</h3>
      <div>
        <table id="tabla_parque">
          <thead>
            <tr>
              <td>ID</td>
              <td>Dirección</td>
              <td>Extensión</td>
              <td>Ciudad</td>
              <td>Inauguración</td>
              <td>Barrrio</td>
            </tr>
          </thead>
          <?php
          include("conexion.php");
          function convertirMayuscula($dato){
              // función que permite
              // pasar una cadena a mayúscula
              return strtoupper($dato);
            }
            // se realiza la consulta a la base de datos
            $consultaBD = $conectaBD -> query("Select * from parque");
            while($registro = $consultaBD -> fetch_array(MYSQLI_ASSOC)){
              $formato = "<tr>
              <td>%d</td> <td>%s</td> <td>%d</td> <td>%s</td> <td>%d</td> <td>%s</td> 
              </tr>";
              // se agrega una fila a la tabla HTML
              echo sprintf($formato,
              convertirMayuscula($registro['id']),
              $registro['Dirección'],
              $registro['Extensión'],
              $registro['Ciudad'],
              $registro['Inauguración'],
              convertirMayuscula($registro['Barrio']));
            }
            ?>
          </table>
      </div>




      <h3>Listado de Monumentos</h3>
      <div>
        <table id="tabla_monumento">
          <thead>
            <tr>
              <td>ID</td>
              <td>Personaje</td>
              <td>Material</td>
              <td>Altura</td>
              <td>Ciudad</td>
            </tr>
          </thead>
          <?php
          // se realizar la consulta a la base de datos
          $consultaBD = $conectaBD -> query("select * from monumento");
          while($registro = $consultaBD -> fetch_array(MYSQLI_ASSOC)){
            $formato = "<tr>
            <td>%d</td> <td>%s</td> <td>%s</td> <td>%d</td> <td>%s</td>
            </tr>";
            // se agrega una fila a la tabla HTML
            echo sprintf($formato,
            convertirMayuscula($registro['id']),
            $registro['Personaje'],
            $registro['Material'],
            $registro['Altura'],
            convertirMayuscula($registro['Ciudad']));
          }
          ?>
        </table>
      </div>
    </div>
    <hr><br/>
    
    <script type="text/javascript">
      $(document).ready( function () {
        $('#tabla_parque').DataTable();
        $('#tabla_monumento').DataTable();
        $( "#miaccordion" ).accordion({
              collapsible: true
        });
      } );
    </script>
  </body>
</html>
