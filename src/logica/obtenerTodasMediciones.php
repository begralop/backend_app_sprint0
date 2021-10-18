<?php
    require_once '../conexiones/conexion.php';

    $query="SELECT * from datos";
    
    $resultado=$mysql->query($query);

    $infoRes = array();

    foreach($resultado as $row){
        $infoRes[] = $row;
    }
    
    if($resultado==true){
    echo json_encode($infoRes);
}else{
    echo "Error al obtener datos.";
}
    
