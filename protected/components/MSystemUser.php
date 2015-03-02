<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BackOfficeUser
 *
 * @author Worrakris
 */
class MSystemUser extends CWebUser {

    private $_model;
    public $loginUrl = array('login');

    // access it by Yii::app()->user->username
    function getUsername() {
        if (!empty(Yii::app()->user->id)) {
            $user = $this->loadUser(Yii::app()->user->id);
            return $user->userAccount->username;
        } else {
            return null;
        }
    }

    function getFirstname() {
        if (!empty(Yii::app()->user->id)) {
            $user = $this->loadUser(Yii::app()->user->id);
            $fullName = $user->member_firstname;
            return $fullName;
        } else {
            return null;
        }
    }

    function getMiddlename() {
        if (!empty(Yii::app()->user->id)) {
            $user = $this->loadUser(Yii::app()->user->id);
            $fullName = $user->member_middlename;
            return $fullName;
        } else {
            return null;
        }
    }

    function getLastname() {
        if (!empty(Yii::app()->user->id)) {
            $user = $this->loadUser(Yii::app()->user->id);
            $fullName = $user->member_lastname;
            return $fullName;
        } else {
            return null;
        }
    }

    function getFullname() {
        if (!empty(Yii::app()->user->id)) {
            $user = $this->loadUser(Yii::app()->user->id);
            $fullName = $user->member_firstname . " " . $user->member_middlename . " " . $user->member_lastname;
            return $fullName;
        } else {
            return null;
        }
    }

    // access it by Yii::app()->user->language
    function getLanguage() {
        if (!empty(Yii::app()->user->id)) {
            $user = $this->loadUser(Yii::app()->user->id);
            return $user->member_default_language;
        } else {
            return null;
        }
    }

    // access it by Yii::app()->user->email
    function getEmail() {
        if (!empty(Yii::app()->user->id)) {
            $user = $this->loadUser(Yii::app()->user->id);
            return $user->member_company_email;
        } else {
            return null;
        }
    }

    // access it by Yii::app()->user->picture
    function getPicture() {
        if (!empty(Yii::app()->user->id)) {
            $user = $this->loadUser(Yii::app()->user->id);
            return $user->member_pic_profile;
        } else {
            return null;
        }
    }

    protected function loadUser($id = null) {
        if ($this->_model === null) {
            if ($id !== null):
                if (Yii::app()->user->userType === "Member") {

                } else {

                }
            //$this->_model = Member::model()->with('userAccount')->findByPk($id);
            else:
                $this->_model->member_id = 0;
            endif;
        }
        return $this->_model;
    }

}
