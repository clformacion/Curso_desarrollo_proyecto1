
<?php include 'conect.php'?>


<?php 

mysqli_query($conexion,"INSERT INTO inscripciones(fecha,nombre,identificacion,direccion,telefono,grado) VALUES 



('$_REQUEST[fecha]','$_REQUEST[nombre]','$_REQUEST[identificacion]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[grado]')")



or die("Problema en el select" . mysqli_error($conexion));
mysqli_close($conexion);



header('Location:inscripciones.php');

?>


