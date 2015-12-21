<?php

/**
 * This is the model class for table "tb_ins_sis_proyectos".
 *
 * The followings are the available columns in table 'tb_ins_sis_proyectos':
 * @property integer $proyecto_id
 * @property string $nombre_proyecto
 * @property string $f_inicio_proyecto
 * @property string $f_produccion_proyecto
 * @property integer $estado_proyecto
 */
class ModelProyectos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_ins_sis_proyectos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_proyecto', 'required'),
			array('estado_proyecto', 'numerical', 'integerOnly'=>true),
			array('nombre_proyecto', 'length', 'max'=>255),
			array('f_inicio_proyecto, f_produccion_proyecto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('proyecto_id, nombre_proyecto, f_inicio_proyecto, f_produccion_proyecto, estado_proyecto', 'safe', 'on'=>'search'),
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
			'proyecto_id' => 'Proyecto',
			'nombre_proyecto' => 'Nombre Proyecto',
			'f_inicio_proyecto' => 'F Inicio Proyecto',
			'f_produccion_proyecto' => 'F Produccion Proyecto',
			'estado_proyecto' => 'Estado Proyecto',
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

		$criteria->compare('proyecto_id',$this->proyecto_id);
		$criteria->compare('nombre_proyecto',$this->nombre_proyecto,true);
		$criteria->compare('f_inicio_proyecto',$this->f_inicio_proyecto,true);
		$criteria->compare('f_produccion_proyecto',$this->f_produccion_proyecto,true);
		$criteria->compare('estado_proyecto',$this->estado_proyecto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelProyectos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
