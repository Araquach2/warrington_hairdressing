<?php

/**
 * This is the model class for table "lieu".
 *
 * The followings are the available columns in table 'lieu':
 * @property integer $id
 * @property integer $staff_id
 * @property integer $lieu_hours
 * @property integer $description
 * @property integer $date_regarding
 * @property integer $requested_on
 * @property integer $approved
 *
 * The followings are the available model relations:
 * @property Staff $staff
 */
class Lieu extends SalonActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lieu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lieu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lieu_hours, description, date_regarding', 'required'),
			array('lieu_hours', 'numerical', 'integerOnly'=>true), 
			array('requested_on','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, staff_id, lieu_hours, description, date_regarding, requested_on, approved', 'safe', 'on'=>'search'),
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
			'staff' => array(self::BELONGS_TO, 'Staff', 'staff_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'staff_id' => 'Staff Member',
			'lieu_hours' => 'Number of Lieu Hours',
			'description' => 'Description',
			'date_regarding' => 'Date Regarding',
			'requested_on' => 'Requested On',
			'approved' => 'Approved',
	
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('staff_id',$this->staff_id);
		$criteria->compare('lieu_hours',$this->lieu_hours);
		$criteria->compare('description',$this->description);
		$criteria->compare('date_regarding',$this->date_regarding);
		$criteria->compare('requested_on',$this->requested_on);
		$criteria->compare('approved',$this->approved);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}