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

/**
 * 11) Mustra coleccion de partidas ordenadas
 * @param array $coleccionPartidas
 */
function datosPartidaJugador($coleccionPartidas){
    //
    uasort($coleccionPartidas,'cmp'){
        foreach($coleccionPartidas as $jugador => $nombreJugador){
            echo $nombreJugador." - ".$palabra;
        }
    }
}


