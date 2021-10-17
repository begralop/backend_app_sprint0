<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mostrar datos</title>

  </head>
  <body>
    <?php include('../conexiones/conexion.php'); ?>
      <?php include('../logica/obtenerTodasMediciones.php'); ?>
  <br>
      <table width="500" border="2">
          <tr><h1>Datos registrados</h1></tr>
          <tr>
              <th>Id</th>
              <th>Mediciones</th>
              <th>Latitud</th>
              <th>Longitud</th>
              
          </tr>
          <?php
          $sql="select * from datos";
          $resultado=mysqli_query($mysql, $sql);
          
          while($mostrar=mysqli_fetch_array($resultado)){
          ?>
          
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
      <input type="text" name="valor_cuantas" size = 50 placeholder= "Introduzca número de mediciones" />
      <input type="button" value="Obtener mediciones">
  </body>
</html>

