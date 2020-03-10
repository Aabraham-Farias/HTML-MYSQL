<?php
include("conexion.phpp");

$v1=$_POST['nombre'];
$v2=$_POST['apat'];
$v3=$_POST['amat'];

insertar($v1,$v2,$v3);

function insertar($v1,$v2,$v3)
{
    global $conex; 
    if(!mysqli_query($conex,"INSERT INTO batman(nombre,apellido_paterno,apellido_materno) VALUES ('".$v1."','".$v2."','".$v3."',)"))
    {
        echo "ERROR!";
    }
    else
    {
        echo "Accion Exitosa";
    }
}
?> 