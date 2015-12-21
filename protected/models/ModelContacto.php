<?php

/**
 * This is the model class for table "tb_ins_web_contacto".
 *
 * The followings are the available columns in table 'tb_ins_web_contacto':
 * @property string $id_contacto
 * @property string $nombres_contacto
 * @property string $correo_contacto
 * @property string $mensaje_contacto
 * @property string $fecha_contacto
 * @property integer $respuesta_contacto
 * @property integer $estado_contacto
 */
class ModelContacto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_ins_web_contacto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres_contacto, correo_contacto, mensaje_contacto, fecha_contacto', 'required'),
			array('respuesta_contacto, estado_contacto', 'numerical', 'integerOnly'=>true),
			array('nombres_contacto, correo_contacto', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_contacto, nombres_contacto, correo_contacto, mensaje_contacto, fecha_contacto, respuesta_contacto, estado_contacto', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contacto' => 'Id Contacto',
			'nombres_contacto' => 'Nombres Contacto',
			'correo_contacto' => 'Correo Contacto',
			'mensaje_contacto' => 'Mensaje Contacto',
			'fecha_contacto' => 'Fecha Contacto',
			'respuesta_contacto' => 'Respuesta Contacto',
			'estado_contacto' => 'Estado Contacto',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_contacto',$this->id_contacto,true);
		$criteria->compare('nombres_contacto',$this->nombres_contacto,true);
		$criteria->compare('correo_contacto',$this->correo_contacto,true);
		$criteria->compare('mensaje_contacto',$this->mensaje_contacto,true);
		$criteria->compare('fecha_contacto',$this->fecha_contacto,true);
		$criteria->compare('respuesta_contacto',$this->respuesta_contacto);
		$criteria->compare('estado_contacto',$this->estado_contacto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelContacto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
