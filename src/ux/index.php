 <!--
            
 Index
 Belén Grande López
 2021-10-10
 Index con los datos a mostrar en una tabla

-->

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mostrar datos</title>

  </head>
  <body>
      
    <?php include('../conexiones/conexion.php'); ?>
   
  <br>
      <table width="500" border="2">
          
          <thead bgcolor="pink " >
              <tr>
               <th>Id</th>
              <th >Mediciones</th>
              <th>Latitud</th>
              <th>Longitud</th>
              </tr>
          </thead>

          <?php
          $sql="select * from datos";
          $resultado=mysqli_query($mysql, $sql);
          
          while($mostrar=mysqli_fetch_array($resultado)){
          ?>
          
          <!--
            Obtenemos los valores que deseamos mostrar en la tabla -->
          <tr>
              <td align = center><?php echo $mostrar['ID']?></td> 
              <td align = center><?php echo $mostrar['Medicion']?></td>
              <td align = center><?php echo $mostrar['Latitud']?></td>
              <td align = center><?php echo $mostrar['Longitud']?></td>
          </tr>
          
          <?php
          }
              ?>
      </table>
      <p>
          
          <!--
            Obtenemos cuantas últimas mediciones queremos obtener llamando al php con el método -->
          
    <form action="obtenerUltimasMediciones.php" method="POST">
        <br>
        <input type="text" name="valor_cuantas" id="valor_cuantas" size = 50 placeholder= "Introduzca el número de mediciones que desea mostrar"  required>
        <input type="submit" value="Guardar">
    </form>
  </body>
</html>

