<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 27</title>
</head>
<body>
    <center>
    <header>
        <h1><mark>ECUACION DE PRIMER GRADO</mark></h1>
</header>
<main>
    <section>
    <form action="" method="post">
    <label for="a">INGRESA A </label>
    <input type="number" name="a" id="a"> <br><br>
    <label for="b">INGRESA B</label>
    <input type="number" name="b" id="b"> <br><br>
    <button type="submit">ENVIAR</button> <br><br>
  

<?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        //DATOS DE ENTRADA 
        if (isset($_POST['a'])&&($_POST['a'])) {

         $a = $_POST['a']; 
         $b = $_POST['b']; 

         //PROCESO

         // Verificar que 'a' no sea igual a 0
         if ($a == 0) {
              echo "La ecuación no es de primer grado ya que el coeficiente 'a' es 0.";
         } else {
         // Calcular el valor de X
         $x = -$b / $a;
         
         //DATOS DE SALIDA 
         // Mostrar el resultado
               echo "La solución de la ecuación {$a}X + ({$b}) = 0 es: X = $x";
            }


        }
    }
        ?>
        </form>
<br>  
<a href="EJ28.php"> SIGUIENTE PRACTICA</a>
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
Este codigo se utliza para que el usuario ingresa los coeficientes "a" y "b" de una ecuación de primer grado en los campos de texto
correspondientes,luego, al hacer clic en el botón "ENVIAR", el formulario se envía al servidor mediante el método POST, en  el servidor, 
se ejecuta el código PHP que procesa los datos enviados por el formulario, el  código PHP verifica si la ecuación es de primer grado,
es decir, si el coeficiente "a" es distinto de cero,y en el caso afirmativo, el código PHP calcula la solución de la ecuación utilizando
la fórmula X = -b/a, luego, muestra el resultado en la pantalla, indicando la solución de la ecuación, el código PHP muestra un mensaje de
error en la pantalla, indicando que la ecuación no es de primer grado.*/ 
?>



