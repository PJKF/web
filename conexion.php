<?php

$host='localhost';
$bd='pw__usuarios';
$user='postgres';
$pass='Alejandra16.';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");
$query=("INSERT INTO usuarios(Usuario,Contrasena)
    VALUES ('_REQUEST[usuari]','_REQUEST[password]')"); 

$consulta=pg_query($conexion,$query);
    
pg_close();
echo 'Se ha Registrado Exitosamente';
?>