<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\ParamUtils;
use app\transfer\Order;

/**
 * Description of AdminCtrl
 *
 * @author Kamil
 */
class AdminCtrl {

    public $role;
    private $list;
    public $id;
    public $pages;
    public $param;
    public $nextPage;
    public $prevPage;
    public $order = array();
    public $customer = array();
    private $index;
    public $customerDis = array();
    public $mealDis = array();
    public $date = array();

    public function checkPages() {
        $this->pages = App::getDB()->count("customer", "id", [
            "id[>=]" => 1
        ]);


        if ($this->pages % 2 == 0) {
            $this->pages = ($this->pages / 2);
        } else {
            $this->pages = round($this->pages / 2);
        }
    }

    public function action_nextShow() {
        $this->param = ParamUtils::getFromCleanURL(1);
        $this->nextPage = ($this->param + 1);
        $this->prevPage = ($this->param - 1);



        $this->checkPages();


        $this->list = App::getDB()->select("customer", ["id", "login", "address", "phone"], [
            "list_id[<>]" => [$this->param * 2, ($this->param * 2) + 1]
        ]);


        $this->generatePageView();
    }

    public function action_listShow() {
        echo $this->pages;

        $this->checkPages();

        $this->list = App::getDB()->select("customer", ["id", "login", "address", "phone"], [
            "list_id[<]" => 2
                ]
        );

        $this->generateView();
    }

    public function action_deleteUser() {
        $this->id = ParamUtils::getFromCleanURL(1, true);

        App::getDB()->delete("customer", ["id" => $this->id]
        );

        App::getRouter()->forwardTo('listShow');
    }

    public function checkArray($i) {

        return in_array(App::getDB()->get("meals", "customer_id", ["id" => $i]), $this->customer);
    }

    public function loadOrders() {

        $this->index = App::getDB()->get("meals", "id_order", [
            "status" => "in progress"
        ]);

        $this->customer[] = App::getDB()->get("meals", "customer_id", [
            "status" => "in progress"
        ]);
        /* $this->customer = array_unique(App::getDB()->select("meals", "customer_id", [
          "status" => "in progress"
          ]));
         */

        
        
        for ($i = 1; $i <= App::getDB()->count("meals", "id", ["id[>]" => 0]); $i++) {

            
            if (((App::getDB()->get("meals", "status", ["id" => $i])) == "in progress") && $this->checkArray($i)==false) {
                array_push($this->customer, App::getDB()->get("meals", "customer_id", [
                            "id" => $i
                ]));
                
            } else {
                
            }
        }
    }

    public function loadMeals() {

        for ($i = 0; $i < count($this->customer); $i++) {
            array_push($this->order, App::getDB()->select("meals", "meal_id", [
                        "customer_id" => $this->customer[$i]
            ]));
            array_push($this->customerDis, App::getDB()->get("customer", "login", [
                        "id" => $this->customer[$i]
            ]));
            array_push($this->date, App::getDB()->get("meals", "date", [
                        "customer_id" => $this->customer[$i]
            ]));
        }
    }

    public function action_panelShow() {


        $this->loadOrders();
        $this->loadMeals();

        $this->generatePanelView();
    }

    public function action_confirmOrder() {

        App::getDB()->replace("meals", [
            "status" => [
                "in progress" => "send"
            ]],
                [
                    "customer_id" => ParamUtils::getFromCleanURL(1)
        ]);

        App::getRouter()->redirectTo("panelShow");
    }

    public function action_deleteOrder() {

        App::getDB()->delete("meals", [
            "customer_id" => ParamUtils::getFromCleanURL(1)
        ]);

        App::getRouter()->redirectTo("panelShow");
    }

    public function generateView() {

        $this->role = SessionUtils::load('role', $keep = true);
        App::getSmarty()->assign('pages', $this->pages);
        App::getSmarty()->assign('role', $this->role);
        App::getSmarty()->assign('list', $this->list);

        App::getSmarty()->display('ListView.tpl');
    }

    public function generatePageView() {

        $this->role = SessionUtils::load('role', $keep = true);
        App::getSmarty()->assign('pages', $this->pages);
        App::getSmarty()->assign('role', $this->role);
        App::getSmarty()->assign('list', $this->list);
        App::getSmarty()->assign('nextPage', $this->nextPage);
        App::getSmarty()->assign('prevPage', $this->prevPage);
        App::getSmarty()->display('ListPage.tpl');
    }

    public function generatePanelView() {

        $this->role = SessionUtils::load('role', $keep = true);
        App::getSmarty()->assign('role', $this->role);
        App::getSmarty()->assign('date', $this->date);
        App::getSmarty()->assign('id', $this->customer);
        App::getSmarty()->assign('cs', $this->customerDis);
        App::getSmarty()->assign('order', $this->order);
        App::getSmarty()->display('orderPanel.tpl');
    }

}
