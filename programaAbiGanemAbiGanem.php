<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/*Abi Ganem, Marcos,FAI-2292,TDW,marcos.abi@est.fi.uncoma.edu.ar,MarcosAbiG*/
/*Abi Ganem, Alejo, FAI-3440, TWD, alejo.abi@est.fi.uncoma.edu.ar,AlejoAbiG3*/

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "FRESA", "COMER", "LOCOS", "FOCOS", "HUESO" 
    ];

    return ($coleccionPalabras);
}

/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/

/**3) Esta función muestra en pantalla las opciones del menú 
*@return $num int
*/
Function seleccionarOpcion (){
    // booleano $bandera 
    $num = 0;
    $bandera = true;
    While( $bandera==true){
    echo 
    "1) Jugar al Wordix con una palabra elegida \n
    2) Jugar al Wordix con una palabra aleatoria \n
    3) Mostrar una partida \n
    4) Mostrar la primer partida ganadora \n
    5) Mostrar resumen de Jugador \n
    6) Mostrar listado de partidas ordenadas por jugador y por palabra   \n
    7) Agregar una palabra de 5 letras a Wordix  \n
    8) Salir \n 
    Elija el número de la opción:  \n ";
        $num = trim(fgets(STDIN));
if ($num ==  1 || $num ==  2 || $num ==  3 || $num ==  4 || $num ==  5 || $num ==  6 || $num ==  7 || $num ==  8){
    $bandera = false;
}
}
    Return $num ;
}