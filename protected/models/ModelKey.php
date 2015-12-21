<?php

/**
 * This is the model class for table "tb_ins_sis_key".
 *
 * The followings are the available columns in table 'tb_ins_sis_key':
 * @property string $key_id
 */
class ModelKey extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tb_ins_sis_key';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('key_id', 'required'),
            array('key_id', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('key_id', 'safe', 'on' => 'search'),
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
            'key_id' => 'Key',
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

        $criteria->compare('key_id', $this->key_id, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ModelKey the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function verifyKeyModel($key) {
        $sql = "SELECT key_proyecto FROM tb_ins_sis_key WHERE key_id = '" . $key . "'";
        $command = Yii::app()->db->createCommand($sql);
        $models = $command->queryAll();
        
        if ($models) {
            return $models[0]['key_proyecto'];
        }else{
            return $models;
        }
    }

    public static function getKeyid($param1 = null, $param2 = null) {

        $sql = "SELECT fx_aul_encriptar_id('{$param1}','{$param2}') AS 'key'";
        $command = Yii::app()->aulaapp->createCommand($sql);
        $return = $command->queryAll();


        return $return[0]['key'];
    }

    public static function getPassworrd($param1 = null) {

        $sql = "SELECT fx_aul_encriptar_password('{$param1}') AS 'clave'";
        $command = Yii::app()->aulaapp->createCommand($sql);
        $return = $command->queryAll();


        return $return[0]['clave'];
    }

}
