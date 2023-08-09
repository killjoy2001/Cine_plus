<?php
/* Smarty version 4.3.1, created on 2023-07-24 06:16:52
  from 'C:\xampp\htdocs\proyecto2\cineplus\view\templates\sirenas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bdfb34e4faf5_05761227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1fa1b0b7236559b3b5523dfb29ed2777055db9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto2\\cineplus\\view\\templates\\sirenas.tpl',
      1 => 1690088903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64bdfb34e4faf5_05761227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="grid">
<div class="container-movie-container">
    <div class="movie-container">
        <label>Selecione el idioma </label>
        <select id="movie">
            <option>Escoger idioma</option>    
            <option>DOB</option>
            <option>SUB</option>
        </select>
        <label>Selecione la hora </label>
        <select id="movie">
            <option>Escoger hora</option>
            <option>15:20</option>
            <option>18:30</option>
            <option>20:10</option>
        </select>
  
        <ul class="showcase">
            <li class="li-showcase">
                <div class="seat"></div>
                <small>Disponible</small>
            </li>
            <li class="li-showcase">
                <div class="seat occupied"></div>
                <small>Ocupado</small>
            </li>    
        </ul>
  
        <div class="container">
            <div class="screen"></div>
    
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
        </div>
    </div>
</div>
<div class="synopsis-container">
    <div class="imgmovie-container">
        <img src="./img/sirenasposter.jpg">
    </div>
    <div class="synopsis"><h3>Sipnosis</h3><p>La escuela se vuelve aún más incómoda cuando la tímida adolescente Ruby Gillman se entera de que procede de una familia real.</p></div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
