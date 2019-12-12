<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;

/**
 * Description of AdminCtrl
 *
 * @author Kamil
 */
class OrderCtrl {

    public $rows;
    public $img;
    public $name;
    public $role;
    private $id;
    public $cart;
    public $idx;

    public function __construct() {
        
    }

    public function validate() {
        $this->emailForm->name = ParamUtils::getFromRequest('name');

        $this->emailForm->msg = ParamUtils::getFromRequest('message');
    }

    public function action_orderShow() {


        $this->generateView();
    }

    public function action_addProduct() {

        $this->id = ParamUtils::getFromCleanURL(1);

      

        if (!SessionUtils::loadObject('cart', $keep = true)) {
            $this->cart [] = $this->id;

            SessionUtils::storeObject('cart', $this->cart);

            App::getDB()->insert("cart", [
                "product_id" => $this->id,
                "name" => SessionUtils::load('name', $keep = true)
            ]);
            
            

            
        } else {
            $this->cart = SessionUtils::loadObject('cart', $keep = true);

            array_push($this->cart, $this->id);

            App::getDB()->insert("cart", [
                "product_id" => $this->id,
                "name" => SessionUtils::load('name', $keep = true)
            ]);
           

            SessionUtils::storeObject('cart', $this->cart);
        }

        $this->generateCartView();
    }

    public function action_OrderDefault() {
        $this->generateDefaultView();
    }

    public function generateView() {

        $this->role = SessionUtils::load('role', $keep = true);

        $this->name = SessionUtils::load('name', $keep = true);

        $this->rows = App::getDB()->count("menu", [
            "meal_id[>=]" => 1
        ]);

        $this->img = App::getDB()->count("menu", [
            "meal_id[>=]" => 1
        ]);




        App::getSmarty()->assign('idx', $this->idx);
        App::getSmarty()->assign('role', $this->role);
        App::getSmarty()->assign('rows', $this->rows);
        App::getSmarty()->assign('img', $this->img);
        App::getSmarty()->assign('name', $this->name);
        App::getSmarty()->display('AppView.tpl');
    }

    public function generateDefaultView() {


        App::getSmarty()->display('DefaultView.tpl');
    }

    public function generateCartView() {

        //App::getSmarty()->assign('idx', $this->idx);
        App::getSmarty()->display('cartAdd.tpl');
    }

}
