<?php
/* Smarty version 4.3.1, created on 2023-07-23 04:28:07
  from 'C:\xampp\htdocs\proyecto2\cineplus\view\mainpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bc90376a48d9_18763349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4002cd4b4ee014e174fc5a593cd024075cf01cdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto2\\cineplus\\view\\mainpage.tpl',
      1 => 1690078742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64bc90376a48d9_18763349 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cine+</title>
        <link rel="stylesheet" href="./css/templates.css">
        <link rel="stylesheet" href="./css/mainpage.css">
    </head>

    <body>

        <nav>
            <ul class="ul-navbar">
                <li><a href="#"></a></li>
                <li><a href="#">Cartelera</a></li>
                <li><a href="#">Contáctenos</a></li>
            </ul>
        </nav>

        <div class="slide-container">
            <div class="slider-frame">
                <ul>
                    <li><img src="./img/barbie.jpg" alt=""></li>
                    <li><img src="./img/oppen.jpg" alt=""></li>
                    <li><img src="./img/indianajones.jpg" alt=""></li>
                    <li><img src="./img/misionimposible.jpg" alt=""></li>
                </ul>
            </div>
        </div>

        <div class="subtitle">
            <h1>No te pierdas verlas en la pantalla grande!</h1>
        </div>
        
        <div class="img-container">
            <div class="img-movieposter">
                <a target="_blank" href="./view/oppen.php">
                    <img class="img-midpage" src="./img/oppenposter.jpg">
                </a>
            </div>
            <div class="img-movieposter">
                <a target="_blank" href="#">
                    <img class="img-midpage" src="./img/barbieposter.jpg">
                </a>
            </div>
            <div class="img-movieposter">
                <a target="_blank" href="#">
                    <img class="img-midpage" src="./img/bladerunnerposter.jpg">
                </a>
            </div>
            <div class="img-movieposter">
                <a target="_blank" href="#">
                    <img class="img-midpage" src="./img/indianaposter.jpg">
                </a>
            </div>
            <div class="img-movieposter">
                <a target="_blank" href="#">
                    <img class="img-midpage" src="./img/johnwickposter.jpg">
                </a>
            </div>
            <div class="img-movieposter">
                <a target="_blank" href="#">
                    <img class="img-midpage" src="./img/misionposter.jpg">
                </a>
            </div>
            <div class="img-movieposter">
                <a target="_blank" href="#">
                    <img class="img-midpage" src="./img/sirenasposter.jpg">
                </a>
            </div>
            <div class="img-movieposter">
                <a target="_blank" href="#">
                    <img class="img-midpage" src="./img/spidermanposter.jpg">
                </a>
            </div>
        </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
