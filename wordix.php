<?

/**1)Esta función inicializa el arreglo $coleccionPalabras
*@Return $coleccionPalabras
*/
Function cargarColeccionPalabras(){
$coleccionPalabras =[ “MUJER” , “QUESO” , “FUEGO” , “CASAS” , “RASGO” , “GATOS” , “HUEBO” , “TINTO” , “NAVES” , “VERDE” , “MELON” , “YUYOS” , “PIANO” ,  “PISOS” , “FRESA”];
Return $coleccionPalabras;
}

/**2)Esta función inicializa el arreglo $coleccionPartidas
* @Return $coleccionPartidas
*/
Function cargarPartidas(){
$coleccionPartidas [0] = [ “palabraWordix” => “QUESO” , “jugador” => “majo”, “intentos”=>0 , “puntaje”=> 0];
//etc…10
Return $coleccionPartidas;
}
/**3) Esta función muestra en pantalla las opciones del menú 
*@return $num int
*/
Function seleccionarOpcion (){
    // booleano $bandera 
    $num = 0;
    $vandera = true;
    While( $bandera==true){
    echo "1) Jugar al Wordix con una palabra elegida \n
2) Jugar al Wordix con una palabra aleatoria \n
3) Mostrar una partida \n
4) Mostrar la primer partida ganadora \n
5) Mostrar resumen de Jugador \n
6) Mostrar listado de partidas ordenadas por jugador y por palabra   \n
7) Agregar una palabra de 5 letras a Wordix  \n
8) Salir \n 
Elija el número de la opción \n ";
        $num = trim(fgets(STDIN));
if ($num ==  1 || $num ==  2 || $num ==  3 || $num ==  4 || $num ==  5 || $num ==  6 || $num ==  7 || $num ==  8){
    $bandera = true;
}
};
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

    while ((strlen($palabra) != 5) || !esPalabra($palabra)) {
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

;