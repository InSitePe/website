<?php

/**
 * This is the model class for table "tb_ins_sis_user".
 *
 * The followings are the available columns in table 'tb_ins_sis_user':
 * @property string $id_user
 * @property string $nombre_user
 * @property string $apellido_padre_user
 * @property string $apellido_madre_user
 * @property string $dni_user
 * @property string $direccion_user
 * @property string $correo_user
 * @property string $telefono_user
 * @property string $nacimiento_user
 * @property string $foto_user
 * @property integer $estado_user
 */
class ModelUser extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tb_ins_sis_user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_user, nombre_user, apellido_padre_user, apellido_madre_user, dni_user, correo_user, nacimiento_user', 'required'),
            array('estado_user', 'numerical', 'integerOnly' => true),
            array('id_user', 'length', 'max' => 32),
            array('nombre_user, apellido_padre_user, apellido_madre_user, direccion_user, correo_user, telefono_user', 'length', 'max' => 255),
            array('dni_user', 'length', 'max' => 10),
            array('foto_user', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_user, nombre_user, apellido_padre_user, apellido_madre_user, dni_user, direccion_user, correo_user, telefono_user, nacimiento_user, foto_user, estado_user', 'safe', 'on' => 'search'),
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
            'id_user' => 'Id User',
            'nombre_user' => 'Nombre User',
            'apellido_padre_user' => 'Apellido Padre User',
            'apellido_madre_user' => 'Apellido Madre User',
            'dni_user' => 'Dni User',
            'direccion_user' => 'Direccion User',
            'correo_user' => 'Correo User',
            'telefono_user' => 'Telefono User',
            'nacimiento_user' => 'Nacimiento User',
            'foto_user' => 'Foto User',
            'estado_user' => 'Estado User',
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

        $criteria->compare('id_user', $this->id_user, true);
        $criteria->compare('nombre_user', $this->nombre_user, true);
        $criteria->compare('apellido_padre_user', $this->apellido_padre_user, true);
        $criteria->compare('apellido_madre_user', $this->apellido_madre_user, true);
        $criteria->compare('dni_user', $this->dni_user, true);
        $criteria->compare('direccion_user', $this->direccion_user, true);
        $criteria->compare('correo_user', $this->correo_user, true);
        $criteria->compare('telefono_user', $this->telefono_user, true);
        $criteria->compare('nacimiento_user', $this->nacimiento_user, true);
        $criteria->compare('foto_user', $this->foto_user, true);
        $criteria->compare('estado_user', $this->estado_user);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ModelUser the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
