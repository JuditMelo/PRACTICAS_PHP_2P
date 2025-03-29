<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 28</title>
</head>
<body>
    <center>
        <header>
            <h1><mark>MAYOR DE EDAD O MENOR DE EDAD</mark></h1>
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
    if($numero >= 18){
        $mensaje="<br>SU EDAD ES:<br>" . $numero . "<br>ES MAYOR DE EDAD";
   
    }else if($numero < 18 ){
        $mensaje="<br>SU EDAD ES:<br>" . $numero . "<br>ES MENOR DE EDAD";
    }else{
        $mensaje="<br>$numero INGRESA NUMERO VALIDO<br>";
    }
       //DATOS DE SALIDA
echo $mensaje;
}
?>

<br><a href="EJ29.php"> SIGUIENTE PRACTICA</a>
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
En este código permite al usuario ingresar su edad y, según la edad ingresada, muestra un mensaje indicando 
si el usuario es mayor o menor de edad, el funcionamiento de este proceso funciona cuando el usuario ingresa su edad en un campo de texto 
correspondiente, al momento de  hacer clic en el botón "ENVIAR", el formulario se envía al servidor,el servidor ejecuta el código PHP que
procesa la edad ingresada, el código PHP determina si la edad es mayor o menor de 18 años,si la edad es mayor o igual a 18 años, muestra un
mensaje indicando que el usuario es mayor de edad, de lo contrario,si la edad es menor de 18 años, muestra un mensaje indicando que el usuario 
es menor de edad.*/ 
?>