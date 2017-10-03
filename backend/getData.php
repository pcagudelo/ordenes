<?php
include "./sesion.php";
include "./conexion.php";
$arrayq= array();
$i=0;

$sql="
select distinct(tb1.serial_tpo), tb1.fecha_tratamiento from base tb1
where not exists (select distinct(tb2.serial_tpo),tb2.fecha_asignacion from asignacion_tpo tb2 where tb1.serial_tpo=tb2.serial_tpo)
and tb1.codigo_usuario='$user_cod'
order by tb1.serial_tpo desc";
  $consula=mysqli_query($mysqli,$sql);

  while($tpo=mysqli_fetch_assoc($consula)){

	$arrayq[$i]=$tpo;
    $i++;
  }

  echo json_encode($arrayq);
  mysqli_close($mysqli);
  
  
  ?>