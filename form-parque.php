<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    
    <link rel="stylesheet" href="estilos.css" type="text/css" />
    
    <title>Parques</title>
  </head>
  <body>
    
 

   <img src="https://n9.cl/l20t9" alt="Parque">

    <h3>Ingrese los datos para registar un nuevo Parque</h3>
    <div class="miformulario">
        <form action="add-parque.php" method="POST">
            <label for="Dirección">Ingrese la Dirección del Parque</label>
            <input type="text" name="Dirección" id="Dirección" required/>
            <br/>
            <br/>
            <label for="Extensión">Ingrese la Extensión del Parque en metros cuadrados</label>
            <input type="number" name="Extensión" id="Extensión" step="0.01" required/>
            <br/>
            <br/>
            <label for="Ciudad">Ingrese la Ciudad donde se ubica el Parque</label>
            <input type="text" name="Ciudad" id="Ciudad" step="0.01" required/>
            <br/>
            <br/>
            <label for="Inauguración">Ingrese la fecha de Inauguración del Parque</label>
            <input type="number" name="Inauguración" id="Inauguración" required/>
            <br/>
            <br/>
            <label for="Barrio">Ingrese el Barrio donde se ubica el Parque</label>
            <input type="text" name="Barrio" id="Barrio" required/>
            <br/>
            <br/>

            <input type="submit" name="enviar" id="enviar" value="Guardar" />
        </form>
    </div>

    <hr><br/>
    <div>
        [<a href="index.php">Retornar al Inicio</a>] 
    </div>
  </body>
</html>