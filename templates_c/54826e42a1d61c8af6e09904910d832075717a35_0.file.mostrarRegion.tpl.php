<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-03 01:45:19
  from 'C:\xampp\htdocs\AgenciaViajes2\templates\mostrarRegion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f77bb8fcbbc41_31856256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54826e42a1d61c8af6e09904910d832075717a35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgenciaViajes2\\templates\\mostrarRegion.tpl',
      1 => 1601682313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:carusel.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f77bb8fcbbc41_31856256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php $_smarty_tpl->_subTemplateRender('file:carusel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
   
       
        <div class='container-fluid'>
        <div class='row'>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regiones']->value, 'region');
$_smarty_tpl->tpl_vars['region']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->do_else = false;
?>
            
            <div class='col mt-5'>
                <div class='card' style='width: 18rem;'>
                    <img src='img/avion.jpg' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo $_smarty_tpl->tpl_vars['region']->value->nombre;?>
</h5>
                        <p class='card-text'> <?php echo $_smarty_tpl->tpl_vars['region']->value->informacion;?>
</p>
                        <a href='region/$region->id' class='btn btn-info'>Ver detalle</a>
                    </div>
                </div>
            </div>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        </div>
        
    
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
