
{include 'header.tpl'}  

{include 'form_tour.tpl'} 

    <ul class='list-group'>
        {foreach from=$tours item=$tour}
            <li class='list-group-item'>{$tour->destinos} | {$tour->paquete} |{$tour->itinerario}|{$tour->precio} </li>
        {/foreach}
    </ul>
   
{include 'footer.tpl'}