<?php
include("./conexion.php");

$sqlPro="select tb1.fecha_tratamiento, tb3.zona, 
DATEDIFF(current_date(), tb1.fecha_tratamiento) AS antiguedad,
tb1.num_os, tb1.municipio, tb1.cabe_correg, tb3.nombre_tecnico
from base tb1, asignacion_tpo tb2, tecnicos tb3
where tb1.serial_tpo=tb2.serial_tpo and tb2.codigo_tenico=tb3.codigo_tecnico and tb1.estado_os='EO004'

group by tb1.num_os order by Antiguedad desc,tb1.municipio";
$i=0;

$consula=mysqli_query($mysqli,$sqlPro);

while($tpo=mysqli_fetch_assoc($consula)){

	$arrayq[$i]=$tpo;
    $i++;
  }
  
  echo json_encode($arrayq);
  

  mysqli_close($mysqli);


?>