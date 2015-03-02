<?php

/**
 * This is the model class for table "pos_staff".
 *
 * The followings are the available columns in table 'pos_staff':
 * @property string $staff_id
 * @property string $shop_profile_shop_id
 * @property string $staff_firstname
 * @property string $staff_lastname
 * @property string $staff_nickname
 * @property string $staff_picture
 * @property string $staff_gender
 * @property string $staff_phone
 * @property string $staff_email
 * @property string $staff_address
 * @property string $staff_birthdate
 * @property string $staff_color
 * @property string $staff_display_menu
 * @property string $staff_create_date
 * @property string $staff_update_date
 * @property integer $staff_plan_id
 * @property string $staff_premission
 */
class POSStaff extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pos_staff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('shop_profile_shop_id, staff_firstname, staff_lastname, staff_phone, staff_email, staff_color, staff_plan_id, staff_premission', 'required'),
			array('staff_plan_id', 'numerical', 'integerOnly'=>true),
			array('shop_profile_shop_id', 'length', 'max'=>11),
			array('staff_firstname, staff_lastname, staff_email', 'length', 'max'=>100),
			array('staff_nickname, staff_color', 'length', 'max'=>45),
			array('staff_picture', 'length', 'max'=>255),
			array('staff_gender', 'length', 'max'=>6),
			array('staff_phone', 'length', 'max'=>60),
			array('staff_display_menu', 'length', 'max'=>4),
			array('staff_premission', 'length', 'max'=>10),
			array('staff_address, staff_birthdate, staff_create_date, staff_update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('staff_id, shop_profile_shop_id, staff_firstname, staff_lastname, staff_nickname, staff_picture, staff_gender, staff_phone, staff_email, staff_address, staff_birthdate, staff_color, staff_display_menu, staff_create_date, staff_update_date, staff_plan_id, staff_premission', 'safe', 'on'=>'search'),
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
			'staff_id' => 'Staff',
			'shop_profile_shop_id' => 'Shop Profile Shop',
			'staff_firstname' => 'Staff Firstname',
			'staff_lastname' => 'Staff Lastname',
			'staff_nickname' => 'Staff Nickname',
			'staff_picture' => 'Staff Picture',
			'staff_gender' => 'Staff Gender',
			'staff_phone' => 'Staff Phone',
			'staff_email' => 'Staff Email',
			'staff_address' => 'Staff Address',
			'staff_birthdate' => 'Staff Birthdate',
			'staff_color' => 'Staff Color',
			'staff_display_menu' => 'Staff Display Menu',
			'staff_create_date' => 'Staff Create Date',
			'staff_update_date' => 'Staff Update Date',
			'staff_plan_id' => 'Staff Plan',
			'staff_premission' => 'Staff Premission',
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

		$criteria->compare('staff_id',$this->staff_id,true);
		$criteria->compare('shop_profile_shop_id',$this->shop_profile_shop_id,true);
		$criteria->compare('staff_firstname',$this->staff_firstname,true);
		$criteria->compare('staff_lastname',$this->staff_lastname,true);
		$criteria->compare('staff_nickname',$this->staff_nickname,true);
		$criteria->compare('staff_picture',$this->staff_picture,true);
		$criteria->compare('staff_gender',$this->staff_gender,true);
		$criteria->compare('staff_phone',$this->staff_phone,true);
		$criteria->compare('staff_email',$this->staff_email,true);
		$criteria->compare('staff_address',$this->staff_address,true);
		$criteria->compare('staff_birthdate',$this->staff_birthdate,true);
		$criteria->compare('staff_color',$this->staff_color,true);
		$criteria->compare('staff_display_menu',$this->staff_display_menu,true);
		$criteria->compare('staff_create_date',$this->staff_create_date,true);
		$criteria->compare('staff_update_date',$this->staff_update_date,true);
		$criteria->compare('staff_plan_id',$this->staff_plan_id);
		$criteria->compare('staff_premission',$this->staff_premission,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return POSStaff the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
