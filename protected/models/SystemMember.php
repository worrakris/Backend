<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property string $member_id
 * @property string $member_firstname
 * @property string $member_middlename
 * @property string $member_lastname
 * @property string $member_birthday
 * @property string $member_pic_profile
 * @property string $member_company_name
 * @property string $member_name_onwebsite
 * @property string $member_name_oncheque
 * @property string $member_contact_person
 * @property string $member_company_email
 * @property string $member_company_address
 * @property string $member_home_phone
 * @property string $member_business_phone
 * @property string $member_fax_number
 * @property string $member_language
 * @property string $member_receive_email
 * @property string $member_email_format
 * @property string $member_sms_phone
 * @property string $member_receive_sms
 * @property string $member_skype_account
 * @property string $member_create_date
 * @property string $member_update_date
 * @property string $member_status
 * @property string $member_default_language
 * @property string $shop_id
 */
class SystemMember extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_firstname, member_lastname, member_name_oncheque, member_contact_person, member_company_email, member_company_address, member_business_phone', 'required'),
			array('member_firstname, member_middlename, member_lastname, member_skype_account', 'length', 'max'=>100),
			array('member_pic_profile, member_name_onwebsite, member_name_oncheque', 'length', 'max'=>255),
			array('member_company_name', 'length', 'max'=>250),
			array('member_contact_person, member_company_email', 'length', 'max'=>150),
			array('member_home_phone, member_business_phone, member_fax_number, member_language, member_sms_phone', 'length', 'max'=>45),
			array('member_receive_email, member_receive_sms, member_default_language', 'length', 'max'=>3),
			array('member_email_format', 'length', 'max'=>5),
			array('member_status', 'length', 'max'=>8),
			array('shop_id', 'length', 'max'=>11),
			array('member_birthday, member_create_date, member_update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('member_id, member_firstname, member_middlename, member_lastname, member_birthday, member_pic_profile, member_company_name, member_name_onwebsite, member_name_oncheque, member_contact_person, member_company_email, member_company_address, member_home_phone, member_business_phone, member_fax_number, member_language, member_receive_email, member_email_format, member_sms_phone, member_receive_sms, member_skype_account, member_create_date, member_update_date, member_status, member_default_language, shop_id', 'safe', 'on'=>'search'),
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
			'member_id' => 'Member',
			'member_firstname' => 'Member Firstname',
			'member_middlename' => 'Member Middlename',
			'member_lastname' => 'Member Lastname',
			'member_birthday' => 'Member Birthday',
			'member_pic_profile' => 'Member Pic Profile',
			'member_company_name' => 'Member Company Name',
			'member_name_onwebsite' => 'Member Name Onwebsite',
			'member_name_oncheque' => 'Member Name Oncheque',
			'member_contact_person' => 'Member Contact Person',
			'member_company_email' => 'Member Company Email',
			'member_company_address' => 'Member Company Address',
			'member_home_phone' => 'Member Home Phone',
			'member_business_phone' => 'Member Business Phone',
			'member_fax_number' => 'Member Fax Number',
			'member_language' => 'Member Language',
			'member_receive_email' => 'Member Receive Email',
			'member_email_format' => 'Member Email Format',
			'member_sms_phone' => 'Member Sms Phone',
			'member_receive_sms' => 'Member Receive Sms',
			'member_skype_account' => 'Member Skype Account',
			'member_create_date' => 'Member Create Date',
			'member_update_date' => 'Member Update Date',
			'member_status' => 'Member Status',
			'member_default_language' => 'Member Default Language',
			'shop_id' => 'Shop',
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

		$criteria->compare('member_id',$this->member_id,true);
		$criteria->compare('member_firstname',$this->member_firstname,true);
		$criteria->compare('member_middlename',$this->member_middlename,true);
		$criteria->compare('member_lastname',$this->member_lastname,true);
		$criteria->compare('member_birthday',$this->member_birthday,true);
		$criteria->compare('member_pic_profile',$this->member_pic_profile,true);
		$criteria->compare('member_company_name',$this->member_company_name,true);
		$criteria->compare('member_name_onwebsite',$this->member_name_onwebsite,true);
		$criteria->compare('member_name_oncheque',$this->member_name_oncheque,true);
		$criteria->compare('member_contact_person',$this->member_contact_person,true);
		$criteria->compare('member_company_email',$this->member_company_email,true);
		$criteria->compare('member_company_address',$this->member_company_address,true);
		$criteria->compare('member_home_phone',$this->member_home_phone,true);
		$criteria->compare('member_business_phone',$this->member_business_phone,true);
		$criteria->compare('member_fax_number',$this->member_fax_number,true);
		$criteria->compare('member_language',$this->member_language,true);
		$criteria->compare('member_receive_email',$this->member_receive_email,true);
		$criteria->compare('member_email_format',$this->member_email_format,true);
		$criteria->compare('member_sms_phone',$this->member_sms_phone,true);
		$criteria->compare('member_receive_sms',$this->member_receive_sms,true);
		$criteria->compare('member_skype_account',$this->member_skype_account,true);
		$criteria->compare('member_create_date',$this->member_create_date,true);
		$criteria->compare('member_update_date',$this->member_update_date,true);
		$criteria->compare('member_status',$this->member_status,true);
		$criteria->compare('member_default_language',$this->member_default_language,true);
		$criteria->compare('shop_id',$this->shop_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SystemMember the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
