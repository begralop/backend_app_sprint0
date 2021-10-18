<!-- Z -> obtenerUltimasMediciones() -> [mediciones] -->
<?php //Abrimos php
$mysql=new mysqli("localhost","root","","demo_logica");

if($mysql->connect_error){
    die("Error de conexion");
}else{
    //echo "Conexión con la base de datos correcta";
}

    //Recoger valor que introduce el usuario
    $valor = $_POST["valor_cuantas"];
    //echo $valor; 
    // el valor

    //para coger el tamaño de las filas
    $sql2 = "SELECT COUNT(*) ID FROM datos";
    $result = mysqli_query($mysql, $sql2);
    $fila = mysqli_fetch_assoc($result);
    $fila2=(int)implode( "", $fila);
    //echo $fila2;
    echo "<br>";
    //echo 'Número de total de registros: ' . $fila['ID'];

    $cuantasCoger=$fila2 - $valor;
    //echo  $cuantasCoger;

	//Se Hace la sentencia sql:
	$sql="SELECT * FROM datos WHERE ID>$cuantasCoger"; //->Donde * es igual a todos los campos entonces la sentencia seria esta-> seleccionamos todos los campos de la tabla
	//ejecutamos la sentencia de slq:

    $resultado=mysqli_query($mysql, $sql);
          
    $datos=mysqli_fetch_array($resultado);
	//traenos todos los valores en un array:
    echo "<br>";

    
	//imprimimos los datos de manera dinamica
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