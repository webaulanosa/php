<?php


// VARIABLES  ( en php no se declara explícitamente el tipo de la variable, se infiere implícitamente)
              //( Las variables en php son dinámicas puedeo reasignar valores a la misma variable)

              // Declarar una variable
             //   $num;

              // Inicializar una variable
             //   $num = 1;

              

              // Reasignación de valores para la variable
              //   $numero = 1;
             //   $numero = 2;

            //   echo $numero;

// TIPOS DE VARIABLES

// a ) VARIABLES DE TIPO ESCALAR

// Variables de tipo cadena de texto (string) =======================================
// $nombre = 'Ana';
// echo gettype($nombre);


// Variables de tipo entero (integer - int) =========================================
// $numero = 10;
// echo gettype($numero);


// Variables de tipo decimal (double) ================================================
// $numeroDecimal = 10.5;
// echo gettype($numeroDecimal);


// Variables de tipo valor de verdad (booleano  - boolean)
// $pagado = true;
// echo gettype($pagado);


// a ) VARIABLES DE TIPO COMPUESTO

// ARRAYS

// ARRAYS INDEXADOS  (Accedo a los elementos a partir de su índice)

//posiciones  0     1      2
$nombres = ['Ana','Lucas','Juan'];

//posiciones             0      1        2
// $otrosNombres = array('Luis','Pepe', 'Bernardo');


// echo $nombres[0] . '<br>';
// echo $nombres[1] . '<br>';

// echo '<br>';


// echo $otrosNombres[0] . '<br>';
// echo $otrosNombres[1] . '<br>';


// ARRAYS ASOCIATIVOS  ( par clave - valor ; key - value; Accedo a los elementos a partir de su clave)

// $cliente = [
//     'nombre' => 'Pepe',
//     'apellidoUno' => 'López',
//     'apellidoDos' => 'Pérez',
//     'email' => 'pepe@es.es'
// ];

// $otroCliente =  array(
//     'nombre' => 'Luis',
//     'apellidoUno' => 'Gómez',
//     'apellidoDos' => 'Garrido',
//     'email' => 'luis@es.es'
// );

// echo $cliente['nombre'] . '<br>';
// echo $cliente['apellidoUno'];

// echo '<br>';
// echo '<br>';

// echo $otroCliente['nombre'] . '<br>';
// echo $otroCliente['email'] . '<br>';


// ARRAYS MULTIDIMENSIONALES

$clientes = [
    $clienteUno = [
        'nombre' => 'Pepe',
        'email' => 'pepe@es.es'
    ],

    $clienteDos = [
        'nombre' => 'Juan',
        'email' => 'juan@es.es'
    ],

];

// * Para acceder a los valores necesito un bucle




// DIFERENCIAS ENTRE COMILLAS SIMPLES Y DOBLES

// las comillas simples no son capaces de interpretar el valor de las variables

// $email = 'pepe@es.es';

// echo '<h1>$email</h1>';
// echo "<h1>$email</h1>";








