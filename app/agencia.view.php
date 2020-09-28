<?php

class AgenciaView{

    function mostrarRegiones($regiones){
        include_once  'header.php';
    
        echo"
            <div class='container-fluid'>
                <div class='row'>";
        foreach ($regiones as $region){
            echo"
            <div class='col mt-5'>
                <div class='card' style='width: 18rem;'>
                    <img src='...' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>$region->nombre </h5>
                        <p class='card-text'> $region->informacion </p>
                        <a href='region/$region->id' class='btn btn-primary'>Go somewhere</a>
                    </div>
                </div>
            </div>";
        };
        echo "  
        </div>
        </div>";
        
        
        include_once  'footer.php';
    }

    function showTour ($tours){/*mostrar*/
        include_once 'header.php';
        
        echo "<ul class='list-group'>";
        foreach($tours as $tour){
            echo "<li class='list-group-item'>$tour->destinos | $tour->paquete </li>";
        }
        echo '</ul>';
        
        include_once 'footer.php';
    }

}