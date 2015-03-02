<?php

/**
 * This is the model class for table "tbl_user_account".
 *
 * The followings are the available columns in table 'tbl_user_account':
 * @property string $username
 * @property string $passkey
 * @property string $user_id
 * @property string $user_type
 * @property string $create_date
 * @property string $update_date
 * @property string $user_status
 */
class UserAccount extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_user_account';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, passkey, user_id, user_type, update_date', 'required'),
            array('username', 'length', 'max' => 100),
            array('passkey', 'length', 'max' => 50),
            array('user_id', 'length', 'max' => 10),
            array('user_type', 'length', 'max' => 6),
            array('user_status', 'length', 'max' => 8),
            array('create_date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('username, passkey, user_id, user_type, create_date, update_date, user_status', 'safe', 'on' => 'search'),
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
            'username' => 'Username',
            'passkey' => 'Passkey',
            'user_id' => 'User',
            'user_type' => 'User Type',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'user_status' => 'User Status',
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

        $criteria->compare('username', $this->username, true);
        $criteria->compare('passkey', $this->passkey, true);
        $criteria->compare('user_id', $this->user_id, true);
        $criteria->compare('user_type', $this->user_type, true);
        $criteria->compare('create_date', $this->create_date, true);
        $criteria->compare('update_date', $this->update_date, true);
        $criteria->compare('user_status', $this->user_status, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return UserAccount the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function validatePassword($pass) {
        return (md5($pass) === $this->passkey);
    }

}
