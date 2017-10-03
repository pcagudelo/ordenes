
<!DOCTYPE html>
  <html>
    <head>
   
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="./css/tema.css">
       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/uploadIda.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="grey lighten-5">
  

    <div id="navegacion" class="blue">
      <nav class="fixed">
        <div class="nav-wrapper blue">

        
       
          <ul>
         
            <li><a href="./vistas/programacion.html" id="programa">Programacion</a></li>
         
            <li><a href="./vistas/reportes.html" id="reportes">Reportes</a></li>
          </ul>
          <ul class="right">
            <li class="active"> <a class="right padding"><?php session_start(); echo  $_SESSION["usuario"]?></a></li>
          </ul>
        </div>   
      </nav>
    </div>



    <div id="contenido">    
    </div>


    <script>      
    $("a").click((evento)=>{  
      let ruta=evento.target.attributes.href.nodeValue;
      $("#contenido").load(ruta);
      evento.preventDefault();
    });
    </script>
    </body>
  </html>