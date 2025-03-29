<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 29</title>
</head>
<body>
<center>
        <header>
            <h1><mark>DEVOLVER EL DOBLE SI ES POSITIVO, TRIPLE SI ES NEGATIVO</mark></h1>
</header>
<main>
    <section>
        <form action="" method="POST">
        <label for ="numero">INGRESA EL NUMERO:</label>
    <input type="number" id="numero" name="numero"><br><br>
    <button type="submit"> ENVIAR </button><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
       //DATOS DE ENTRADA 
    $numero=$_POST['numero'];
    //PROCESO
    if($numero > 0){
        $mensaje="<br>EL DOBLE DEL NUMERO ES POSITIVO<br>" . $numero."<br>ES:<br>" . ($numero * 2);
    }else if($numero < 0 ){
    $mensaje="<br>EL TRIPLE DEL NUMERO ES NEGATIVO<br>" . $numero."<br>ES:<br>" . ($numero * 3);
    }else{
        $mensaje="<br>NUMERO 0 ES NEUTRO<br>" . $numero."<br>ES:<br>" . ($numero);
    }
       //DATOS DE SALIDA
    echo "<br>$mensaje<br>";
}
?>
<br>
<a href="EJE30.php"> SIGUIENTE PRACTICA</a>
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
Este código permite al usuario ingresar un número y, según el signo del número (positivo, negativo o neutro),
muestra un resultado específico.Funciona cuando el usuario ingresa o introduce un numero en un campo correspondiente,
al enviar el formulario, el servidor procesa el número mediante código PHP,el código determina el signo del número 
(positivo, negativo o cero),si el número es positivo, muestra el doble del número,si el número es negativo, muestra 
el triple del número,si el número es neutro (0),muestra el mismo original.*/ 
?>



