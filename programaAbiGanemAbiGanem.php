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
    While($bandera){
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
 * Esta funcion verifica que no se repitan las palabras del arreglo
 * @param String $nombreUsusario
 * @param array $coleccionPartidas
 * @param int $numeroPalabra
 * @param array $coleccionPalabras
 * @return $numeorPalabra
 */
function verificarPalabraQueNoRepita($nombreUsusario,$coleccionPartidas,$numeroPalabra,$coleccionPalabras){
    $i=0;
    $palabra=$coleccionPalabras[$numeroPalabra];
    while($i<count($coleccionPartidas)){
        
        if($nombreUsusario==$coleccionPartidas[$i]["jugador"]&&$palabra==$coleccionPartidas[$i]["palabraWordix"]){
            echo "La palabra ya fue utilizada, ingrese otro numero que no sea: ".$numeroPalabra."\n";
            $numeroPalabra=trim(fgets(STDIN));

            $i=0;
        }
        $palabra=$coleccionPalabras[$numeroPalabra];
        $i++;
    }
    return $numeroPalabra;
}
/**
 * Funcion para ordenar alfa 
 * @param array $a
 * @param array $b
 * @return int
 */
function cmp($a, $b) {
    if ($a["jugador"] == $b["jugador"]) {
        if($a["palabraWordix"]==$b["palabraWordix"]){
            return 0;
        }elseif($a["palabraWordix"]<$b["palabraWordix"]){
            return -1;
        }else{
            return 1;
        }
        return 0;
    }
    return ($a["jugador"] < $b["jugador"]) ? -1 : 1;
}
/**
 * 6)Permite ingresar un numero de partida y si el numero es valido muestra el resumen de esa partida jugada
 * @param array $coleccionPartidas
 * @param int $numeroPartida
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
    while($i < $rango && $coleccionPalabras[$i] != $palabraAgregada ){
        
        if($palabraAgregada==$coleccionPalabras[$i]){
        $esAgregable = false;
        
    } 
    $i = $i + 1;
    }
    
    if($esAgregable == true){
    $numeroPalabra = count($coleccionPalabras); //numero de la nueva palabra
    $coleccionPalabras [$numeroPalabra] = $palabraAgregada;
    echo "\nLa palabra " .$coleccionPalabras[$numeroPalabra]. " fue agregada\n";
    } else {
        echo"\nLa palabra ya existe\n";
    }
    
    return $coleccionPalabras; 
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
    $i=0;
    $bandera=true;
    while($i<count($coleccionPartidas)&&$bandera==true){
        if($coleccionPartidas[$i]["jugador"]==$nombreJugador){
            $bandera=false;
        }
        if($i==count($coleccionPartidas)-1&&$bandera==true){
            echo "Ingrese un nombre valido\n";
            $nombreJugador=trim(fgets(STDIN));
            $i=0;
        }
        $i++;
    }

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

/**
 * 10)esta funcion solicita al usuario el nombre de un jugador y retorna el nombre en minúsculas
 * @return string 
 */
function solicitarJugador(){
    // string $nombreUsusario , boolean $esNombre 
    echo "Ingrese nombre de usuario:\n";
    $nombreUsusario=trim(fgets(STDIN));
    $esNombre = ctype_alpha($nombreUsusario[0]);
    while($esNombre==false){ 
        if($esNombre == false){
            echo"ingrese un nombre de usuario sin el primer caracter sea un numero\n";
            $nombreUsusario=trim(fgets(STDIN));
        }
        $esNombre = ctype_alpha($nombreUsusario[0]);
       }
    
    return strtolower($nombreUsusario);
}



/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
// Int $opcion, array $coleccionPalabras, array $coleccionPartidas
//

//Inicialización de variables:
$coleccionPalabras=cargarColeccionPalabras();
$coleccionPartidas=cargarPartidas();


//$resumenJugadorX=["jugador"=>,"partidas"=>,"puntaje"=>,"victorias"=>, "intento1", "intento2","intento3", "intento4", "intento5", "intento6"];



//Proceso:



do {
    $opcion=seleccionarOpcion();
    switch ($opcion) {
        case 1: 
            $nombreUsusario=solicitarJugador();
            $numeroPalabra=solicitarNumeroEntre(0,count($coleccionPalabras)-1);
            $numeroPalabra=verificarPalabraQueNoRepita($nombreUsusario,$coleccionPartidas,$numeroPalabra,$coleccionPalabras);
            $palabraWordix=$coleccionPalabras[$numeroPalabra];
            $partida = jugarWordix($palabraWordix, strtolower($nombreUsusario));
            array_push($coleccionPartidas,$partida);
            break;
        case 2:
            $nombreUsusario=solicitarJugador();
            $numeroPalabra=rand(0,count($coleccionPalabras));
            $numeroPalabra=verificarPalabraQueNoRepita($nombreUsusario,$coleccionPartidas,$numeroPalabra,$coleccionPalabras);
            $palabraWordix=$coleccionPalabras[$numeroPalabra];
            $partida = jugarWordix($palabraWordix, strtolower($nombreUsusario));
            array_push($coleccionPartidas,$partida);
            break;
        case 3: 
            $numeroPartida=solicitarNumeroEntre(0,count($coleccionPartidas)-1);
            mostrarPartida ($coleccionPartidas, $numeroPartida);
            
            break;
        case 4:
            $bandera=true;
            $i=0;
            $nombreUsusario=solicitarJugador();
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
            $nombreUsusario=solicitarJugador();
            
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
            uasort($coleccionPartidas,'cmp');
            print_r($coleccionPartidas);
            break;
        case 7:
            $palabraAgregada=leerPalabra5Letras();
            $coleccionPalabras=agregarPalabra($coleccionPalabras,$palabraAgregada);
            break;
    }
    

} while ($opcion != 8);



