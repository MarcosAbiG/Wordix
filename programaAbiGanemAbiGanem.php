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
/**2)Esta función inicializa el arreglo $coleccionPartidas
* @Return $coleccionPartidas
*/
function cargarPartidas(){
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

function verificarPalabraQueNoRepita($palabraWordix,$numeroPalabra,$nombreUsusario,$coleccionPalabrasUsadas){

    
    for($i=0;count($coleccionPalabrasUsadas)>$i;$i++){
        while($nombreUsusario==$coleccionPalabrasUsadas[$i]["jugador"]&&
        $numeroPalabra==$coleccionPalabrasUsadas[$i]["numeroPalabra"]){
            
            echo"Ya uso el numero de palabra *".$numeroPalabra."*, ingrese uno diferente:\n";
            $numeroPalabra=trim(fgets(STDIN));
        }
    }
    $palabraUsadaPorJugador=[
        "jugador" => $nombreUsusario,
        "numeroPalabra"=>$numeroPalabra];
    array_push($coleccionPalabrasUsadas,$palabraUsadaPorJugador);
    
    
    return $numeroPalabra;
}
/*
 * 6)Permite ingresar un numero de partida y si el numero es valido muestra el resumen de esa partida jugada
 * @param array $coleccionPartidas
 */
function mostrarPartida ($coleccionPartidas, $numeroPartida) 
{
    echo "\n***************************************************************** \n";
    echo"Partida WORDIX " .$numeroPartida. ": palabra ".$coleccionPartidas[$numeroPartida]["palabraWordix"]. "\n";
    echo"Jugador: ".$coleccionPartidas[$numeroPartida]["jugador"];
    echo"\nPuntaje: " .$coleccionPartidas [$numeroPartida]["puntaje"];
    if ($coleccionPartidas[$numeroPartida]["intentos"] > 0){
        echo"\nIntento: Adivinó la palabra en " .$coleccionPartidas[$numeroPartida]["intentos"] ." intentos";
    } else {
        echo "\nIntento: No se adivinó la palabra";
    }
    echo"\n*****************************************************************\n";
}

/**
 * 8)Ingresa una coleccion de partidas y un nombre de un jugador retorna el índice de la primera
 * partida ganada por dicho jugador
 * @param array $coleccionPartidas
 * @param string $nombreJugador
 * @return int 
 */
function indicePrimerPartida($coleccionPartidas,$nombreJugador){
    //int $i,$param , boolean $bandera
    $bandera=true;
    $i=0;
    $param=count($coleccionPartidas);
    $retorno=-1;
    while ($i<$param&&$bandera=true){
        if($coleccionPartidas[$i]["jugador"]==$nombreJugador&&$coleccionPartidas[$i]["puntaje"]>0){
            $retorno=$i;
            $bandera=false;
        }
        
        $i=$i+1;
    }

    return $retorno;
}
/**
 * 9) esta funcion retorna el resumen de un jugador
 * @param array $coleccionPartidas
 * @param string $nombreJugador
 * @return array
 */
function estructuraResumenJugador($coleccionPartidas,$nombreJugador){
    $partida=0;
    $puntaje=0;
    $victorias=0;
    $aux=0;
    $intento1=0;
    $intento2=0;
    $intento3=0;
    $intento4=0;
    $intento5=0;
    $intento6=0;
    for($i=0;$i<count($coleccionPartidas);$i++){
        if($coleccionPartidas[$i]["jugador"]==$nombreJugador){
            $partida=$partida+1;
            $puntaje=$coleccionPartidas[$i]["puntaje"]+$puntaje;
            if($coleccionPartidas[$i]["puntaje"]>0){
                $victorias=$victorias+1;
            }
            $aux=$coleccionPartidas[$i]["intentos"];
            switch($aux){
                case 1:
                    $intento1=$intento1+1;
                    break;
                case 2:
                    $intento2=$intento2+1;
                    break;
                case 3:
                    $intento3=$intento3+1;
                    break;
                case 4:
                    $intento4=$intento4+1;
                    break;
                case 5:
                    $intento5=$intento5+1;
                    break;
                case 6:
                    $intento6=$intento6+1;
                    break;
            }
        }
    }


    $resumenJugador=["jugador"=>$nombreJugador,"partidas"=>$partida,"puntaje"=>$puntaje, 
"victorias"=>$victorias, "intento1"=>$intento1, "intento2"=>$intento2,
 "intento3"=>$intento3, "intento4"=>$intento4, "intento5"=>$intento5, "intento6"=>$intento6];
 return $resumenJugador;
}


/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:

//$resumenJugador=["jugador"=>,"partidas"=>,"puntaje"=>,"victorias"=>, "intento1", "intento2","intento3", "intento4", "intento5", "intento6"];



//Proceso:

//$partida = jugarWordix("MELON", strtolower("MaJo"));

//print_r($partida);
//imprimirResultado($partida);
$coleccionPalabras=cargarColeccionPalabras();
$coleccionPartidas=cargarPartidas();
$opcion=seleccionarOpcion();

$coleccionPalabrasUsadas=[];

do {
    
    switch ($opcion) {
        case 1: 
            echo "Ingrese nombre de usuario:\n";
            $nombreUsusario=trim(fgets(STDIN));
            $numeroPalabra=solicitarNumeroEntre(1,20);
            $palabraWordix=$coleccionPalabras[$numeroPalabra];
            $numeroPalabra=verificarPalabraQueNoRepita($palabraWordix,$numeroPalabra,$nombreUsusario,$coleccionPalabrasUsadas);
            $palabraWordix=$coleccionPalabras[$numeroPalabra];
            $partida = jugarWordix($palabraWordix, strtolower($nombreUsusario));
            array_push($coleccionPartidas,$partida);
            break;
        case 2:
            echo "Ingrese nombre de usuario:\n";
            $nombreUsusario=trim(fgets(STDIN));
            $palabraWordix=$coleccionPalabras[array_rand($coleccionPalabras)];
            
            $partida = jugarWordix($palabraWordix, strtolower($nombreUsusario));
            array_push($coleccionPartidas,$partida);
            break;
        case 3: 

            echo "ingrese el numero de la partida :";
            $numeroPartida=trim(fgets(STDIN));
            mostrarPartida ($coleccionPartidas, $numeroPartida);
            
            break;
        case 4:
            $bandera=true;
            $i=0;
            echo "ingrese el numbre de un jugador:";
            $nombreJugador=trim(fgets(STDIN));
            
            while($i<count($coleccionPartidas)&&$bandera==true){
                if($nombreJugador==$coleccionPartidas[$i]["jugador"]){
                    $bandera=false;
                }
                $i++;
            }
            if($bandera==true){
                echo "\n*****************************************************************\n";
                echo"No existe el jugador\n";
                echo "*****************************************************************\n";
            }else{
                $valor=indicePrimerPartida($coleccionPartidas,$nombreJugador);
                if($valor==-1){
                    echo "\n*****************************************************************\n";
                    echo"El jugador ".$nombreJugador." no ganó ninguna partida\n";
                    echo "*****************************************************************\n";
                }else{
                    mostrarPartida($coleccionPartidas,$valor); 
                }
        }

            break;
        case 5:
            echo "ingrese el nombre de un jugador:";
            $nombreJugador=trim(fgets(STDIN));

            
            $resumenJugadorX=estructuraResumenJugador($coleccionPartidas,$nombreJugador);
            //$b=$resumenJugadorX["partidas"];
            //$porsentaje=(int)(($a*100)/$b);
            $porsentaje=(int)(($resumenJugadorX["victorias"]*100)/$resumenJugadorX["partidas"]);
            
            echo"\n*****************************************************************\n";
            echo "Jugador: " .$nombreJugador."\n";
            echo "Partidas: " .$resumenJugadorX["partidas"]."\n";
            echo "Puntaje total: " .$resumenJugadorX["puntaje"]."\n";
            echo "Porsentaje victorias: " .$porsentaje."%\n";
            echo "adivinadas: \n";
            echo"    Intento 1: ".$resumenJugadorX["intento1"]."\n";
            echo"    Intento 2: ".$resumenJugadorX["intento2"]."\n";
            echo"    Intento 3: ".$resumenJugadorX["intento3"]."\n";
            echo"    Intento 4: ".$resumenJugadorX["intento4"]."\n";
            echo"    Intento 5: ".$resumenJugadorX["intento5"]."\n";
            echo"    Intento 6: ".$resumenJugadorX["intento6"]."\n";
            echo"*****************************************************************\n";

            break;
        case 6:

            break;
        case 7:
            break;
    }
    
$opcion=seleccionarOpcion();

} while ($opcion != 8);

//----------------------------------------------------------------------------------------------------------------------
/**Esta funcoin verifica que el usuario no juegue 2 veces con la misma palabra
 * @param 
 * 
 */

/*function verificarPalabraQueNoRepita($palabraWordix,$numeroPalabra,$nombreUsusario){
    $i=0;
    $palabraUsadaPorJugador=["jugador" => $nombreUsusario,"numeroPalabra"=>$numeroPalabra];
    $coleccionPalabrasUsadas[0]=["jugador"=>"ejemplo","numeroPalabra"=>"ejemplo"];
    array_push($coleccionPalabrasUsadas,$palabraUsadaPorJugador);
    for($i=0;count($coleccionPalabrasUsadas)>$i;$i++){
        if($nombreUsusario==$coleccionPalabrasUsadas[i]&&$numeroPalabra==$coleccionPalabrasUsadas[i]){
            echo"Ya uso el numero de palabra ".$numeroPalabra.", ingrese uno diferente:\n";
            
        }
    }
}
*/


/**3) Esta función muestra en pantalla las opciones del menú 
*@return $num int
*/
Function seleccionarOpcion (){
    // booleano $bandera 
    $num = 0;
    $bandera = true;
    
    echo"\n*****************************************************************\n";
    echo  "1) Jugar al Wordix con una palabra elegida \n";
    echo  "2) Jugar al Wordix con una palabra aleatoria \n";
    echo  "3) Mostrar una partida \n";
    echo  "4) Mostrar la primer partida ganadora \n";
    echo  "5) Mostrar resumen de Jugador \n";
    echo  "6) Mostrar listado de partidas ordenadas por jugador y por palabra \n";
    echo  "7) Agregar una palabra de 5 letras a Wordix  \n";
    echo  "8) Salir \n" ;
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
/*function leerPalabra5Letras()
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
*/
/**
 *  5)Permite ingresar un numero entre un rango de valores ya sea para jugar o mostrar un partida y retorna el numero si es 
 * valido entre ese rango
 * @param int $min
 * @param int $max
 * @return int
 */
/*function solicitarNumeroEntre($min, $max)
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
*/
//REVISRAR WORDIX PHP solicitarNumeroEntre