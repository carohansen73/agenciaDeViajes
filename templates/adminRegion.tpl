{include 'header.tpl'} 

 <h1>Regiones</h1>

 {include 'form_region.tpl'}
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Informacion</th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$regiones item= $region}
            <tr>
                <th scope="row">{$region->id}</th>
                <td>{$region->nombre}</td>
                <td>{$region->informacion}</td>
                <td><a class='btn btn-danger btn-sm' href='eliminarRegion/{$region->id}'>ELIMINAR</a></td>
                <td><a class='btn btn-danger btn-sm' href='actualizarRegion/{$region->id}'>ACTUALIZAR</a></td>
            </tr>
        {/foreach} 
        
        {if $error} 
            {$error} 
        {/if} 
        </tbody>
    </table>
    

{include 'footer.tpl'}
