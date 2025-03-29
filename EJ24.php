<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 24</title>
</head>
<body>
<center>
<header>
<h1><mark>ES PAR O INPAR</mark></h1>
<header>
    <main>
        <section>

        <form action=""method="POST">
        <label for="numero">INGRESA UN NUMERO:</label>
        <input type="number"  id="numero" name="numero"><br><br>
       <button type="submit">ENVIAR </button>
</form>  
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
     //DATOS DE ENTRADA 
    $numero = $_POST['numero'];
     //PROCCESO
    if($numero % 2 == 0){
        $mensaje="<br>EL NUMERO<br>" . $numero. "<br>ES  PAR";
}else{

    $mensaje="<br>EL NUMERO<br>". $numero. "<br>ES IMPAR";
}

 //DATOS DE SALIDA
echo"<br> $mensaje<br>" ;
}
?>
<br><a href="EJ25.php">SIGUIENTE PRACTICA</a>

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
Este codigo se utiliza para determinar si un número ingresado por el usuario es par o impar,funciona mediante un formulario 
que envía el número al servidor, donde se utiliza el operador módulo (%) para verificar si el resto de la division(%) del numero 
entre 2 es 0,el codigo PHP mostrara un mensaje de si lo es ,el número es par, de lo contrario, se muestra un mensaje indicando que el numero
es impar,este codigo es importante porque nos ayuda a entender el concepto de números pares e impares, desarrollando  habilidades en programación,
específicamente en PHP, puede ser utilizada como base para otras prácticas más complejas, sin embargo, es una herramienta útil para la
resolución de problemas matemáticos y lógicos.*/
?>
