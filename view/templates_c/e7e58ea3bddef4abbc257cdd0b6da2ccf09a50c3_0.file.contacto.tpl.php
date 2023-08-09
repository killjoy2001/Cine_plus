<?php
/* Smarty version 4.3.1, created on 2023-07-24 21:13:30
  from 'C:\xampp\htdocs\progra_3\proyecto2\cineplus\view\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64becd5addcfc6_54678110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7e58ea3bddef4abbc257cdd0b6da2ccf09a50c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra_3\\proyecto2\\cineplus\\view\\templates\\contacto.tpl',
      1 => 1690216160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64becd5addcfc6_54678110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row eng">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">Contáctenos</h3>
            <form name="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls">

                                <input type="text" class="form-control" placeholder="Nombre" name="nombre" required
                                    aria-invalid="false">
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls">

                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls">
                                <input type="text" class="form-control" placeholder="Número teléfono" name="numCel"
                                    required>
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 controls">

                        <textarea rows="5" class="form-control" placeholder="Message" name="mensaje"
                            required></textarea>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-12">

                        <!-- Submit BTN -->
                        <button type="submit" name="submit" class="btn btn-primary btn-lg " id=""
                            style="margin-bottom: 10px">
                            Enviar Mensaje
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
