<?php
// conectamos con la base de datos
$conexion = mysqli_connect('localhost', 'root', '','pueblos') or die ('no se ha podido conectar con la base de datos');
// compruebo que si hay error que me avise
if(!$conexion) echo 'error';