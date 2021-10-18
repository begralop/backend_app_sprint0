 <!--
            
 guardarMediciones
 Belén Grande López
 2021-10-10
 Método guardarMediciones para almacenar las mediciones que llegan desde la app

-->

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexiones/conexion.php'; // Establecemos conexión con la base de datos

    $data = file_get_contents('php://input');
    echo $data;
    $jsonData=json_decode($data); // Decodificamos los datos 
    $Medicion=$jsonData->{'Medicion'}; // Vamos almacenando en cada variable los datos que llegan de la base de datos
    $Latitud=$jsonData->{'Latitud'};
    $Longitud=$jsonData->{'Longitud'};
    $Major=$jsonData->{'Major'};
    $Minor=$jsonData->{'Minor'};

    // Secuencia SQL para almacenar los datos
    $query="INSERT INTO datos(Medicion, Latitud, Longitud, Major, Minor) VALUES ('".$Medicion."','".$Latitud."','".$Longitud."','".$Major."','".$Minor."')";
    
    $resultado=$mysql->query($query);
    if($resultado==true){
    echo "Los datos se introducen de forma correcta";
}else{
    echo "Error al insertar datos";
}
    
}