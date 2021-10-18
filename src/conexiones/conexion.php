<?php
$mysql=new mysqli("localhost","root","","demo_logica");

if($mysql->connect_error){
    die("Error de conexion");
}else{
    //echo "Conexión con la base de datos correcta";
}