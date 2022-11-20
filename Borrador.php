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
//-------------------------------------------------
// este ejercicio es de la explicacion 1 punto 3)
echo "ingrese el numero de la partida :";
$numeroPartida=trim(fgets(STDIN));
mostrarPartida ($coleccionPartidas, $numeroPartida);
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

//este ejercicio es de la explicacion 1 punto 4)
echo "ingrese el numbre de un jugador:";
$nombreJugador=trim(fgets(STDIN));
$valor=indicePrimerPartida($coleccionPartidas,$nombreJugador);
if($valor==-1){
    echo"No existe el jugado";
}elseif($coleccionPartidas[$valor]["puntaje"]==0){
    echo"El jugador ".$nombreJugador." no ganó ninguna partida";
}else{
    mostrarPartida($coleccionPartidas,$valor); 
}
/**
 * 8)Ingresa una coleccion de partidas y un nombre de un jugador retorna el índice de la primera
 * partida ganada por dicho jugador
 * @param array $coleccionPartidas
 * @param string $nombreJugador
 * @return int 
 */
function indicePrimerPartida($coleccionPartidas,$nombreJugador){
    //int $i,$param , buleano $bandera
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
//este ejercicio es de la explicacion 1 punto 5)
echo "ingrese el nombre de un jugador:";
$nombreJugador=trim(fgets(STDIN));
$resumenJugadorX=mostrarResumenJugador($resumenJugador,$nombreJugador);
$victorias=$resumenJugadorX ["Intento1"] +$resumenJugadorX["Intento2"] +$resumenJugadorX["Intento3"] +$resumenJugadorX["Intento4"] +$resumenJugadorX["Intento5"] +$resumenJugadorX["Intento6"];
$n=count($resumenJugadorX);
$suma=0
for ($i=1; $i <=$n ; $i++) { 
    if($resumenJugadorX ["Intento.$i."]>0){
        $suma= $suma+1;
    }
}
$porsentaje=(int)(($suma*100)/6);
echo"*****************************************************************\n";
echo"jugador: " .$nombreJugador."\n";
echo"partidas: " .$resumenJugadorX["partidas"]."\n";
echo"puntaje total: " .$resumenJugadorX["puntaje"]."\n";
echo"porsentaje victorias: " .$porsentaje."%\n";
echo"adivinadas: ""\n";
echo"    Intento 1:".$resumenJugadorX ["Intento1"]."\n";
echo"    Intento 2:".$resumenJugadorX ["Intento2"]."\n";
echo"    Intento 3:".$resumenJugadorX ["Intento3"]."\n";
echo"    Intento 4:".$resumenJugadorX ["Intento4"]."\n";
echo"    Intento 5:".$resumenJugadorX ["Intento5"]."\n";
echo"    Intento 6:".$resumenJugadorX ["Intento6"]."\n";
echo"*****************************************************************\n";
/**
 * 9) esta funcion retorna el resumen de un jugador
 * @param array $resumenJugador
 * @param string $nombreJugador
 * @return array
 */
function mostrarResumenJugador($resumenJugador,$nombreJugador){
    // $resumen, buleano $bandera, int $i , $param
    $bandera=true;
    $i=0;
    $param=count($resumenJugador);
    while ($i<=$param&&$bandera=true){
        if($resumenJugador[$i]["jugador"]==$nombreJugador){
            $resumen=$resumenJugador[$i];
            $bandera=false;
        }
        $i=$i+1;
    }
    return $resumen;
}
    

?>
