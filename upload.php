<?php
session_start();
include "./backend/conexion.php";
    $return="enviado";
    $upload_folder ='C:/wamp/www/SistemaSeguimiento/arch';
    $nombre_archivo = $_FILES['arch_ida']['name'];
    $tipo_archivo = $_FILES['arch_ida']['type'];
    $tamano_archivo = $_FILES['arch_ida']['size'];
    $tmp_archivo = $_FILES['arch_ida']['tmp_name'];
    $archivador = $upload_folder . '/' . $nombre_archivo;

        if (!move_uploaded_file($tmp_archivo, $archivador)) {

            $return = "error";
            
            
        }
        else{

            $sql="LOAD DATA INFILE 'C:/wamp/www/SistemaSeguimiento/arch/$nombre_archivo' into table archivo_ida  fields terminated by '|' IGNORE 1 LINES";
            $load=mysqli_query($mysqli,$sql); 
            if(!$load){
                $return= "error";
            }
            else {
              // echo mysqli_affected_rows($mysqli);
              
              $sql2=" insert ignore into base (num_os,nic,nis,estado_os,tipo_os,fecha_estimada_resol,fecha_tratamiento,municipio,cabe_correg,barrio,serial_tpo,codigo_usuario)
              select tb.num_orden,tb.nic,tb.nis,tb.est_os,tb.tip_os,tb.f_estm_res,tb.f_uce,tb.nom_munic,tb.Cab_Mun_Correg,tb.Urb_Barrio,tb.Id_Serial_TP, '".$_SESSION['usuario'].
              "' from archivo_ida tb";
             mysqli_query($mysqli,$sql2);
             //mysqli_query($mysqli,"delete from archivo_ida");
             mysqli_close($mysqli);

            }
            
    
        }

    echo $return;
   
       
   

    




?>