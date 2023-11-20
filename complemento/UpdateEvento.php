<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$idEvento         = $_POST['idEvento'];

$evento            = ucwords($_REQUEST['evento']);
$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 
$hora              = $_REQUEST['Hora'];
$hora_inicio       = date('H:i:s', strtotime($f_inicio));
$precio            = $_REQUEST['precio'];
$color_evento;


$UpdateProd = ("UPDATE t_eventos 
    SET Nombre ='$evento',
        Fecha  ='$fecha_inicio',
        Time   ='$hora',
        Precio ='$precio',
        Color ='$color_evento'
    WHERE idEventos='".$idEvento."' ");
$result = mysqli_query($con, $UpdateProd);


header("Location:../calendario.php?ea=1");
?>