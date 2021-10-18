 <!--
            
 obtenerUltimasMediciones
 Belén Grande López
 2021-10-18
 Método obtenerUltimasMediciones para obtener un valor N de últimas mediciones y mostrarlas

-->

<?php //Abrimos php
$mysql=new mysqli("localhost","root","","demo_logica");

if($mysql->connect_error){
    die("Error de conexion");
}else{
    //echo "Conexión con la base de datos correcta";
}

    // Recogemos los valores introducidos por el usuario
    $valor = $_POST["valor_cuantas"];

    // Cogemos el tamaño de las filas
    $sql2 = "SELECT COUNT(*) ID FROM datos";
    $result = mysqli_query($mysql, $sql2);
    $fila = mysqli_fetch_assoc($result);
    $fila2=(int)implode( "", $fila);
    echo "<br>";

    $cuantasCoger=$fila2 - $valor;

	// Hacemos la sentencia SQL
	$sql="SELECT * FROM datos WHERE ID>$cuantasCoger"; 

	// Ejecutamos la sentencia
    $resultado=mysqli_query($mysql, $sql);
          
    $datos=mysqli_fetch_array($resultado);
    echo "<br>";

    
	// Imprimimos los datos en la tabla
	echo "<table border='1'>";
	echo"<tr>";
	echo "<th align='center'><b>ID</th>";
    echo "<th align='center'><b>Medicion</th>";
    echo "<th align='center'><b>Latitud</th>";
    echo "<th align='center'><b>Longitud</th>";
	echo"</tr>";
    echo "<br>";
    
	for($i=0; $i<$datos; $i--){
		echo"<tr><td>$datos[0]</td>";
		echo"<td>$datos[1]</td>";
		echo"<td>$datos[2]</td>";
        echo"<td>$datos[3]</td>";
		echo"</tr>";
		$datos=mysqli_fetch_array($resultado);
	}
	echo"</table>";
?>