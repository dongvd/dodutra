<?php

class Order extends AppModel{
    public $name="Order";
    public $usesTable="orders";
    public function dathang($id,$date,$status,$quantity){
        $sql="insert into orders values('','$id','$date','$status',$quantity)";
        return $this->query($sql);
    }
    
    public function insertOrderDetail($id_order_detail,$id_pro,$quantity,$total){
        $sql="insert into order_detail values('','$id_order_detail','$id_pro',$quantity,$total)";
        return $this->query($sql);
    }
}

