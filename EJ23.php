<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 23</title>
</head>
<body>
<center>
        <header>
    <h1><mark> DETERMINAR SI UN NUMERO ES MULTIPLO DE 3 Y 5</mark></h1>
</header>
<main>
    <section>
    <form action="" method="POST">
    <label for ="numero">INGRESA EL NUMERO:</label>
    <input type="number" id="numero" name="numero"><br><br>
    <button type="submit"> ENVIAR </button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
      //DATOS DE ENTRADA 
    $numer= $_POST['numero'];
   //PROCESO
    if($numer % 3 == 0 && $numer % 5 == 0){
        $mensaje="<br>EL NUMERO<br>" . $numer . "<br>ES MULTIPLO DE 3 Y 5";
    }else{
        $mensaje="<br>EL NUMERO<br>" . $numer . "<br>NO ES MULTIPLO DE 3 Y 5";
    }
    //DATOS DE SALIDA
echo $mensaje;
    }
?>
 <br>  
 <a href="EJ24.php"> SIGUIENTE PRACTICA</a>
</main>
</section>
<footer>
<p>JUDIT DEL ANGEL MELO</p>
</footer>
</center>
</body>
</html>


<?php
/*MI OPINION DE ESTE CODIGO ELABORADO:
Este código se utiliza para determinar si un número ingresado por el usuario es multiplo de 3 y 5,funciona
cuando el usuario introduce un número en el formulario,asi el  formulario se envía al servidor,posterirmente,
el código PHP verifica si el número cumple con la condición, utilizando el operador módulo(%),si el número es divisible(%) osea
si es multiplo de 3 y 5, el codigo muestra un mensaje de confirmación de que el numero si es multiplo de 3 y 5,de lo contrario,
muestra un mensaje de negación de que el numero no es multiplo de 3 y 5.*/
?>