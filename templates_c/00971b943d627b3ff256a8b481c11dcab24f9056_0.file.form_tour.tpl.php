<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 22:05:58
  from 'C:\Users\Eq1-Sala\Desktop\xampp\htdocs\AgenciaDeViajes\templates\form_tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7788264b5104_72577515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00971b943d627b3ff256a8b481c11dcab24f9056' => 
    array (
      0 => 'C:\\Users\\Eq1-Sala\\Desktop\\xampp\\htdocs\\AgenciaDeViajes\\templates\\form_tour.tpl',
      1 => 1601669154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7788264b5104_72577515 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="insertar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
       
    <div class="form-group">
        <label>Tour</label>
        <textarea name="tour" class="form-control" rows="3"></textarea>
    </div>
       
    <div class="form-group">
        <label>Paquete</label>
        <textarea name="paquete" class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>Itinerario</label>
        <textarea name="itinerario" class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <textarea name="precio" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form><?php }
}
