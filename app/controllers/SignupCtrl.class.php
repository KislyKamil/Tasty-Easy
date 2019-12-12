<?php

namespace app\controllers;

use app\forms\SignupForm;
use core\App;
use core\Utils;
use core\ParamUtils;

/**
 * Description of AdminCtrl
 *
 * @author Kamil
 */
class SignupCtrl {

    private $form;
    private $counter;

    public function __construct() {
        $this->form = new SignupForm();
    }

    public function validateSignup() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->adres = ParamUtils::getFromRequest('adres');
        $this->form->phone = ParamUtils::getFromRequest('phone');

        
           
        $this->counter = App::getDB()->count("customer","list_id",[
            "list_id[>=]" => 0
        ]);



        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu!');
        }
        if (empty($this->form->password)) {
            Utils::addErrorMessage('Nie podano hasła!');
        }
        if (empty($this->form->adres)) {
            Utils::addErrorMessage('Nie podano adresu!');
        }
        if (empty($this->form->phone)) {
            Utils::addErrorMessage('Nie podano nr telefonu!');
        }


        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function checkForms() {

        if ($this->form->login == App::getDB()->get("customer", "login", [
                    "login" => $this->form->login
                ])) {
            Utils::addErrorMessage('Takie konto już istnieje!');
        }



        if (preg_match('/^\d{9}$/', $this->form->phone)) {
            
        } else {
            Utils::addErrorMessage('Numer telefonu nie może mieć więcej niż 9 cyfr');
        }


        if ($this->form->phone == App::getDB()->get("customer", "phone", [
                    "phone" => $this->form->phone
                ])) {
            Utils::addErrorMessage('Taki numer jest już zajęty!');
        }




        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_signupShow() {
        $this->generateView();
    }

    public function action_signup() {
        if ($this->validateSignup() && $this->checkForms()) {


            App::getDB()->insert("customer", [
                "login" => $this->form->login,
                "passwd" => password_hash($this->form->password, PASSWORD_DEFAULT),
                "address" => $this->form->adres,
                "phone" => $this->form->phone,
                "list_id" => $this->counter
            ]);



            Utils::addErrorMessage('Rejestracja pomyslna');
            App::getRouter()->redirectTo("login");
        } else {

            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);

        App::getSmarty()->display('SignupView.tpl');
    }

}
