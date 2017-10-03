<?php
include("./conexion.php");
$usuario=$_POST["usuario"];
$clave=$_POST['clave'];

//$usuario="CODEN006";
//$clave="clave";

$sql1="select cod_usuario, clave from usuarios where cod_usuario='$usuario' and clave=MD5('$clave')";
$consulta=mysqli_query($mysqli,$sql1);
if($consulta){

    if(mysqli_num_rows($consulta)>0){

        echo "true";
        session_start();
        $_SESSION["usuario"]=$usuario;
       
    }
    else {echo "false";};
  
    
}

else {
    echo "error en consulta".$consulta;
    mysqli_close($mysqli);
}











?>