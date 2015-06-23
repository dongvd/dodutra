<?php

class Order extends AppModel{
    public $name="Order";
    public $usesTable="orders";
    
    public function getOrder(){
        $data = $this->find("all",array("order"=>array('Order.id'=>"desc")));
        return $data;
    }
}
