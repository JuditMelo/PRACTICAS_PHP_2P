<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 21</title>
</head>
<body>
    
<center>

<header>
    <h1><mark>NUMERO MAYOR DE 3 NUMEROS </mark></h1>
</header>
<main>
    <section>
    <form action=""method="POST">
        <label for="Numero1">INGRESA EL NUMERO 1:</label>
        <input type="number"  id="Numero1" name="Numero1"><br><br>
        <label for="Numero2">INGRESA EL NUMERO 2:</label>
        <input type="number"  id="Numero2" name="Numero2"><br><br>
        <label for="Numero3">INGRESA EL NUMERO 3:</label>
        <input type="number"  id="Numero3" name="Numero3"><br><br>
       <button type="submit">ENVIAR </button>

</form>  

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 
    //DATOS DE ENTRADA 
    $numero1 = $_POST['Numero1'];
    $numero2 = $_POST['Numero2'];
    $numero3 = $_POST['Numero3'];
   
    //PROCESO
if($numero1 > $numero2 && $numero1 > $numero3){
    $mayor=$numero1;
}else if($numero2 > $numero1 && $numero2 > $numero3) {
$mayor=$numero2;
}else{
    $mayor=$numero3;
}

//DATOS DE SALIDA
echo"<br>EL NUMERO $mayor ES EL MAYOR DE LOS 3 NUMEROS<br>";
}
?>

<br><a href="EJ22.php">SIGUIENTE PRACTICA</a>

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
Esta práctica consiste en un programa que solicita al usuario que ingrese tres números en campos de texto específicos,
una vez que el usuario envía el formulario, el código PHP se ejecuta en el servidor y procesa los datos ingresados,el 
código PHP realiza una comparación entre los tres números ingresados y determina cuál es el mayor, luego, muestra el 
resultado en la pantalla, indicando cuál es el número mayor,el codigo es fácil de entender y seguir, y la lógica utilizada
es clara y concisa, lo que facilita la comprensión del código,ademas de que es una excelente oportunidad para aplicar conceptos 
básicos de programación, como la comparación de valores y la toma de decisiones, Sin embargo, se podrían mejorar aspectos como la 
validación de la entrada del usuario y agregar más funcionalidad.*/
?>