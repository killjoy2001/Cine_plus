<?php
/* Smarty version 4.3.1, created on 2023-07-25 16:55:06
  from 'C:\wamp64\www\proyecto2\cineplus\view\templates\barbie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bffe6acce6b2_63497409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85250d7a43b58416fc2a60fd41155c7d00682e28' => 
    array (
      0 => 'C:\\wamp64\\www\\proyecto2\\cineplus\\view\\templates\\barbie.tpl',
      1 => 1690304104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64bffe6acce6b2_63497409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="grid">
    <div class="container-movie-container">
        <div class="movie-container">

            <label>Película: </label>
            <select id="movie">
                <option class="alert alert-primary" value="3500">Barbie (Precio: 3500 colones)</option>
            </select>

            <label>Selecione el idioma </label>
            <select id="movie">
                <option>Escoger idioma</option>
                <option>DOB</option>
                <option>SUB</option>
            </select>
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
                <form>
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

                    <div class="row mt-3">
                        <div class="form-group col-xs-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalTiquetes">
                                Comprar Tiquetes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="synopsis-container">
        <div class="imgmovie-container">
            <img src="./img/barbieposter.jpg">
        </div>
        <div class="synopsis">
            <h3>Sipnosis</h3>
            <p>Después de ser expulsada de Barbieland por no ser una muñeca de aspecto perfecto, Barbie parte hacia el
                mundo humano para encontrar la verdadera felicidad.</p>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTiquetes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Compra Tiqutets</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary" role="alert">
                    <h4>Ha seleccionado <span id="count">0</span> asientos.</h4>
                    <h4>El valor total es: ₡<span id="total"> 0</span></h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
