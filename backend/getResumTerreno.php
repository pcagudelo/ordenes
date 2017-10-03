<?php
include("./conexion.php");

$sqlPro=" select tb2.zona, tb1.fecha_asignacion as FechaSalidaTerreno , tb2.nombre_tecnico,count(base.num_os) as cantidad, sum(tipo_os.valor_os) as Valor from asignacion_tpo tb1 left join tecnicos tb2  on tb1.codigo_tenico= tb2.codigo_tecnico
left join base on base.serial_tpo= tb1.serial_tpo and base.fecha_tratamiento= tb1.fecha_asignacion
left join tipo_os on tipo_os.cod_tipo_os= base.tipo_os
group by tb2.nombre_tecnico 
order by FechaSalidaTerreno desc, zona desc";
$i=0;

$consula=mysqli_query($mysqli,$sqlPro);

while($tpo=mysqli_fetch_assoc($consula)){

	$arrayq[$i]=$tpo;
    $i++;
  }
  
  echo json_encode($arrayq);
  

  mysqli_close($mysqli);


?>