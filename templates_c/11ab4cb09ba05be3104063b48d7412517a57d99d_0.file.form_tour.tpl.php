<?php
<<<<<<< HEAD
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 21:16:45
=======
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 15:02:12
>>>>>>> 07d5439f71c822388349a9154647fd8cad4e5332
  from 'C:\xampp\htdocs\AgenciadeViajes\templates\form_tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
<<<<<<< HEAD
  'unifunc' => 'content_5f7b711dece096_26819184',
=======
  'unifunc' => 'content_5f7b19549d5bf9_28821214',
>>>>>>> 07d5439f71c822388349a9154647fd8cad4e5332
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ab4cb09ba05be3104063b48d7412517a57d99d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgenciadeViajes\\templates\\form_tour.tpl',
      1 => 1601902822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5f7b711dece096_26819184 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5f7b19549d5bf9_28821214 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 07d5439f71c822388349a9154647fd8cad4e5332
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
