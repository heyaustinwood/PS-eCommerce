<?php

use Phalcon\Mvc\Model\Validator\Email as EmailValidator;
use Phalcon\Mvc\Model\Validator\Uniqueness as UniquenessValidator;

class Users extends Phalcon\Mvc\Model {

	public $id;
	public $username;
	public $password;
	public $regions;
	public $role;

    public function initialize() {
        $this->setSource("users");
    }

    /*
    public function validation() {
        $this->validate(new EmailValidator(array(
            'field' => 'email'
        )));

        $this->validate(new UniquenessValidator(array(
            'field' => 'email',
            'message' => 'Sorry, The email was registered by another user'
        )));

        $this->validate(new UniquenessValidator(array(
            'field' => 'username',
            'message' => 'Sorry, That username is already taken'
        )));
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }
    */
}