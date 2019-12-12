<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;

/**
 * Description of AdminCtrl
 *
 * @author Kamil
 */
class loginCtrl {

    private $form;
    private $id;
    private $loginVerify;
    private $passwdVerify;
    private $verify;
    public $name;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validateLogin() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');


        if (!isset($this->form->login))
            return false;





        $this->loginVerify = App::getDB()->get("customer", "login", [
            "id" => $this->form->login
        ]);
        $this->passwdVerify = App::getDB()->get("customer", "passwd", [
            "login" => $this->form->login
        ]);





        if (App::getMessages()->isError()) {
            return false;
        }

        return !App::getMessages()->isError();
    }

    public function verify() {

        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        $this->loginVerify = App::getDB()->get("customer", "login", [
            "login" => $this->form->login
        ]);

        $this->passwdVerify = App::getDB()->get("customer", "passwd", [
            "login" => $this->form->login
        ]);

        if ($this->form->login == $this->loginVerify) {
            
        } else {
            Utils::addErrorMessage('Nie ma takiego konta');
        }

        if ($this->form->login == 'admin') {
            RoleUtils::addRole('admin');
            SessionUtils::store('role', 'admin');
        } else {
            RoleUtils::addRole('user');
            SessionUtils::store('role', 'user');
        }


        if (password_verify($this->form->pass, $this->passwdVerify)) {

            $this->id = App::getDB()->get("customer", "id", [
                "login" => $this->form->login
            ]);
        } else {
            Utils::addErrorMessage('Błędne hasło');
        }

        if (App::getMessages()->isError()) {
            return false;
        }


        return !App::getMessages()->isError();
    }

    public function action_loginShow() {

        $this->generateView();
    }

    public function action_login() {
        if ($this->validateLogin() && $this->verify()) {


            SessionUtils::store('id', $this->id);
            SessionUtils::store('name', $this->form->login);


            App::getRouter()->redirectTo("orderShow");
        } else {

            $this->generateView();
        }
    }

    public function action_logout() {

        session_destroy();

        App::getRouter()->redirectTo('orderDefault');
    }

    public function action_goSignup() {
        session_destroy();

        App::getRouter()->redirectTo('signupShow');
    }

    public function generateView() {


        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('LoginView.tpl');
    }

}
