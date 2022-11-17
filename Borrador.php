<?php



/**
 * 9)Ingresa una coleccion de partidas y un nombre de un jugador 
 * @param array $coleccionPartidas
 * @param string $nombreJugador
 * @return  
 */
function resumenJugador($coleccionPartidas,$nombreJugador){

    $coleccionPartidas[$nombreJugador];
}

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
    /**
 * 11) Mustra coleccion de partidas ordenadas
 * @param array $coleccionPartidas
 */
function datosPartidaJugador($coleccionPartidas){
    //
    sort($coleccionPartidas,"cmp");
    print_r($coleccionPartidas);
}
$coleccionPartidas=cargarPartidas();
datosPartidaJugador($coleccionPartidas);
-------------------------------------------------
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

?>
