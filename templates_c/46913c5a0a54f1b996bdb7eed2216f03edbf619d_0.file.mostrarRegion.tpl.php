<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 19:47:55
  from 'C:\Users\Eq1-Sala\Desktop\xampp\htdocs\AgenciaDeViajes\templates\mostrarRegion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7767cbb220a2_48558205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46913c5a0a54f1b996bdb7eed2216f03edbf619d' => 
    array (
      0 => 'C:\\Users\\Eq1-Sala\\Desktop\\xampp\\htdocs\\AgenciaDeViajes\\templates\\mostrarRegion.tpl',
      1 => 1601660873,
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
function content_5f7767cbb220a2_48558205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php $_smarty_tpl->_subTemplateRender('file:carusel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <main class="container"> <!-- inicio del contenido pricipal -->
       
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
        
    </main> <!-- fin del contenido principal -->
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}