<div class="row">
    <div class="col-lg-4 col-lg-offset-4  fadeInRight animated wow">
        <div class="login_wrapper no-padding col-lg-12 fadeInRight animated wow">
            <div class="login_header">
                <div class='text-center no-padding'>Acceso</div>
            </div>
            <div class="col-lg-12 login_body">
                <div class="col-lg-12 login_content">
                    <p>Por favor ingrese sus credenciales de acceso: </p>
                    <div class="text-danger text-center">
                        <?php if(isset($error)){echo $error;} ?>
                    </div>
                    <form method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Usuario" required="required" name="FormLogin[name_login]" type="text" maxlength="255">                            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" placeholder="Contraseña" required="required" name="FormLogin[clave_login]" type="password" maxlength="32">
                            </div>
                        </div>
                        <a class="btn btn-primary btn-sm pull-left" href="<?= Yii::app()->controller->createUrl("{$this->id}/regusu") ?>">Registrarse</a>
                        <?php echo CHtml::submitButton('Ingresar', array('class' => 'btn btn-success btn-sm pull-right', 'name' => 'ingr_user')); ?>

                    </form>
                </div>
            </div>
        </div>
        <div class="text-center no-padding fadeInUpBig delay-02s animated wow" style="margin-top: -2%">
            Copyright © 2015, InSite by <a href="http://insite.pe">InSite Group </a>. 
        </div> 
    </div>
</div>





