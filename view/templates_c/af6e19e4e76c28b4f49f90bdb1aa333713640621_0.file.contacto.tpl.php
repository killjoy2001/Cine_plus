<?php
/* Smarty version 4.3.1, created on 2023-07-25 21:14:10
  from 'C:\wamp64\www\proyecto2\cineplus\view\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c03b22a598b5_43181906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af6e19e4e76c28b4f49f90bdb1aa333713640621' => 
    array (
      0 => 'C:\\wamp64\\www\\proyecto2\\cineplus\\view\\templates\\contacto.tpl',
      1 => 1690319574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64c03b22a598b5_43181906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 bordeRegistro">
            <h2 class="text-center">Contáctenos</h2>
            <form name="index.php" method="post">
            <input type="hidden" name="accion" value="datosForm"> 
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
                                <input type="text" class="form-control" placeholder="Número teléfono" name="telefono"
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
                        <button type="submit" class="btn btn-warning btn-lg " style="margin-bottom: 10px">
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
