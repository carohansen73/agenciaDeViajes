
{include 'header.tpl'}  
<main class="container">
        <div class="detalle">
                <h1>{$tour->destinos|upper}</h1>
                <h2> Paquete </h2>
                <p>{$tour->paquete}</p>
                <h2> Itinerario </h2>
                <p>{$tour->itinerario}</p>
                <h2> Precio </h2>
                <p>{$tour->precio}</p>

                <button type="submit" class="btn btn-info">Comprar</button>

                <a href="{BASE_URL}" class="btn btn-info">Volver</a>
        </div>

        {if isset($smarty.session.EMAIL_USUARIO)}
                {include 'form_comentario.tpl'}
        {/if}
{include 'footer.tpl'}