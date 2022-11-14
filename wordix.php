<?

/**1)Esta función inicializa el arreglo $coleccionPalabras
*@Return $coleccionPalabras
*/
fuciton cargarColeccionPalabras(){
$coleccionPalabras =[ “MUJER” , “QUESO” , “FUEGO” , “CASAS” , “RASGO” , “GATOS” , “HUEBO” , “TINTO” , “NAVES” , “VERDE” , “MELON” , “YUYOS” , “PIANO” ,  “PISOS” , “FRESA”];
Return $coleccionPalabras;
}

/**2)Esta función inicializa el arreglo $coleccionPartidas
* @Return $coleccionPartidas
*/
Fuction cargarPartidas(){
$coleccionPartidas [0] = [ palabraWordix” => “QUESO” , “jugador” => “majo”,”intentos “=>0 , “puntaje”=> 0];
//etc…10
Return $coleccionPartidas;
}
/**3) Esta función muestra en pantalla las opciones del menú 
*@return $num int
*/
fuction seleccionarOpcion (){
    // booleano $bandera 
    $num = 0;
    $vandera = true;
    While( $bandera==true){
        Echo” 1) Jugar al Wordix con una palabra elegida \n
2) Jugar al Wordix con una palabra aleatoria \n
3) Mostrar una partida \n
4) Mostrar la primer partida ganadora \n
5) Mostrar resumen de Jugador \n
6) Mostrar listado de partidas ordenadas por jugador y por palabra   \n
7) Agregar una palabra de 5 letras a Wordix  \n
8) Salir \n 
Elija el número de la opción \n “;
        $num = trim(fgets(STDIN));
If(  $num ==  1  $num ==  2  $num ==  3  $num ==  4  $num ==  5  $num ==  6  $num ==  7 || $num ==  8){
    $bandera = true;
}
}
    Return $num ;
}
;