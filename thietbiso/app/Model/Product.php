<?php

class Product extends AppModel{
    public $name="Product";
    public $usesTable="products";
    public function getData() {
        $data=  $this->find("all");
        return $data;
    }
    
    public function getDataEdit() {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data=  $this->find("first",array('conditions' => array('Product.id' => 1)));
            return $data;
        }
        
    }
    
    
}
