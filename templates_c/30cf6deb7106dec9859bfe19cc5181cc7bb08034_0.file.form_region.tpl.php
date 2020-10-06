<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 21:17:02
  from 'C:\xampp\htdocs\AgenciadeViajes\templates\form_region.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7b712e10a490_50229507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30cf6deb7106dec9859bfe19cc5181cc7bb08034' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgenciadeViajes\\templates\\form_region.tpl',
      1 => 1601753133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7b712e10a490_50229507 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="InsertarRegion" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
        
        <div class="form-group">
            <label>Informacion</label>
            <textarea name="informacion" class="form-control" rows="3"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form><?php }
}
