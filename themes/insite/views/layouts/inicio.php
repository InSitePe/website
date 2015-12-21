<html>
    <?php $this->renderPartial('//layouts/pages/head') ?>

    <!-- /Home_Section--> 
    <section id="hero_section" class="top_cont_outer">
        <div class="hero_wrapper">
            <div class="container">
                <div class="hero_section">
                    <div class="row">
                        <div class="col-lg-5 col-sm-7">
                            <div class="top_left_cont zoomIn wow animated"> 
                                <h2>Somos el  <strong>Grupo InSite</strong> </h2>
                                <p>Una empresa dedicada a brindar soluciones informáticas de alquiler para todas las PYMES</p>
                                <a href="#service" class="read_more2">Más Servicios</a> </div>
                        </div>
                        <div>
                            <img src="<?= Yii::app()->theme->baseUrl; ?>/bin/img/mainImg.png" class="bannerImg zoomIn wow animated" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Home_Section--> 
    <?php $this->renderPartial('//layouts/pages/about') ?>
    <!--/Home_Section--> 

    <!--Service-->
    <?php $this->renderPartial('//layouts/pages/service') ?>
    <!--/Service-->

    <!-- Portfolio -->
    <?php // $this->renderPartial('//layouts/pages/portafolio') ?>
    <!--/Portfolio --> 

    <!--Clientes-->
    <?php $this->renderPartial('//layouts/pages/clientes') ?>
    <!--/Clientes-->

    <!--Team-->
    <?php // $this->renderPartial('//layouts/pages/team') ?>
    <!--/Team-->

    <!--Contacto-->
    <?php $this->renderPartial('//layouts/pages/contact') ?>
    <!--/Contacto-->


    <button class="label label-danger md-trigger hidden" id="modal" data-modal="nft-default-hab" ><i class="fa fa-times"></i></button>

    <div class="md-modal md-effect-1" id="nft-default-hab">
        <div class="md-content">
            <div class="modal-header">
                <div class="text-left">
                    <strong>Notificaciones InSite</strong>
                    <button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="span-24"></div>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class=""><i class="fa fa-thumbs-o-up fa-5x"></i></div>
                    <h4>CORREO ENVIADO</h4>
                    <p>Nos ha llegado un correo con tu solicitud, la atenderemos en un plazo no mayor de 24 horas</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat md-close" data-dismiss="modal">EXCELENTE!</button>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
    <!--Footer-->
    <?php $this->renderPartial('//layouts/pages/footer') ?>
    <!--/Footer-->

    <script type="text/javascript">
        $(document).ready(function () {
<?= $content ?>
        });
    </script>

