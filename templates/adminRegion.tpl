{include 'header.tpl'} 

 <h1>Regiones</h1>

 <h2><a class='btn btn-danger btn-sm' href='adminTour'>MODIFICAR TOUR</a></h2>
 
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
        </tbody>
    </table>

{include 'footer.tpl'}
