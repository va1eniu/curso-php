<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

    <form action="prueba.php" method="post">
        <h1>calculadora php</h1>
        <input type="text" name="numero1" value="" autocomplete="on">
        <input type="text" name="numero2" value="" autocomplete="on">

        <input type="submit" name="" value="submit" autocomplete="on">

    </form>

    <?php 

    /* para que el error de no rellenar los inputs aun no salga */
    error_reporting (0);
   /*  <!-- el isset es para trabajar con variables -->
    <!-- el is_numeric es para determinar si es un numero o no --> */

    if(isset ($_GET['numero1'])&& isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']) );{

        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        /* este get lo podemos utilizar para llamar a las variables globales */

        echo $numero1 + $numero2;

    }

    ?>
    
</body>
</html>