<?php
include "./sesion.php";
include "./conexion.php";

$relacionAsignacion=$_POST['relacionAsignacion'];
$sql="insert into asignacion_tpo(serial_tpo,codigo_tenico,fecha_asignacion,fecha_creacion) ";
$estado="error";


foreach ($relacionAsignacion as $key=> $array) {
    
        $consul=$sql."values('".$array['serie_tpo']."',".$array['cod_tecnico'].",'".$array['fecha_asig']."',NOW())";
    
             
                if(mysqli_query($mysqli,$consul)){
                    $estado="save";
                }
                   

}

echo $estado;
mysqli_close($mysqli);

?>