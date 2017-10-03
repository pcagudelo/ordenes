
        

  <div class="col s12">
    <h5>Carga de Archivo Ida</h5>
    <form method="post" action="./upload.php" enctype="multipart/form-data" id="sendFile">
        <div class="file-field input-field">
            <div class="btn blue">
                <span>Ida</span>
                <input type="file" name="arch_ida" id="arch_ida">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>

        <a class="waves-effect waves-light btn blue" id="publish"><i class="material-icons">publish</i></a>
    </form>
</div>


<div class="col s12">
    <div id="enviado">
        <p>El archivo ha sido guardado Satisfactoriamente</p>
    </div>

    <div id="error">
        <p>Ocurrio un problema al enviar el archivo</p>
    </div>
</div>


<div clas="col s12">
    <h5>Relacion Tecnicos</h5>

    <div class="input-field col s12">
        <select id="tecnico">
</select>
        <label>Selecionar tecnico</label>
    </div>

    <div class="input-field col s12">
        <select id="tpoSelect">              
</select>
        <label>Seleccionar TPO</label>
    </div>
    <a id="btnAsignacion" class="waves-effect waves-light btn blue col s1">
<i class=" material-icons">assignment_ind</i>
</a>
</div>





<div class="col s12">
    <h5>Programacion Armada</h5>
    <ul class="collection with-header" id="tecSelcionados">
    </ul>
    <a class="waves-effect waves-light btn blue" id="enviarAsignacion" href="#">
        <i class="material-icons">save</i>
    </a>
</div>