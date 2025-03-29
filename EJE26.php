<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 26</title>
</head>
<body>
    <center>
    <header>
        <h1><mark>DEVOLVER EN ORDEN ASCENDENTE</mark></h1>
</header>
    <main>
        <section>
            <form action="" method="POST">
            <label for ="numero1">NUMERO 1:</label>
    <input type="number" id="numero1" name="numero1"><br><br>
    <label for ="numero2">NUMERO 2:</label>
    <input type="number" id="numero2" name="numero2"><br><br>
    <label for ="numero3">NUMERO 3:</label>
    <input type="number" id="numero3" name="numero3"><br><br>
    <button type="NUM"> ENVIAR </button><br>
</form>
            <?php
            if($_SERVER["REQUEST_METHOD"]=='POST'){
               //DATOS DE ENTRADA 
                $numero1=$_POST['numero1'];
                $numero2=$_POST['numero2'];
                $numero3=$_POST['numero3'];
            
                //PROCESO
              if($numero1<$numero2 && $numero1<$numero3){
                $menor=$numero1;
              }else if($numero2<$numero1 && $numero2<$numero3){
              $menor=$numero2;
              }else{
            $menor=$numero3;
              }
              if($numero1>$numero2 && $numero1>$numero3){
                $mayor=$numero1;
            }else if($numero2>$numero1 && $numero2>$numero3){
$mayor=$numero2;
}else{
    $mayor=$numero3;
            }       
            $intermedio=($numero1+$numero2+$numero3)-($mayor+$menor); 
             //DATOS DE SALIDA
            echo"<br>NUMERO MAYOR ES:<br> $mayor <br>";
            echo"NUMERO MENOR ES:<br> $menor <br>";
            echo"RESULTADO INTERMEDIO:<br> $intermedio <br>"; 
            }

            
            ?>
<br><a href="EJE27.php">SIGUIENTE PRACTICA</a>

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
Este codigo sirve para ordenar tres numeros ingresados por el usuario en orden ascendente, determinando
el numero mayor, menor y el valor intermedio, funciona a traves de un formulario que envia los numeros 
al servidor, donde se ejecuta el codigo PHP que realiza las comparaciones y calculos necesarios para 
determinar el orden de los numeros,luego, muestra los resultado en la pantalla, indicando cual es el numero 
mayor, menor e intermedio.*/    
?>