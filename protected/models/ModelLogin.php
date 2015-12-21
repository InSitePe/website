<?php

/**
 * This is the model class for table "tb_ins_sis_login".
 *
 * The followings are the available columns in table 'tb_ins_sis_login':
 * @property string $id_login
 * @property string $name_login
 * @property string $clave_login
 * @property integer $estado_login
 */
class ModelLogin extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tb_ins_sis_login';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_login, name_login, clave_login', 'required'),
            array('estado_login', 'numerical', 'integerOnly' => true),
            array('id_login', 'length', 'max' => 32),
            array('name_login, clave_login', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_login, name_login, clave_login, estado_login', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_login' => 'Id Login',
            'name_login' => 'Name Login',
            'clave_login' => 'Clave Login',
            'estado_login' => 'Estado Login',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_login', $this->id_login, true);
        $criteria->compare('name_login', $this->name_login, true);
        $criteria->compare('clave_login', $this->clave_login, true);
        $criteria->compare('estado_login', $this->estado_login);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ModelLogin the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function verificaUser($username, $password) {
        $sql = "CALL `sp_ins_validar_acceso` (:usename, :password)";

        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":usename", $username, PDO::PARAM_STR);
        $command->bindParam(":password", $password, PDO::PARAM_STR);
        $model = $command->queryAll();
        
        $datos = array();
        foreach ($model as $k => $v) {
            $datos['error'] = $v['error'];
            if ($v['error'] === NULL) {
                $datos['session'] = true;
                $datos['id_login'] = $v['id_user'];
                $datos['nombre_user'] = $v['nombre_user'];
                $datos['apellido_padre_user'] = $v['apellido_padre_user'];
                $datos['apellido_madre_user'] = $v['apellido_madre_user'];
                $datos['apellido_madre_user'] = $v['apellido_madre_user'];
                $datos['dni_user'] = $v['dni_user'];
                $datos['correo_user'] = $v['correo_user'];
                $datos['telefono_user'] = $v['telefono_user'];
                $datos['nacimiento_user'] = $v['nacimiento_user'];
                $datos['foto_user'] = $v['foto_user'];
            } else {
                $datos['message'] = $v['message'];
            }
        }

        return $datos;
    }

}
