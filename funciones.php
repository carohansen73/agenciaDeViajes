<?php
include_once 'baseDatos.php';

function showTour ($id){/*mostrar*/
    include_once 'header.php';
    

    $tours= getTour($id);
    
    echo "<ul class='list-group'>";
    foreach($tours as $tour){
        echo "<li class='list-group-item'>$tour->destinos | $tour->paquete </li>";
    }
    echo '</ul>';
    
    include_once 'footer.php';
}

function mostrarRegiones(){

    include_once  'header.php';

    $regiones = obtenerRegiones();

    /*echo ' <ul class="list-group mt-5">';
    foreach ($regiones as $region){
        echo"<li class='list-group-item'>$region->nombre | $region->informacion  
        <a class='btn btn-danger btn-sm' href='eliminar/$region->id'> ELIMINAR </a> </li>";
    };
    echo '</ul>';*/

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