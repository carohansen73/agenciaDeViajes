<?php
include_once 'baseDatos.php';

function showTour (){/*mostrar*/
    include_once 'header.php';
    
    $tours= getTour();
    
    echo "<ul class='list-group'>";
    foreach($tours as $tour){
        echo "<li class='list-group-item'>$tour->destino | $tour->paquete </li>";
    }
    echo '</ul>';
    
    include_once 'footer.php';
}

    function showRegion (){/*mostrar*/
        include_once 'header.php';
        
        $regiones= getDestino();
 
        echo "<div class='producto'>";
        foreach($regiones as $region){
        
        echo "<h4>$region->nombre</h4>";
        echo "<h5>$region->informacion</h5>";
        }
     echo "</div>";


        
        /*echo "<ul class='list-group'>";
        foreach($regiones as $region){
            echo "<li class='list-group-item'>$region->nombre | $region->informacion </li>";
        }
        echo '</ul>';*/
        
        include_once 'footer.php';
    }