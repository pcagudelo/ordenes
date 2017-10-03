<?php
include "./sesion.php";
include "./conexion.php";
$arrayq= Array();
$i=0;

$sql="select tb1.codigo_tecnico, tb1.nombre_tecnico 
from tecnicos tb1 left join usuarios tb2 ON tb1.zona=tb2.zona WHERE tb2.cod_usuario='$user_cod'";
$consula=mysqli_query($mysqli,$sql);

while($tpo=mysqli_fetch_assoc($consula)){

	$arrayq[$i]=$tpo;
    $i++;
  }
  
  echo json_encode($arrayq);
  

  mysqli_close($mysqli);
  
  
?>