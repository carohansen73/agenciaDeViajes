<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 21:16:32
  from 'C:\xampp\htdocs\AgenciadeViajes\templates\carusel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7b7110359465_77190913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b1c7647716f1c226dc513adf49c841722f9e4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgenciadeViajes\\templates\\carusel.tpl',
      1 => 1601648505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7b7110359465_77190913 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Elegi tu RUMBO</h1>
  <section class="centrar">
    <div class="centrar">
      <div class="container-lg">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="img/mendoza.jpg" class="d-block" alt="Mendoza">
              </div>
              <div class="carousel-item">
                  <img src="img/cordoba.jpg" class="d-block" alt="cordoba">
              </div>
              <div class="carousel-item">
                  <img src="img/jujuy.jpg" class="d-block" alt="Campera Bordo">
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section> 
<?php }
}
