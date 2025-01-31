<?php include 'log/header.php'?>
<script src="js/js.js"></script>


<div style="border: 2px solid black; margin-top:20px;height:700px;background-color:grey"class="container" >




<div
    class="container"
    style="margin-top: 50px"
>

<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
</svg>


<h2 style="margin-left:200px;color:blue;margin-top:-50px">NUEVOS INGRESOS</h2>


<form action="registro.php" method="post">


<div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input
        type="date"
        class="form-control"
        name="fecha"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 200px;float:right"
    />
    
</div>

<div class="mb-3">
    <label for="" class="form-label">Nombre y Apellido</label>
    <input
        type="text"
        class="form-control"
        name="nombre"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 300px;"
    />
    
</div>

<div class="mb-3" style="margin-top: -107px;">
    <label for="" class="form-label" style="margin-left:380px;">Identificacion</label>
    <input
        type="text"
        class="form-control"
        name="identificacion"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 300px;float:right"
    />
    
</div>

<br>


<div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input
        type="text"
        class="form-control"
        name="direccion"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 300px;"
    />
    
</div>

<br>

<div class="mb-3" style="margin-top: -107px;">
    <label for="" class="form-label" style="margin-left:380px;">Telefono</label>
    <input
        type="text"
        class="form-control"
        name="telefono"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 200px;float:right"
    />
    
</div>


<br>




<div class="mb-3">
    <label for="" class="form-label">Grado de Estudio</label>
    <input
        type="text"
        class="form-control"
        name="grado"
        id=""
        aria-describedby="helpId"
        placeholder=""
        style="width: 600px;"
    />
    
</div>

<button type="submit" class="btn btn-danger" onclick="registrado()">Registrar</button>
<button type="reset" class="btn btn-danger" style="float: right;">Borrar</button>









</form>


</div>
</div>