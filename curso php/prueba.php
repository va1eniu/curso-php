<?php

/* print 'hola mundo';
echo 'echo es para que se pueda poner mas texto', 'asi';

//echo es mejor

//para variables se incia con el signo de dolar

$nombre = 'carlos';

echo $nombre;


// constantes
define('curso','php');
echo curso;



//condicionales 

//if

$numero =1;
$numero2 = 10;

if ($numero > $numero2) {
    echo 'curso de php';
}
else {
    echo "hola $numero";
}

//case

$curso = 'jsa';
switch ($curso) {
    case 'php':
        echo 'lunes y martes';
        break;
    case 'js':
            echo 'mañna';
            break;
    case 'c':
                echo 'domingo';
                break;
    
    default:
        echo 'esa mrd no sirve';
        break;
} */


//ciclos

//whule
/* 
$numero = 1;

while ($numero <= 10) {
    echo $numero;

    //esto es para incrementar el numero y que no entre en bucle
   $numero = $numero + 1;
}

//incrementar el numero hasta que llege a la condicion

//do while

$numero2 = 2;
do {
    echo $numero2;
    $numero2++;
} while ($numero2 <= 20);


//for 


for ($numero3=0; $numero3 < 11 ; $numero3++) { 
    echo $numero3;
} */


//arreglos, vectores, array

/* $diasSemana = array('lunes' ,'martes','miercoles', );

var_dump($diasSemana);


$cursos = array('python' , 'js' ,'html', 'php');

//contar elementos de un array

for ($i=0; $i < count($cursos); $i++) { 
    if ($cursos[$i] == 'js') {
        echo 'curso nose';
    }
}


$amigos =array(  'carlos ', 'bety', 'colon');

$posicion = count($amigos) -2;

echo $amigos[$posicion]; */

// ordenar orden alfobetico asort() orden alfabetico de a la z rsort()


//funciones rapidas con un array

// para dividir en subgrupos el array

/* $function = array_chunk($amigos,2);
echo $function; */

// slice para elminar elemnetos desde el punto deseado

/* $function = array_slice($amigos,2);
print_r($function); */


// para combinar dos arrays se usa array_merge($array1, $array2) asi de facil

//matricez

/* $matriz = array(
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(10,11,12,13,14,15)

);

echo $matriz[1][1]; */

//foreach

/* $futbol  = array('barcelona' => 'messi' , 'juventus' => 'cr7' , 'tottenham' => 'kane');
foreach ($futbol as $key => $value) {
    echo $key;
} */


//funciones

/* function estudiante($nombre = 'carlos' ,$apellido = 'zuluaga'){
   echo "el estudiante $nombre tiene apellido $apellido";
}

estudiante('carlos', 'zuluaga');


function suma($a, $b){
    $resultado = $a +  $b;
    echo $resultado;

}

suma(3, 4)
 */


//variable scope


/* $edad = 23;
function estudiantes()
{
    
    $edad = 24;
    echo $edad;
}

estudiantes();
echo $edad; */

//variables globales

/* $n1 = 6;
$n2 = 4;

function sumar (){
    $GLOBALS['s'] =  $GLOBALS['n1'] + $GLOBALS['n2'];
}

sumar();
echo $s; */


//aparece la carpeta 
/* echo $_SERVER['PHP_SELF']; */


//APARECE EL SERVER TIPO LOCALHOST
/* echo $_SERVER['SERVER_NAME']; */


//EL URL DEL SERVIDOR
/* echo $_SERVER['HTTP_REFERER']; */

/* $numero = $_GET['numero'];
echo "el numero es ".$numero; */


//Never use GET method if you have password or other sensitive information to be sent to the server.
//ya que get es un metodo publico 
//GET can't be used to send binary data, like images or word documents, to the server.
//The data sent by GET method can be accessed using QUERY_STRING environment variable.


/* <?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
      //$_PHP_SELF sirve para acceder al archivo de la raiz sin necesidad de escribir el nombre
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html> */


//$_POST basicamente para datos secretos como contraseñas y no tiene limite de data


/* <html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
   
   </body>
</html>
<?php
   if( $_POST["name"] || $_POST["age"] ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
        //preg match para verificar que no contenga esos paramentros no permitidos
         die ("invalid name and name should be alpha");
         //si se encunetra algun parametro no permitido la funcion die detiene la ejecucion de el programa y muestra ese escrito
      }
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
      
      exit();
      //Finalmente, se utiliza exit() para detener la ejecución del script.
   }
?> */




















?>