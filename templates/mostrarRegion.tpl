
    <main class="container"> <!-- inicio del contenido pricipal -->
       
        <div class='container-fluid'>
        <div class='row'>
        {foreach from=$regiones item= $region}
            
            <div class='col mt-5'>
                <div class='card' style='width: 18rem;'>
                    <img src='img/avion.jpg' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$region->nombre }</h5>
                        <p class='card-text'> {$region->informacion }</p>
                        <a href='region/$region->id' class='btn btn-info'>Ver detalle</a>
                    </div>
                </div>
            </div>
        
        {/foreach}
        </div>
        </div>
        
    </main> <!-- fin del contenido principal -->
{include 'footer.tpl'};