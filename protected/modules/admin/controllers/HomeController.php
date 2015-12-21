<?php

class HomeController extends Controller {

    public function init() {
        Yii::app()->theme = 'admin';
        parent::init();
    }

    public function actionIndex() {
        $this->layout = '//layouts/main';

        $this->render('index');
    }

    public function actionProyect() {
        $this->layout = '//layouts/main';

        $this->render('proyecto');
    }

}
