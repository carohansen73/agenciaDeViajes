<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-03 21:48:32
  from 'C:\Users\Eq1-Sala\Desktop\xampp\htdocs\AgenciaDeViajes\templates\form_region.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f78d590f29cd0_16614527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca3ee1ea3cc3a207a4e10dd8ee7877d095a76158' => 
    array (
      0 => 'C:\\Users\\Eq1-Sala\\Desktop\\xampp\\htdocs\\AgenciaDeViajes\\templates\\form_region.tpl',
      1 => 1601754454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f78d590f29cd0_16614527 (Smarty_Internal_Template $_smarty_tpl) {
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