<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 22:03:14
  from 'C:\Users\Eq1-Sala\Desktop\xampp\htdocs\AgenciaDeViajes\templates\form_ingreso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f77878219e780_35915333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa4b8fa33c3ed3671d758a264b8b750d2ec95666' => 
    array (
      0 => 'C:\\Users\\Eq1-Sala\\Desktop\\xampp\\htdocs\\AgenciaDeViajes\\templates\\form_ingreso.tpl',
      1 => 1601593006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f77878219e780_35915333 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="iniciar" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="contraseña" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label name="" class="form-check-label" for="exampleCheck1">Recordar contraseña</label>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form><?php }
}
