<?php
$hora = date("g:i:A");
echo $hora;
?>


<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
//$hora = date("g:i:A");

require("config.php");

$evento            = ucwords($_REQUEST['evento']);
$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 
$hora              = $_REQUEST['Hora'];
$hora_inicio       = date('H:i:s', strtotime($f_inicio));
$precio            = $_REQUEST['precio'];
$color_evento      = '#0064ff'

$InsertNuevoEventos =  "INSERT INTO  t_eventos (
       idEventos,
       Nombre,
       Fecha, 
       `Time`,
       Precio, 
       Color) 
      VALUES (
        NULL, 
        '" .$evento. "', 
        '" .$fecha_inicio. "', 
        '" .$hora. "',
        '" .$precio. "',
        '" .$color_evento. "'
   )";
$resultadoNuevoEvento = mysqli_query($con, $InsertNuevoEventos);


header("Location:../calendario.php?e=1");

?>