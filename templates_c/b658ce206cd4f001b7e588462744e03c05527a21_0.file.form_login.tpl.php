<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 23:20:52
  from 'C:\Users\Eq1-Sala\Desktop\xampp\htdocs\AgenciaDeViajes\templates\form_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7b8e34ee4629_63435774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b658ce206cd4f001b7e588462744e03c05527a21' => 
    array (
      0 => 'C:\\Users\\Eq1-Sala\\Desktop\\xampp\\htdocs\\AgenciaDeViajes\\templates\\form_login.tpl',
      1 => 1601932850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f7b8e34ee4629_63435774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

<form action="iniciar" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input name="contraseña" type="password" class="form-control" id="password">
  </div>

  <button type="submit" class="btn btn-primary">Entrar</button>

</form><?php }
}
