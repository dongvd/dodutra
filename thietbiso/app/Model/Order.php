<?php

class Order extends AppModel{
    public $name="Order";
    public $usesTable="orders";
    public function dathang($id,$date,$status,$quantity){
        $sql="insert into orders values('','$id','$date','$status',$quantity)";
        return $this->query($sql);
    }
}

