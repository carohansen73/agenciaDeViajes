<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 02:22:05
  from 'C:\Users\Eq1-Sala\Desktop\xampp\htdocs\AgenciaDeViajes\templates\mostrarTour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7672ad7b7c26_28282019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68b9b3626541fbf3ec266394a881d77b6b55314d' => 
    array (
      0 => 'C:\\Users\\Eq1-Sala\\Desktop\\xampp\\htdocs\\AgenciaDeViajes\\templates\\mostrarTour.tpl',
      1 => 1601598030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7672ad7b7c26_28282019 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <main class="container"> <!-- inicio del contenido pricipal -->          
    <ul class='list-group'>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tours']->value, 'tour');
$_smarty_tpl->tpl_vars['tour']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tour']->value) {
$_smarty_tpl->tpl_vars['tour']->do_else = false;
?>
            <li class='list-group-item'><?php echo $_smarty_tpl->tpl_vars['tour']->value->destinos;?>
 | <?php echo $_smarty_tpl->tpl_vars['tour']->value->paquete;?>
 |<?php echo $_smarty_tpl->tpl_vars['tour']->value->itinerario;?>
|<?php echo $_smarty_tpl->tpl_vars['tour']->value->precio;?>
 </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
         </main> <!-- fin del contenido principal -->
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;<?php }
}
