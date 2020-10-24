{include 'header.tpl'} 
<div class='titulodark'> 
    <h1>Regiones</h1>
</div> 
 {include 'form_region.tpl'}
 
    {if $error}
        <div class="alert alert-primary">
            {$error}
        </div>
    {/if}

    <table class="table ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Informacion</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$regiones item= $region}
            <tr>
                <th scope="row">{$region->id}</th>
                <td>{$region->nombre}</td>
                <td>{$region->informacion}</td>
                
                <td><a class='btn btn-danger btn-sm' href='eliminarRegion/{$region->id}'><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg></a></td>
                

                <td><a class='btn btn-danger btn-sm' href='actualizarRegion/{$region->id}'>ACTUALIZAR</a></td>
            </tr>
        {/foreach} 
        
        </tbody>
    </table>
    

{include 'footer.tpl'}
