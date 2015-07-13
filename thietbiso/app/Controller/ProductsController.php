<?php

class ProductsController extends AppController{
    var $name="Products";
    public $uses = array("Product","User");
        var $components=array("ShoppingCart");
	public function index() {
            
            $this->set("cart",$this->ShoppingCart->getOrderDetails());
            $this->set("data",  $this->Product->find("all"));
            
        }
        
        
}

