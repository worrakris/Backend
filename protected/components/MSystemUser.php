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
            return Yii::app()->user->username;
        } else {
            return null;
        }
    }

    function getFirstname() {
        if (!empty(Yii::app()->user->id)) {
            $user = $this->loadUserInfo(Yii::app()->user->id);
            if (Yii::app()->user->userType === "Member") {
                $firstname = $user->member_firstname;
            } else {
                $firstname = $user->staff_firstname;
            }
            return $firstname;
        } else {
            return null;
        }
    }

    function getMiddlename() {
        if (!empty(Yii::app()->user->id)) {
            $middlename = "";
            $user = $this->loadUserInfo(Yii::app()->user->id);
            if (Yii::app()->user->userType === "Member") {
                $middlename = $user->member_middlename;
            }
            return $middlename;
        } else {
            return null;
        }
    }

    function getLastname() {
        if (!empty(Yii::app()->user->id)) {
            $lastname = "";
            $user = $this->loadUserInfo(Yii::app()->user->id);
            if (Yii::app()->user->userType === "Member") {
                $lastname = $user->member_lastname;
            } else {
                $lastname = $user->staff_lastname;
            }
            return $lastname;
        } else {
            return null;
        }
    }

    // access it by Yii::app()->user->language
    function getLanguage() {
        if (!empty(Yii::app()->user->id)) {
            $dfLang = "en";
            $user = $this->loadUser(Yii::app()->user->id);
            if (Yii::app()->user->userType === "Member") {
                $dfLang = $user->member_default_language;
            }
            return $dfLang;
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

    protected function loadUserInfo($id = null) {
        if ($this->_model === null) {
            if ($id !== null) {
                if (Yii::app()->user->userType === "Member") {
                    $this->_model = SystemMember::model()->findByPk($id);
                } else {
                    $this->_model = POSStaff::model()->findByPk($id);
                }
            }
        }
        return $this->_model;
    }

    protected function loadUserAccountInfo($id = null) {
        if ($this->_model === null) {
            if ($id !== null) {

            } else {

            }
        } else {

        }
    }

}
