<?php $action = Yii::app()->controller->action->id;?>
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

<header id="header_wrapper" >
    <div class="container">
        <div class="header_box">
            <div class="logo"><a href="<?= Yii::app()->baseUrl; ?>"><img src="<?= Yii::app()->theme->baseUrl; ?>/bin/img/logo.png" alt="logo"></a></div>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> 
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> </button>
                </div>
                <div id="main-nav" class="collapse navbar-collapse navStyle">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="<?php if ($action=='login' ||$action=='regusu'){ echo '';}else{ echo 'active';}?>">
                            <a href="<?= Yii::app()->controller->createUrl("{$this->id}/index") ?>#hero_section" class="scroll-link">Inicio</a>
                        </li>
                        <li>
                            <a href="<?= Yii::app()->controller->createUrl("{$this->id}/index") ?>#aboutUs" class="scroll-link">Nosotros</a>
                        </li>
                        <li>
                            <a href="<?= Yii::app()->controller->createUrl("{$this->id}/index") ?>#service" class="scroll-link">Servicios</a>
                        </li>
                        <!--<li><a href="#Portfolio" class="scroll-link">Portafolio</a></li>-->
                        <li>
                            <a href="<?= Yii::app()->controller->createUrl("{$this->id}/index") ?>#clients" class="scroll-link">Tecnolog&iacute;a</a>
                        </li>
                        <!--<li><a href="#team" class="scroll-link">Equipo</a></li>-->
                        <li>
                            <a href="<?= Yii::app()->controller->createUrl("{$this->id}/index") ?>#contact" class="scroll-link">Contacto</a>
                        </li>
                        <li class="<?php if ($action=='login' ||$action=='regusu'){ echo 'active';}else{ echo '';}?>">
                            <a href="<?= Yii::app()->controller->createUrl("{$this->id}/login") ?>" class="scroll-link">Acceso</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>