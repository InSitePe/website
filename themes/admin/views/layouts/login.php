<!DOCTYPE html>
<html lang="es-ES">
    <?php $this->renderPartial("//layouts/header"); ?>
    <body class="texture">

        <?php echo $content; ?>
    </div>

    <script src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/behaviour/voice-commands.js"></script>
    <script src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.flot/jquery.flot.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.flot/jquery.flot.labels.js"></script>


</body>

</html>
