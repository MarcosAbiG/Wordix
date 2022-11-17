<?php

/**1)Esta función inicializa el arreglo $coleccionPalabras
*@Return $coleccionPalabras
*/
Function cargarColeccionPalabras(){
$coleccionPalabras =[ "MUJER" , "QUESO" , "FUEGO" , "CASAS" , "RASGO" , "GATOS" , "HUEBO" , "TINTO" , "NAVES" , "VERDE" , "MELON" , "YUYOS" , "PIANO" ,  "PISOS" , "FRESA"];
Return $coleccionPalabras;
}

/**2)Esta función inicializa el arreglo $coleccionPartidas
* @Return $coleccionPartidas
*/
Function cargarPartidas(){
/*$coleccionPartidas [0] = [ "palabraWordix" => "QUESO" , "jugador" => "majo", "intentos"=>0 , "puntaje"=> 0];
$coleccionPartidas [1] = [ "palabraWordix" => "MUJER" , "jugador" => "sofi", "intentos"=>2 , "puntaje"=> 1];
$coleccionPartidas [2] = [ "palabraWordix" => "CASAS" , "jugador" => "majo", "intentos"=>4 , "puntaje"=> 2];
$coleccionPartidas [3] = [ "palabraWordix" => "PISOS" , "jugador" => "kata", "intentos"=>4 , "puntaje"=> 3];
$coleccionPartidas [4] = [ "palabraWordix" => "RASGO" , "jugador" => "juan", "intentos"=>4 , "puntaje"=> 7];
$coleccionPartidas [5] = [ "palabraWordix" => "GATOS" , "jugador" => "dali", "intentos"=>2 , "puntaje"=> 8];
$coleccionPartidas [6] = [ "palabraWordix" => "VERDE" , "jugador" => "kata", "intentos"=>8 , "puntaje"=> 1];
$coleccionPartidas [7] = [ "palabraWordix" => "MUJER" , "jugador" => "fern", "intentos"=>1 , "puntaje"=> 2];
$coleccionPartidas [8] = [ "palabraWordix" => "NAVES" , "jugador" => "elsa", "intentos"=>0 , "puntaje"=> 0];
$coleccionPartidas [9] = [ "palabraWordix" => "YUYOS" , "jugador" => "mati", "intentos"=>12 , "puntaje"=> 3];
Return $coleccionPartidas;*/
$coleccion = [];
$pa1 = ["palabraWordix" => "SUECO", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
$pa2 = ["palabraWordix" => "YUYOS", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
$pa3 = ["palabraWordix" => "HUEVO", "jugador" => "zrack", "intentos" => 3, "puntaje" => 9];
$pa4 = ["palabraWordix" => "TINTO", "jugador" => "cabrito", "intentos" => 4, "puntaje" => 8];
$pa5 = ["palabraWordix" => "RASGO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
$pa6 = ["palabraWordix" => "VERDE", "jugador" => "cabrito", "intentos" => 5, "puntaje" => 7];
$pa7 = ["palabraWordix" => "CASAS", "jugador" => "kleiton", "intentos" => 5, "puntaje" => 7];
$pa8 = ["palabraWordix" => "GOTAS", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
$pa9 = ["palabraWordix" => "ZORRO", "jugador" => "zrack", "intentos" => 4, "puntaje" => 8];
$pa10 = ["palabraWordix" => "GOTAS", "jugador" => "cabrito", "intentos" => 0, "puntaje" => 0];
$pa11 = ["palabraWordix" => "FUEGO", "jugador" => "cabrito", "intentos" => 2, "puntaje" => 10];
$pa12 = ["palabraWordix" => "TINTO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];

array_push($coleccion, $pa1, $pa2, $pa3, $pa4, $pa5, $pa6, $pa7, $pa8, $pa9, $pa10, $pa11, $pa12);
return $coleccion;

}
/**3) Esta función muestra en pantalla las opciones del menú 
*@return $num int
*/
Function seleccionarOpcion (){
    // booleano $bandera 
    $num = 0;
    $bandera = true;
    While( $bandera==true){
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
if ($num ==  1 || $num ==  2 || $num ==  3 || $num ==  4 || $num ==  5 || $num ==  6 || $num ==  7 || $num ==  8){
    $bandera = false;
}
}
    Return $num ;
}

/**
 *4)  Funcion que permite ingresar una palabra de 5 letras y retorna la palabra, en caso de que se ingrese de que no sean 5 letras se volvera a pedir
 * hasta que se cumpla, retorna la palabra
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
 *  5)Permite ingresar un numero entre un rango de valores ya sea para jugar o mostrar un partida y retorna el numero si es valido entre ese rango
 * @param int $min
 * @param int $max
 * @return int
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}
/*
 * 6)Permite ingresar un numero de partida y si el numero es valido muestra el resumen de esa partida jugada
 * @param array $coleccionPartidas
 */
function mostrarPartida ($coleccionPartidas, $numeroPartida) 
{
    echo"** \n";
    echo"Partida WORDIX " .$numeroPartida. ": palabra ".$coleccionPartidas[$numeroPartida]["palabraWordix"]. "\n";
    echo"Jugador: ".$coleccionPartidas[$numeroPartida]["jugador"];
    echo"\nPuntaje: " .$coleccionPartidas [$numeroPartida]["puntaje"];
    if ($coleccionPartidas[$numeroPartida]["intentos"] > 0){
        echo"\nIntento: Adivinó la palabra en " .$coleccionPartidas[$numeroPartida]["intentos"] ." intentos";
    } else {
        echo "\nIntento: No se adivinó la palabra";
    }
    echo"\n**";
}

/**
 * 7)Ingresa por parametros la coleccion de palabras jugables y una palabra nueva para que se pueda jugar
 * @param array $coleccionPalabras
 * @param string $palabraAgregada
 * @return array
 */
function agregarPalabra ($coleccionPalabras, $palabraAgregada){
    //int $i, $rango, $numeroPalabra
    $i = 0;
    $rango = count($coleccionPalabras);
    $esAgregable = true;
    while($coleccionPalabras[$i] != $palabraAgregada && $i < $rango - 1){
        $i = $i + 1;
    }
    if($coleccionPalabras[$i] == $palabraAgregada){
        $esAgregable = false;
    } 
    if($esAgregable == true){
    $numeroPalabra = count($coleccionPalabras); //numero de la nueva palabra
    $coleccionPalabras [$numeroPalabra] = $palabraAgregada;
    echo "\nLa palabra " .$coleccionPalabras[$numeroPalabra]. " fue agregada\n";
    } else {
        echo"La palabra ya existe\n";
    }
    return $coleccionPalabras; 
}
/**
 * 8)Ingresa una coleccion de partidas y un nombre de un jugador 
 * @param array $coleccionPartidas
 * @param string $nombreJugador
 * @return int 
 */
function indicePrimerPartida($coleccionPartidas,$nombreJugador){
    //int $i,$param
    $bandera=true;
    $i=0;
    $param=count($coleccionPartidas);
    $retorno=-1;
    while ($i<=$param-1&&$bandera=true){
        if($coleccionPartidas[$i]==$nombreJugador&&$coleccionPartidas[$i]["puntaje"]>0){
            $retorno=$i;
            $bandera=false;
        }
        
        $i=$i+1;
    }
    return $retorno;
}

/**
 * 10)Solicita nombre y retorna el mismo a minuscula 
 * @param string $nombreJugador
 * @return string 
 */
function nombreAMinuscula($nombreJugador){
    //Strin $nombreAMinuscula
    return $nombreMinuscula=strtolower($nombreJugador);
}
/**
 * 11) Mustra coleccion de partidas ordenadas
 * @param array $coleccionPartidas
 */
function datosPartidaJugador($coleccionPartidas){
    //
    
    print_r($coleccionPartidas);
}


//Prgrama main 
//a)
$coleccionPalabras=cargarColeccionPalabras();
//b)
$coleccionPartidas=cargarPartidas();
//c)
$opcion=seleccionarOpcion();
//d)
while($opcion!=8){
if($opcion==1){
    $palabra=leerPalabra5Letras();
}elseif($opcion==2){
    $palabra=$coleccionPalabras[array_rand($coleccionPalabras)];
}elseif($opcion==3){
    mostrarPartida($coleccionPartidas,$numeroPartida);
}elseif($opcion==4){
    $aux=indicePrimerPartida($coleccionPartidas,$nombreJugador);
    echo "Primer partida ganadora: ".$coleccionPartidas[$aux];
}elseif($opcion==5){

}elseif($opcion==6){
    datosPartidaJugador($coleccionPartidas);
}elseif($opcion==7){
    $palabraAgreg=leerPalabra5Letras();
    agregarPalabra($coleccionPalabras,$palabraAgreg);
}else{
    echo "Numero no valido";
}

$opcion=seleccionarOpcion();
}

/*e) La intruccion switch corresponde a la estructura de control alternativa. Funciona tomando en cuenta una variable y en base 
al valor de la misma toma diferentes opciones similar a un menu. 
*/

?>