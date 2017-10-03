<?php 
session_start();
include "./backend/conexion.php";
$sql2=" insert ignore into base (num_os,nic,nis,estado_os,tipo_os,fecha_estimada_resol,fecha_tratamiento,municipio,cabe_correg,barrio,serial_tpo,codigo_usuario)
select tb.num_orden,tb.nic,tb.nis,tb.est_os,tb.tip_os,tb.f_estm_res,tb.f_puest_trat,tb.nom_munic,tb.Cab_Mun_Correg,tb.Urb_Barrio,tb.Id_Serial_TP, '".$_SESSION['usuario'].
"' from archivo_ida tb";

echo $sql2;

//mysqli_query($mysqli,$sql2);

<?php
include "./sesion.php";
include "./conexion.php";
$arrayq= array();
$i=0;

$sql="select * from tecnicos";
$consula=mysqli_query($mysqli,$sql);

while($tpo=mysqli_fetch_assoc($consula)){

	$arrayq[$i]=$tpo;
    $i++;
  }
  
  echo json_encode($arrayq);
  

  mysqli_close($mysqli);
  
  
?>