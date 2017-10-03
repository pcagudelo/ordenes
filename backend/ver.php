<?php
include("./conexion.php");


$sql1="select cod_usuario, clave from usuarios where cod_usuario='CODEN006' and clave=MD5('clave')";
$consulta=mysqli_query($mysqli,$sql1);
if($consulta){

    if(mysqli_num_rows($consulta)>0){

        echo "1";
        session_start();
        $_SESSION["usuario"]='CODEN006';
        echo $_SESSION["usuario"];

    }
    else {echo "Denegado";};

    
}

else {
    echo "error en consulta".$consulta;
}










?>