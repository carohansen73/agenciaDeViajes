{include 'header.tpl'} 
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
            </tr>
        {/foreach}    
        </tbody>
    </table>
    
{include 'footer.tpl'}