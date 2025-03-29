<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 22</title>
</head>
<body>
    <center>
        <header>
    <h1><mark>DETERMINAR SI ES VOCAL</mark></h1>
</header>
<main>
    <section>
    <form action="" method="POST">
    <label for ="letra">LETRA:</label>
    <input type="text" id="letra" name="letra" maxlength=""><br><br>
    <button type="submit"> ENVIAR </button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){

    //DATOS DE ENTRADA 
   $char= $_POST['letra'];

    //PROCESO
if($char == 'a'|| $char == 'A'){
    $resultado='ES VOCAL';
}else if($char == 'e'|| $char == 'E'){
        $resultado='ES VOCAL';
}else if($char == 'i'|| $char == 'I'){
    $resultado='ES VOCAL';
 } else if($char == 'o'|| $char == 'O'){
        $resultado='ES VOCAL';
 }else if($char == 'u'|| $char == 'U'){
            $resultado='ES VOCAL';
 }else{
    $resultado ='NO ES VOCAL';

    //DATOS DE SALIDA
 }echo"<br>LA LETRA INGRESADA $resultado <br>"; 
 } 
 ?>
 
<br><a href="EJ23.php">SIGUIENTE PRACTICA</a>

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
Este codigo permite al usuario ingresar una letra y determinar si es vocal o no, asi que el usuario ingresa la letra
en el campo de texto correspondiente y envia el formulario mediante el metodo POST, luego, el codigo PHP procesa los datos
y asi compara la letra ingresada con las vocales (a,e,i,o,u)en mayusculas y minusculas.Finalmente, muestra el resultado en la
pantalla, indicando si la letra es vocal o no.*/
?>
