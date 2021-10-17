<?php
    require_once '../conexiones/conexion.php';
    $data = file_get_contents('php://input');
    echo $data;
    $jsonData=json_decode($data);

    $query="SELECT * from datos";
    
    $resultado=$mysql->query($query);
    
    if($resultado==true){
    echo "Los datos se OBTUVIERON de forma correcta.";
}else{
    echo "Error al obtener datos.";
}
    
