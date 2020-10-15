
{include 'header.tpl'}  

        <h1>{$tour->destinos}</h1>
        <p>{$tour->paquete}</p>
        <p>{$tour->itinerario}</p>
        <p>{$tour->precio}</p>

        <button type="submit" class="btn btn-primary">Comprar</button>

       <a href="{BASE_URL}">Volver</a>

{include 'footer.tpl'}