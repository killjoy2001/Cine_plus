<?php
/* Smarty version 4.3.1, created on 2023-07-24 06:58:17
  from 'C:\xampp\htdocs\proyecto2\cineplus\view\templates\barbie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64be04e9803096_97784943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70043f6ee922c4cc711c6cf422107aef87ddbee1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto2\\cineplus\\view\\templates\\barbie.tpl',
      1 => 1690174696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64be04e9803096_97784943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="grid">

<div class="container-movie-container">
    <div class="movie-container">
        <label>Selecione la hora </label>
        <select id="movie">
            <option>Escoger hora</option>
            <option value='3500'>18:30</option>
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
                <div id="a1" class="seat"></div>
                <div id="a2" class="seat"></div>
                <div id="a3" class="seat"></div>
                <div id="a4" class="seat"></div>
                <div id="a5" class="seat"></div>
                <div id="a6" class="seat"></div>
                <div id="a7" class="seat"></div>
                <div id="a8" class="seat"></div>
            </div>
            <div class="row">
                <div id="b1" class="seat"></div>
                <div id="b2" class="seat"></div>
                <div id="b3" class="seat"></div>
                <div id="b4" class="seat"></div>
                <div id="b5" class="seat"></div>
                <div id="b6" class="seat"></div>
                <div id="b7" class="seat"></div>
                <div id="b8" class="seat"></div>
            </div>
            <div class="row">
                <div id="c1" class="seat"></div>
                <div id="c2" class="seat"></div>
                <div id="c3" class="seat"></div>
                <div id="c4" class="seat"></div>
                <div id="c5" class="seat"></div>
                <div id="c6" class="seat"></div>
                <div id="c7" class="seat"></div>
                <div id="c8" class="seat"></div>
            </div>
            <div class="row">
                <div id="d1" class="seat"></div>
                <div id="d2" class="seat"></div>
                <div id="d3" class="seat"></div>
                <div id="d4" class="seat"></div>
                <div id="d5" class="seat"></div>
                <div id="d6" class="seat"></div>
                <div id="d7" class="seat"></div>
                <div id="d8" class="seat"></div>
            </div>
            <div class="row">
                <div id="e1" class="seat"></div>
                <div id="e2" class="seat"></div>
                <div id="e3" class="seat"></div>
                <div id="e4" class="seat"></div>
                <div id="e5" class="seat"></div>
                <div id="e6" class="seat"></div>
                <div id="e7" class="seat"></div>
                <div id="e8" class="seat"></div>
            </div>
            <div class="row">
                <div id="f1" class="seat"></div>
                <div id="f2" class="seat"></div>
                <div id="f3" class="seat"></div>
                <div id="f4" class="seat"></div>
                <div id="f5" class="seat"></div>
                <div id="f6" class="seat"></div>
                <div id="f7" class="seat"></div>
                <div id="f8" class="seat"></div>
            </div>
        </div>
    </div>
</div>
<div class="synopsis-container">
    <div class="imgmovie-container">
        <img src="./img/barbieposter.jpg">
    </div>
    <div class="synopsis"><h3>Sipnosis</h3><p>Después de ser expulsada de Barbieland por no ser una muñeca de aspecto perfecto, Barbie parte hacia el mundo humano para encontrar la verdadera felicidad.</p></div>
    </div>
</div>
<?php echo '<script'; ?>
 src="./js/moviejs.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
