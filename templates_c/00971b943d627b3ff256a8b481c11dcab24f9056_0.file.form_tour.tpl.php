<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 17:59:27
  from 'C:\Users\Eq1-Sala\Desktop\xampp\htdocs\AgenciaDeViajes\templates\form_tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7b42df73c8d7_77870397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00971b943d627b3ff256a8b481c11dcab24f9056' => 
    array (
      0 => 'C:\\Users\\Eq1-Sala\\Desktop\\xampp\\htdocs\\AgenciaDeViajes\\templates\\form_tour.tpl',
      1 => 1601913525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7b42df73c8d7_77870397 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tour -->
<form action="insertarTour" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
       
    <div class="form-group">
        <label>Destino</label>
        <textarea name="destinos" class="form-control" rows="3"></textarea>
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

     <div class="form-group">
                <label>Region</label>
                <select name="id_region" class="form-control">
                    <option value="1">Litoral</option>
                    <option value="2">Norte</option>
                    <option value="3">Cuyo</option>
                    <option value="4">Patagonia</option>
                    <option value="5">Cordoba</option>
                    <option value="6">CABA</option>
                    <option value="7">Buenos Aires Provincia</option>
                </select>
            </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form><?php }
}
