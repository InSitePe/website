<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ModelContacto();
        $msg = null;
        if (isset($_POST['FormMail'])) {
            $model->attributes = Yii::app()->request->getPost('FormMail');
            $model->fecha_contacto = date("Y-m-d");
            $transaction = Yii::app()->db->beginTransaction();
            try {
                if (!$model->save()) {
                    throw new Exception("No se puede guardar");
                }
                $transaction->commit();
                $msg['msg'] = "$('#modal').trigger('click');";
            } catch (Exception $exc) {
                $transaction->rollBack();
                $msg['msg'] = "";
            }
        }
        $this->render('index', $msg);
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->layout = '//layouts/main';
        if (Yii::app()->request->getPost('FormLogin') != null) {
            $FormLogin = Yii::app()->request->getPost('FormLogin');

            $access = ModelLogin::verificaUser($FormLogin['name_login'], $FormLogin['clave_login']);

            if ($access['error'] == NULL) {
                Yii::app()->user->setState("data", $access);
                $this->redirect(Yii::app()->controller->createUrl("admin/home/index"));
            } else {
                $this->render('login', array('error' => $access['message']));
            }
        } else {
            $this->render('login');
        }
    }

    public function actionRegUsu() {
        $this->layout = '//layouts/main';
        if (Yii::app()->request->getPost('FormReg') != null) {
            $FormReg = Yii::app()->request->getPost('FormReg');
            $modelUser = new ModelUser();
            $criteria = new CDbCriteria;

            $modelUser->attributes = $FormReg;

            $criteria->addCondition('dni_user = :dni');
            $params['dni'] = $modelUser->dni_user;
            $criteria->params = $params;

            $total = ModelUser::model()->count($criteria);

            if ($total > 0) {
                $this->render('registro', array('msg' => 'DNI ya registrado'));
            } else {
                $modelUser->id_user = ModelKey::getKeyid($modelUser->nombre_user, $modelUser->dni_user);

                $apellido = strtolower(str_replace(' ', '', Utils::verifyUTF($modelUser->apellido_padre_user)));
                $nombre = strtolower(substr(Utils::verifyUTF($modelUser->nombre_user), 0, 1));
                $login = $nombre . $apellido;

                $modelLogin = new ModelLogin();
                $modelLogin->clave_login = ModelKey::getPassworrd($modelUser->dni_user);
                $modelLogin->id_login = $modelUser->id_user;
                $modelLogin->name_login = $login;
                 
                $transaction = Yii::app()->db->beginTransaction();
                try {
                    if (!$modelUser->save()) {
                        throw new Exception("No se puede guardar el usuario");
                    } else {
                        if (!$modelLogin->save()) {
                            throw new Exception("No se puede guardar el login");
                        }else{
                        if ($FormReg['key_proyecto'] != 1) {
                                $modelProyecto = new ModelProyectos;

                                Utils::show($modelProyecto, true);
                            }
                        }
                    }
                    $transaction->commit();
                    $this->redirect(Yii::app()->controller->createUrl("{$this->id}/login"));
                } catch (Exception $exc) {
                    $transaction->rollBack();
                    $msg = $exc->getMessage();
                    $this->render('registro', array('msg' => $msg));
                }
            }
        } else {
            $this->render('registro');
        }
    }

    public function actionverifyKey() {
        $valor = Yii::app()->request->getPost('valor');

        $key = ModelKey::verifyKeyModel($valor);
        if ($key) {
            $data['estado'] = TRUE;
            $data['key'] = $key;
        } else {
            $data['estado'] = FALSE;
            $data['key'] = '';
        }

        echo json_encode($data);
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
