<?php
/* Smarty version 4.3.1, created on 2023-07-25 03:30:37
  from 'C:\wamp64\www\proyecto2\cineplus\view\templates\mainpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bf41dd634625_83758600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e32c51d7bac660640c8c8d75cafd5ca47711e09a' => 
    array (
      0 => 'C:\\wamp64\\www\\proyecto2\\cineplus\\view\\templates\\mainpage.tpl',
      1 => 1690255687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64bf41dd634625_83758600 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        

</head>

<body>
    
    <nav>
        <ul class="ul-navbar">
            <li><a href="index.php?accion=home">Cartelera</a></li>
            <li><a href="index.php?accion=contacto">Contáctenos</a></li>
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
            <a href="index.php?accion=ver_oppen">
                <!-- enlace a pagina de la pelicula -->
                <img src="./img/oppenposter.jpg">
            </a>
        </div>
        <div class="img-movieposter">
            <a href="index.php?accion=ver_barbie">
                <img src="./img/barbieposter.jpg">
            </a>
        </div>
        <div class="img-movieposter">
            <a href="index.php?accion=ver_bladerunner">
                <img src="./img/bladerunnerposter.jpg">
            </a>
        </div>
        <div class="img-movieposter">
            <a href="index.php?accion=ver_indiana">
                <img src="./img/indianaposter.jpg">
            </a>
        </div>
        <div class="img-movieposter">
            <a href="index.php?accion=ver_johnwick">
                <img src="./img/johnwickposter.jpg">
            </a>
        </div>
        <div class="img-movieposter">
            <a href="index.php?accion=ver_misionimposible">
                <img src="./img/misionposter.jpg">
            </a>
        </div>
        <div class="img-movieposter">
            <a href="index.php?accion=ver_sirenas">
                <img src="./img/sirenasposter.jpg">
            </a>
        </div>
        <div class="img-movieposter">
            <a href="index.php?accion=ver_spiderman">
                <img src="./img/spidermanposter.jpg">
            </a>
        </div>
    </div>
    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
