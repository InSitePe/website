<!DOCTYPE html>
<html lang="es-ES">
    <!-- ====HEADER - START==== -->
    <?php $this->renderPartial("//layouts/header"); ?>
    <!-- ====HEADER - END==== -->

    <!-- ====BODY - START==== -->
    <body class="animated">
        <div id="cl-wrapper">
            <!-- ====MENU USUARIO - START==== -->

            <?php $this->renderPartial("//layouts/slider-user"); ?>

            <!-- ====MENU USUARIO - END==== -->            
            <div class="container-fluid" id="pcont">
                <!-- ====MENU HORIZONTAL - START==== -->
                <?php $this->renderPartial("//layouts/slider-nav"); ?>
                <!-- ====MENU HORIZONTAL - END==== -->

                <div class="cl-mcont">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-head">
                                <?php if (isset($this->breadcrumbs)): ?>
                                    <?php
                                    $this->widget('zii.widgets.CBreadcrumbs', array(
                                        'htmlOptions' => array('class' => 'breadcrumb'),
                                        'tagName' => 'ol',
                                        'separator' => '',
                                        'inactiveLinkTemplate' => '<li class="active">{label}</li>',
                                        'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
                                        'links' => $this->breadcrumbs
                                    ));
                                    ?>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <?php if (isset($this->titleView)): ?>
                            <div class="col-xs-12">
                                <h1 class="text-center"><?=$this->titleView?></h1>
                            </div>
                        <?php endif; ?> 

                        <div class="col-xs-12">
                            <?php if (($msgs = Yii::app()->user->getFlashes()) !== null): ?>
                                <?php foreach ($msgs as $type => $message): ?>
                                    <div class="alert alert-block alert-<?= $type ?>">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <i class="<?= Utils::iconFlash($type) ?>"></i>
                                        <?= $message ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- ====CONTENIDO - START==== -->
                    <?= $content; ?>
                    <!-- ====CONTENIDO - END==== -->
                </div>
            </div>
        </div>

        <!-- ====SLIDER CHAT - START==== -->
        <?php $this->renderPartial("//layouts/slider-chat"); ?>
        <!-- ====SLIDER CHAT - END==== -->


        <!-- ====SCRIPTS GENERALES - START==== -->
        <script src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.cookie/jquery.cookie.js"></script>
        <script src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.pushmenu/js/jPushMenu.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.ui/jquery-ui.js" ></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/behaviour/core.js"></script>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/bootstrap/dist/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.flot/jquery.flot.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.flot/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.flot/jquery.flot.labels.js"></script>

        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/holder/holder.js"></script>
        <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/aulaapp/main.js"></script>
        <!-- ====SCRIPTS GENERALES - END==== -->

    </body>
    <!-- ====BODY - END==== -->

</html>
