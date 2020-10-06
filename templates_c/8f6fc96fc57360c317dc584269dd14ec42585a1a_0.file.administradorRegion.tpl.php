<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 15:39:02
  from 'C:\xampp\htdocs\AgenciadeViajes\templates\administradorRegion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7b21f6ae4df9_28043829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f6fc96fc57360c317dc584269dd14ec42585a1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgenciadeViajes\\templates\\administradorRegion.tpl',
      1 => 1601904958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_region.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7b21f6ae4df9_28043829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php $_smarty_tpl->_subTemplateRender('file:form_region.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Informacion</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regiones']->value, 'region');
$_smarty_tpl->tpl_vars['region']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->do_else = false;
?>
            <tr>
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['region']->value->id;?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['region']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['region']->value->informacion;?>
</td>
                <td><a class='btn btn-danger btn-sm' href='eliminarRegion/<?php echo $_smarty_tpl->tpl_vars['region']->value->id;?>
'>ELIMINAR</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
        </tbody>
    </table>
    
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
