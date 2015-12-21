<?php $data = Yii::app()->user->getState('data'); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>InSite :: Group</title>
    <!-- Custom CSS -->
    <link href="<?= Yii::app()->theme->baseUrl; ?>/bin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= Yii::app()->theme->baseUrl; ?>/bin/css/font-awesome.css" rel="stylesheet">
    <link href="<?= Yii::app()->theme->baseUrl; ?>/bin/css/animate.css" rel="stylesheet">
    <link href="<?= Yii::app()->theme->baseUrl; ?>/bin/css/style.css" rel="stylesheet">
    <link href="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery.niftymodals/css/component.css" rel="stylesheet"> 

    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/respond-1.1.0.min.js"></script>
    <script src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/html5shiv.js"></script>
    <script src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/html5element.js"></script>
    <![endif]--> 

    <script src="<?= Yii::app()->theme->baseUrl; ?>/bin/js/jquery-1.11.0.min.js"></script>
</head>

<header id="header_wrapper_admin" >
    <div class="container">
        <div class="logo_admin">
            <a href="<?= Yii::app()->baseUrl; ?>"><img src="<?= Yii::app()->theme->baseUrl; ?>/bin/img/logo.png" alt="logo"></a>
        </div>
        <div class="box_user click-nav pull-right">
            <ul class="no-js">
                <li>
                    <a href="#" class="clicker"> 
                        <?= ucwords($data['nombre_user'] . ' ' . $data['apellido_padre_user'] . ' ' . $data['apellido_madre_user']); ?>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Perfil</a></li>
                        <li><a href="<?= Yii::app()->controller->createUrl("site/Logout") ?>">Sign out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>