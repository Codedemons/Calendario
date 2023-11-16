<?php
require_once('config.php');
$id	= $_REQUEST['id'];
echo $id;
$sqlDeleteEvento = ("DELETE FROM t_eventos WHERE idEventos='" .$id. "'");
$resultProd = mysqli_query($con, $sqlDeleteEvento);

?>
  