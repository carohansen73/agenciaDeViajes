<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-03 21:13:49
  from 'C:\xampp\htdocs\AgenciadeViajes\templates\administrador.region.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f78cd6d286b91_41902027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080094543c0606052484afbd0a82f69e76f44b82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgenciadeViajes\\templates\\administrador.region.tpl',
      1 => 1601752426,
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
function content_5f78cd6d286b91_41902027 (Smarty_Internal_Template $_smarty_tpl) {
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
                <td>@mdo</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
        </tbody>
    </table>
    
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
