<?php


// OPEREADORES DE COMPARACIÓN ======================================================


/*

    <   menor que
    >   mayor que
    <=  menor o o igual que
    >=  mayor o igual que
    ==  igual que
    === idéntico que
    !=  disntinto de 
    !== no idéntico a

*/

// CONDICIONALES SIMPLES ====================================================

// $edad = 17;


// if($edad >= 18){
//     echo 'Eres mayor de edad';
// }else{
//     echo 'Eres menor de edad';
// }

// if($edad < 18){
//     echo 'Eres menor de edad';
// }


// Comparando strings


// $nombre = 'ana';

// if($nombre === 'juan'){
//     echo 'Usuario autorizado';
// }else{
//     echo 'Usuario denegado';
// }

// // Diferencia ente igual e idéntico

$numUno = 1;
$numDos = '1';

// echo gettype($numUno) . '<br>';
// echo gettype($numDos);

// if($numUno == $numDos){
//     echo 'Los número son iguales';
// }else{
//     echo 'Los números son distintos';
// }

$numDec = 10.99;

// if(10.99 !== $numDec){
//     echo 'Los número son distintos';
// }
// else{
//     echo 'Los números son iguales';
// }


// OPEREDORES LÓGICOS

/*

    &&  ( y lógico )
    ||  ( o lógico )
    !   ( not )

*/


// CONDICIONALES MÚLTIPLES  ========================================

$sueldo = 110000;


// if($sueldo < 16000){
//     echo 'Sueldo bajo';
// }
// elseif($sueldo >= 16000 && $sueldo < 30000){
//     echo 'Sueldo medio';
// }
// elseif($sueldo >= 30000 && $sueldo <= 100000){
//     echo 'Sueldo alto';
// }
// else{
//     echo 'Sueldo muy alto';
// }


$dia = 'domingo';


switch($dia){
    case 'lunes':
        echo 'El día es lunes';
        break;
    case 'martes':
        echo 'El día es martes';
        break;

    case 'miercoles':
        echo 'El día es miércoles';
        break;

    case 'jueves':
        echo 'El día es jueves';
        break;

    case 'viernes':
        echo 'El día es viernes';
        break;
    // case 'sabado': 
    //     echo 'Fin de semana';
    //     break;

    // case 'domingo':
    //     echo 'Fin de semana';
    //     break;

    default:
        echo 'Fin de semana';
        break;
        

}



