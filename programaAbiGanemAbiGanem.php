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
//----------------------------------------------------------------------------------------------------------------------
/**2)Esta función inicializa el arreglo $coleccionPartidas
* @Return $coleccionPartidas
*/
Function cargarPartidas(){
    $coleccionPartidas [0] = [ "palabraWordix" => "QUESO" , "jugador" => "majo", "intentos"=>0 , "puntaje"=> 0];
    $coleccionPartidas [1] = [ "palabraWordix" => "MUJER" , "jugador" => "sofi", "intentos"=>2 , "puntaje"=> 1];
    $coleccionPartidas [2] = [ "palabraWordix" => "CASAS" , "jugador" => "majo", "intentos"=>4 , "puntaje"=> 2];
    $coleccionPartidas [3] = [ "palabraWordix" => "PISOS" , "jugador" => "kata", "intentos"=>4 , "puntaje"=> 3];
    $coleccionPartidas [4] = [ "palabraWordix" => "RASGO" , "jugador" => "juan", "intentos"=>4 , "puntaje"=> 7];
    $coleccionPartidas [5] = [ "palabraWordix" => "GATOS" , "jugador" => "dali", "intentos"=>2 , "puntaje"=> 8];
    $coleccionPartidas [6] = [ "palabraWordix" => "VERDE" , "jugador" => "kata", "intentos"=>8 , "puntaje"=> 1];
    $coleccionPartidas [7] = [ "palabraWordix" => "MUJER" , "jugador" => "fern", "intentos"=>1 , "puntaje"=> 2];
    $coleccionPartidas [8] = [ "palabraWordix" => "NAVES" , "jugador" => "elsa", "intentos"=>0 , "puntaje"=> 0];
    $coleccionPartidas [9] = [ "palabraWordix" => "YUYOS" , "jugador" => "mati", "intentos"=>12 , "puntaje"=> 3];
    Return $coleccionPartidas;
}
/**3) Esta función muestra en pantalla las opciones del menú 
*@return $num int
*/
Function seleccionarOpcion (){
    // booleano $bandera 
    $num = 0;
    $bandera = true;
    echo"*****************************************************************\n";
    echo "1) Jugar al Wordix con una palabra elegida \n";
    echo  "2) Jugar al Wordix con una palabra aleatoria \n";
    echo    "3) Mostrar una partida \n";
    echo    "4) Mostrar la primer partida ganadora \n";
    echo    "5) Mostrar resumen de Jugador \n";
    echo    "6) Mostrar listado de partidas ordenadas por jugador y por palabra \n";
    echo    "7) Agregar una palabra de 5 letras a Wordix  \n";
    echo    "8) Salir \n" ;
    echo"*****************************************************************\n";    
    echo "Elija el número de la opción: ";
    $num = trim(fgets(STDIN));
    While($bandera==true){
        if ($num ==  1 || $num ==  2 || $num ==  3 || $num ==  4 || $num ==  5 || $num ==  6 || $num ==  7 || $num ==  8){
            $bandera = false;
        }else{
            echo"Ingrese un numero del 1 al 8:";
            $num = trim(fgets(STDIN));
}
}
    Return $num ;
}
/**
 *4)  Funcion que permite ingresar una palabra de 5 letras y retorna la palabra, en caso de que se ingrese de que no sean 5 letras 
 *se volvera a pedir hasta que se cumpla, retorna la palabra
 * @return string
 */
function leerPalabra5Letras()
{
    //string $palabra
    echo "Ingrese una palabra de 5 letras: ";
    $palabra = trim(fgets(STDIN));
    $palabra  = strtoupper($palabra);

    while ((strlen($palabra) != 5)) {
        echo "Debe ingresar una palabra de 5 letras:";
        $palabra = strtoupper(trim(fgets(STDIN)));
    }
    return $palabra;
}
/**
 *  5)Permite ingresar un numero entre un rango de valores ya sea para jugar o mostrar un partida y retorna el numero si es 
 * valido entre ese rango
 * @param int $min
 * @param int $max
 * @return int
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    echo "Ingrese el ";
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}