 <!--
            
 obtenerTodasMediciones
 Belén Grande López
 2021-10-10
 Método obtenerTodasMediciones para mostrarlas en la app y en la web

-->

<?php
    require_once '../conexiones/conexion.php'; // Establecemos conexión con la base de datos

    $query="SELECT * from datos"; // Hacemos un select de toda la tabla
    
    $resultado=$mysql->query($query);

    $infoRes = array(); // Declaramos un array

    foreach($resultado as $row){ // Vamos rellenándolo con los valores que vamos obteniendo 
        $infoRes[] = $row;
    }
    
    if($resultado==true){
    echo json_encode($infoRes);
}else{
    echo "Error al obtener datos.";
}
    
