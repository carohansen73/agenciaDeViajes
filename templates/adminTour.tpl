    
{include 'header.tpl'} 
<h1>Tours</h1>
{include 'form_tour.tpl'} 
    {if $error}
        <div class="alert alert-primary">
            {$error}
        </div>
    {/if}

<table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Destino</th>
                <th scope="col">Paquete</th>
                <th scope="col">Itinerario</th>
                <th scope="col">Precio</th> 
            </tr>
        </thead>
        <tbody>
        {foreach from=$tours item= $tour}
            <tr>
                <th scope="row">{$tour->destinos}</th>
                <td>{$tour->paquete}</td>
                <td>{$tour->itinerario}</td>
                 <td>{$tour->precio}</td> 

                
                <td><a class='btn btn-danger btn-sm' href='eliminarTour/{$tour->id}'>Eliminar</a></td>
            <td><a class='btn btn-danger btn-sm' href='actualizarTour/{$tour->id}'>Actualizar</a></td>
            </tr>
        {/foreach}    
        </tbody>
    </table>
    
{include 'footer.tpl'}