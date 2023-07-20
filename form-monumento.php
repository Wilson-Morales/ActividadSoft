<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    
    <link rel="stylesheet" href="estilos.css" type="text/css" />
    
    <title>Monumentos</title>
  </head>
  <body>
    
 

   <img src="https://n9.cl/xt59m" alt="Monumentos">

    <h3>Ingrese los datos para registrar un nuevo Monumento</h3>
    <div class="miformulario">
        <form action="add-monumento.php" method="POST">
            <label for="Personaje">Ingrese el nombre del Personaje o Acontecimiento</label>
            <input type="text" name="Personaje" id="Personaje" required/>
            <br/>
            <br/>
            <label for="Material">Ingrese el nombre del Material con el que esta hecho el Monumento</label>
            <input type="text" name="Material" id="Material" step="0.01" required/>
            <br/>
            <br/>
            <label for="Altura">Ingrese la Altura del Monumento</label>
            <input type="number" name="Altura" id="Altura" required/>
            <br/>
            <br/>
            <label for="Ciudad">Ingrese la Ciudad donde esta ubicado el Monumento</label>
            <input type="text" name="Ciudad" id="Ciudad" required/>
            <br/>
            <br/>

            <input type="submit" name="enviar" id="enviar" value="Guardar" />
        </form>
    </div>

    <hr><br/>
    <div>
        [<a href="index.php">Regresar al Inicio</a>] 
    </div>
  </body>
</html>