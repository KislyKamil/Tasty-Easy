<?php

namespace app\transfer;

/**
 * Description of Order
 *
 * @author Kamil
 */
class Order {

    public $name;
    public $meal = array();
    public $date;

    public function __construct($name, $meal, $date) {
        $this->name = $name;
        $this->meal  = $meal;
        $this->date = $date;
    }

}
