<div class="row">
    <div class="col-lg-8 col-lg-offset-2  fadeInRight animated wow">
        <div class="login_wrapper no-padding col-lg-12 fadeInRight animated wow">
            <div class="login_header">
                <div class='text-center no-padding'>REGISTRO</div>
            </div>
            <div class="login_body">
                <form method="POST">
                    <div class="col-lg-12 login_content">
                        <div class="text-danger text-center">
                            <?= (isset($msg) ? $msg : '') ?>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <input class="hidden" name="FormReg[key_proyecto]" id="key_proyecto" type="text" />                            
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input class="form-control input-lg" placeholder="INGRESA LA LLAVE" name="FormReg[key]" id ="FormKey" type="password" maxlength="255">                            
                                    <span class="input-group-addon hidden" id="loading-key"><i class="fa fa-spinner fa-pulse fa-2x fa-fw margin-bottom"></i></span>
                                    <span class="input-group-addon hidden" id="loading-ok"><i class="fa fa-check fa-2x text-success"></i></span>
                                    <span class="input-group-addon hidden" id="loading-wrong"><i class="fa fa-close fa-2x text-danger"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i>&nbsp;</span>
                                    <input class="form-control FormReg" disabled = "disabled" placeholder="Nombres" required="required" name="FormReg[nombre_user]" type="text" maxlength="255">                            
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                                    <input class="form-control FormReg" disabled = "disabled" placeholder="Apellido Paterno" required="required" name="FormReg[apellido_padre_user]" type="text" maxlength="32">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                                    <input class="form-control FormReg" disabled = "disabled" placeholder="Apellido Materno" required="required" name="FormReg[apellido_madre_user]" type="text" maxlength="32">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                                    <input class="form-control FormReg" disabled = "disabled" placeholder="DNI" required="required" name="FormReg[dni_user]" type="number" max="99999999" id ="dni">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input class="form-control FormReg" disabled = "disabled" placeholder="Email" required="required" name="FormReg[correo_user]" type="text" maxlength="255">                            
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                    <input class="form-control FormReg" disabled = "disabled" placeholder="Dirección" name="FormReg[direccion_user]" type="text" maxlength="255">                            
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input class="form-control FormReg" disabled = "disabled" placeholder="Celular"  name="FormReg[telefono_user]" type="text" maxlength="255">                            
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input class="form-control FormReg" disabled = "disabled" required="required" name="FormReg[nacimiento_user]" type="date">                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 top30 bottom15">
                        <?php echo CHtml::submitButton('Registrarse', array('class' => 'btn btn-success btn-sm pull-right FormReg', 'name' => 'ingr_user', 'disabled' => 'disabled')); ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center no-padding fadeInUpBig delay-02s animated wow" style="margin-top: -2%">
            Copyright © 2015,    InSite by <a href="http://insite.pe">InSite Group </a>. 
        </div> 
    </div>
</div>



<script>
    $('#FormKey').blur(function () {
        Validate("<?= Yii::app()->controller->createUrl("{$this->id}/verifyKey") ?>", this.value);
    });
    $(document).ready(function () {
        $("#dni").ForceNumericOnly();
        $('#key_proyecto').val(" ");
    });
</script>

