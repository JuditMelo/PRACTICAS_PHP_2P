<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30</title>
</head>
<body>
<center>
        <header>
            <h1><mark>INGRESAR 4 NOTAS Y OBTENER PROMEDIO DE LAS 3 MEJORES</mark></h1>
</header>
<main>
    <section>
        <form action="" method="POST">
        <label for ="nota1">NUMERO 1:</label>
    <input type="number" id="nota1" name="nota1"><br><br>
    <label for ="nota2">NUMERO 2:</label>
    <input type="number" id="nota2" name="nota2"><br><br>
    <label for ="nota3">NUMERO 3:</label>
    <input type="number" id="nota3" name="nota3"><br><br>
    <label for ="nota4">NUMERO 4:</label>
    <input type="number" id="nota4" name="nota4"><br><br>
    <button type="NUM"> ENVIAR </button><br>
</form>
<?php
 if($_SERVER["REQUEST_METHOD"]=='POST'){
       //DATOS DE ENTRADA 
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];
    $nota4=$_POST['nota4'];

    //PROCESO
    //ORDENAR LAS NOTAS DE MAYOR A MENOR
    $notas= array($nota1, $nota2, $nota3, $nota4);
    rsort($notas);//ORDENAR DE MAYOR A MENOR

    //CALCULAR EL PROMEDIO DE LAS 3 MEJORES NOTAS
    $promedio=($notas[0]+$notas[1]+$notas[2])/3;
       

       //DATOS DE SALIDA 
    //MOSTRAR EL RESULTADO
    echo"<p>EL PROMEDIO DE LAS 3 MEJORES NOTAS ES:<br>" . number_format($promedio, 2) . "</p>";


//MENSAJE DE APROBADO O REPROBADO
    if($promedio >= 6){
        echo"<p>APROBADO</p>";

    }else{
        echo"<p>REPROBADO</p>";
    }

 }
?>
<br>
<a href="EJ21.php"> SIGUIENTE PRACTICA</a>
</section>
</main>
<footer>
   <br> <p>JUDIT DEL ANGEL MELO</p>
</footer>
</center>
</body>
</html>

<?php
/*MI OPINION DE ESTE CODIGO ELABORADO:
Este código permite al usuario ingresar cuatro notas y calcular el promedio de las tres mejores,
el proceso funciona cuando el usuario introduce cuatro notas en los campos correspondientes, al
enviar el formulario, el servidor procesa las notas mediante el código PHP,el código ordena las notas 
de mayor a menor utilizando la función rsort(),despues, calcula el promedio de las tres mejores notas,
el código muestra el promedio con dos decimales utilizando la función number_format(),finalmente,
indica si el usuario está aprobado o reprobado según si el promedio es mayor o igual a 6.*/ 
?>