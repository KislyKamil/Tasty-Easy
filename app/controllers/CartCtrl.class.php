<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;

/**
 * Description of AdminCtrl
 *
 * @author Kamil
 */
class CartCtrl {

    public $role;
    public $name;
    public $cart = [];
    public $count;
    public $meal = [];
    public $id;
    public $del;
    public $done = false;
    public $ix;
    public $index;

    public function __construct() {

        date_default_timezone_set('UTC');
        $this->role = SessionUtils::load('role', $keep = true);

        $this->name = SessionUtils::load('name', $keep = true);

        $this->id = SessionUtils::load('id', $keep = true);

        $this->cart = App::getDB()->select("cart", "product_id", [
            "product_id[>]" => 0,
            "name" => $this->name
        ]);
    }

    public function checkCart() {

        if (isset($this->cart)) {

            $this->count = count($this->cart);
        }
    }

    public function action_cartShow() {



      
        $this->checkCart();

        $this->ix = intval(App::getDB()->get("cart", "id", [
                    "id[>]" => 0
        ]));

        for ($i = 0; $i < $this->count; $i++) {


            array_push($this->meal, App::getDB()->get("menu", "name",
                            ["meal_id" => $this->cart[$i]
            ]));
        }


        App::getSmarty()->assign('meal', $this->meal);


        $this->generateView();
    }

    public function action_order() {

        $this->checkCart();
        $this->index = App::getDB()->count("meals", "id", [
            "id[>=]" => 0
        ]);


        for ($i = 0; $i < $this->count; $i++) {


            App::getDB()->insert("meals", [
                "customer_id" => $this->id,
                "meal_id" => $this->cart[$i],
                "date" => date("d.m.y"),
                "status" => "in progress",
                "id" => $this->index
            ]);
            $this->index++;
        }
        App::getDB()->delete("cart", [
            "id[>]" => 0
        ]);



        App::getRouter()->redirectTo('cartShow');
    }

    public function action_deleteProduct() {

        App::getDB()->delete("cart", [
            "id " => ParamUtils::getFromCleanURL(1)
        ]);

        App::getRouter()->forwardTo('cartShow');
    }

    public function generateView() {

        App::getSmarty()->assign('ix', $this->ix);
        App::getSmarty()->assign('del', $this->del);
        App::getSmarty()->assign('cart', $this->cart);
        App::getSmarty()->assign('role', $this->role);
        App::getSmarty()->assign('name', $this->name);
        App::getSmarty()->assign('count', $this->count);
        App::getSmarty()->display('CartView.tpl');
    }

}
