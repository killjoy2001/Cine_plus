{include file="header.tpl"}
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
    {include file="footer.tpl"}
