
{include 'header.tpl'}  
        <div class="detalle">
                <h1>{$tour->destinos|upper}</h1>
                <h2> Paquete </h2>
                <p>{$tour->paquete}</p>
                <h2> Itinerario </h2>
                <p>{$tour->itinerario}</p>
                <h2> Precio </h2>
                <p>{$tour->precio}</p>

                <button type="submit" class="btn btn-primary">Comprar</button>

                <a href="{BASE_URL}">Volver</a>
        </div>
{include 'footer.tpl'}