<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexiones/conexion.php';
    $data = file_get_contents('php://input');
    echo $data;
    $jsonData=json_decode($data);
    $Medicion=$jsonData->{'Medicion'};
    $Latitud=$jsonData->{'Latitud'};
    $Longitud=$jsonData->{'Longitud'};
    $Major=$jsonData->{'Major'};
    $Minor=$jsonData->{'Minor'};

    $query="INSERT INTO datos(Medicion, Latitud, Longitud, Major, Minor) VALUES ('".$Medicion."','".$Latitud."','".$Longitud."','".$Major."','".$Minor."')";
    
    $resultado=$mysql->query($query);
    if($resultado==true){
    echo "Los datos se introducen de forma correcta";
}else{
    echo "Error al insertar datos";
}
    
}