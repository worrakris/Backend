<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    private $_id;
    private $userType;
    private $userStatus;

    public function authenticate() {
        $username = strtolower($this->username);
        $user = UserAccount::model()->findByPk($username);
        if ($user === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if (!$user->validatePassword($this->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else if ($user->user_status === "Inactive") {
            $this->errorCode = self::ERROR_UNKNOWN_IDENTITY;
        } else {
            $this->_id = $user->user_id;
            $this->userType = $user->user_type;
            $this->username = $user->username;
            $this->userStatus = $user->user_status;
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

    public function getUserType() {
        return $this->userType;
    }

    public function getUserStatus() {
        return $this->userStatus;
    }

}
