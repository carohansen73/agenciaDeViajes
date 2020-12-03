
{include 'header.tpl'} 
<div class='titulo'> 
    <h1>{$tours[0]->nombre|upper}</h1>
</div>
<main class="container">
    <div class='container-fluid'>
        <div class='row'>
            {foreach from=$tours item= $tour}
                
                <div class='col mt-5'>
                    <div class='card' style='width: 18rem;'>
                    {if isset($tour->imagen)}
                        <p> <img width="100" height="190" src="{$tour->imagen}" class='card-img-top' alt='...'> </p>
                    {/if}
                        <div class='card-body'>
                            <h5 class='card-title'>{$tour->destinos }</h5>
                            <p class='card-text'> {$tour->precio}</p>
                            <a class='btn btn-info' href='verDetalle/{$tour->id}'>Ver</a>
                        </div>
                    </div>
                </div>
            
            {/foreach}
        </div>
    </div>

{include 'footer.tpl'}