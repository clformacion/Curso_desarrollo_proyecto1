<?php include 'log/header2.php'?>
<script src="js/js.js"></script>




<br>

<h5 style="text-align: center;color:white">(IFCD0110) CONFECCIÓN Y PUBLICACIÓN DE PÁGINAS WEB</h5>
<div
    class="container"
    style="border: 2px solid black; background-color:white"
>
 <br>
<div
    class="table-responsive"
>
    <table
        class="table table-secondary"
    >
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">MODULOS</th>
                <th scope="col" style="text-align: center;">HORAS MODULOS</th>
                <th scope="col" style="text-align: center;">NOTA PARCIAL</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table table-primary">
                <td scope="row">MF0950_2: Construcción de páginas web</td>
                <td>210 horas</td>
                <td ><p id="demo1" style="text-align: right;"></p></td>
            </tr>

            <tr class="">
                <td scope="row" >MF0951_2: Integración de componentes software en páginas web</td>
                <td>180 horas</td>
                <td><p id="demo2" style="text-align: right;"></p></td>
            </tr>

            <tr class="table table-primary">
                <td scope="row" >MF0952_2: Publicación de páginas web </td>
                <td >90 horas</td>
                <td ><p id="demo3" style="text-align: right;"></p></td>
            </tr>


        </tbody>
    </table>
    <h5>NOTA FINAL:<h3 id="demo"><b></b></h3></h5>

    
    <button type="button" class="btn btn-primary" style="float: right;margin-top:-50px "  onclick="nota()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
  <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
</svg>CALCULAR</button>

</div>

</div>


<form action="notas.php" method="post">

<div
    class="container"
    style="border: 2px solid black; background-color:white; margin-top:20px"
>
  <h5 style="text-align: center;">Guardar Notas</h5>
<div class="mb-3">
    <label for="" class="form-label"></label>
    <input
        type="text"
        class="form-control"
        name="participante"
        id=""
        aria-describedby="helpId"
        placeholder="participante"
        style="width:200px;border: 2px solid black"
    />
    
</div>

<div class="mb-3" >
    <label for="" class="form-label" style=" margin-top:-40px; float:right; margin-right:320px"></label>
    <input
        type="text"
        class="form-control"
        name="identificacion"
        id=""
        aria-describedby="helpId"
        placeholder="Identificacion"
        style="width: 150px; margin-left:300px;margin-top:-70px;border: 2px solid black"
    />
    
</div>

<div class="mb-3">
    <label for="" class="form-label" ></label>
    <input
        type="text"
        class="form-control"
        name="nota"
        id=""
        aria-describedby="helpId"
        placeholder="nota"
         style="width: 80px; margin-left:550px;margin-top:-120px;border: 2px solid black"
    />
    
</div>

<div style="margin-left: 150px;">
<button type="submit" class="btn btn-primary" onclick="aviso()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16">
  <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/>
  <path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/>
</svg>Guardar</button>
<button type="reset" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg>Borrar</button>
<button type="reset" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-dash" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5.5 6.5A.5.5 0 0 1 6 6h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
</svg>Consultar</button>

</div>









<br>
</div>









</form>
<br><br><br><br><br>