{include 'header.tpl'} 

 <h1>Region</h1>
 
 {include 'templates/form_actualizarRegion.tpl'}
    {if $error} 
        {$error} 
    {/if} 
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Informacion</th>
            </tr>
        </thead>
        <tbody>
        
            <tr>
                <th scope="row">{$region->id}</th>
                <td>{$region->nombre}</td>
                <td>{$region->informacion}</td>
                
            </tr>
     
        </tbody>
    </table>


{include 'footer.tpl'}