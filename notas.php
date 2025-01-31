<?php include 'conect.php'?>


<?php 

mysqli_query($conexion,"INSERT INTO notas(participante,identificacion,nota) VALUES 



('$_REQUEST[participante]','$_REQUEST[identificacion]','$_REQUEST[nota]')")



or die("Problema en el select" . mysqli_error($conexion));
mysqli_close($conexion);



header('Location:evaluacion1.php');

?>