<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 25</title>
</head>
<body>
<center>
<header>
<h1><mark>DOBLE Y TRIPLE</mark></h1>
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
//PROCEASO
    if($numero % 2 == 0){
$mensaje= "<br>EL DOBLE DEL NUMERO<br>" . $numero . "<br>ES:<br>" . ($numero *2);
    }else{
        $mensaje= "<br>EL TRIPE  DEL NUMERO<br>" . $numero . "<br>ES:<br>" . ($numero *3);   
    }
     //DATOS DE SALIDA
    echo"<br> $mensaje<br>" ;
    }
  
?>
<br><a href="EJE26.php">SIGUIENTE PRACTICA</a>

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
El código calcula el doble o triple de un número ingresado por el usuario, dependiendo de si el número es par o impar,
funciona mediante un formulario que envía el número al servidor, donde se utiliza una condición para determinar si el número
es par o impar. Si es par, el codigo PHP mostrara el doble del numero, de lo contrario, si el numero es impar, se calcula el
triple.*/
?>