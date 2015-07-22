<?php

class Product extends AppModel{
    public $name="Product";
    public $usesTable="products,suppliers,categories";
    var $helps=array("Ajax","Javascript");
    public function getData($cate) {
        $data=  $this->find("all",array("conditions"=>"categories_id=$cate","limit"=>"12","offset"=>"0"));
        return $data;
    }


    public function getDataProduct($idSupp){
        $dataProduct=  $this->find("all",array("conditions"=>"suppliers_id=$idSupp"));
        return $dataProduct;
    }
    public function getDataProduct2(){
        $sql="select * from products limit 20 offset 0";
        $dataProduct2=$this->query($sql);
        return $dataProduct2;
    }
    
    public function getDataModal($proId) {
        $dataModal=  $this->find("all", array("conditions"=>"Product.id=$proId"));
        echo "<pre>";
        var_dump($dataModal); exit;
    }
    
    
    public function getDataAjax($id) {
        $dataAjax=  $this->find("all",array("conditions"=>"id=$id","limit"=>"0","offset"=>"5"));
        return $dataAjax;
    }
   
    public function getProduct($id,$cate,$supp) {
        $dataPro=  $this->find("all",array("conditions"=>array("id!=$id","categories_id=$cate","suppliers_id=$supp"),"limit"=>"3","offset"=>"0"));
        return $dataPro;
    }
    public function getDataMenuLeft($cate,$idSupp){
        $sql="select * from products where categories_id=$cate and suppliers_id=$idSupp";
        $data=$this->query($sql);
        return $data;
    }
    public function getSearch($text_search){
        $sql="select * from products where ProductName like '%$text_search%'";
        $result=$this->query($sql);
        return $result;
    }
    public function filter_price($min,$max){
        $sql="select * from products where Price < $max and Price > $min";
         $datafilter= $this->query($sql);
         return $datafilter;
    }
    public function filter_screen($min,$max){
        $sql="select * from products where Screen < $max and Screen > $min";
         $datafilter= $this->query($sql);
         return $datafilter;
    }
    public function filter_pin($min,$max){
        $sql="select * from products where Pin < $max and Pin > $min";
         $datafilter= $this->query($sql);
         return $datafilter;
    }
    public function filter_ram($min,$max){
        $sql="select * from products where Ram < $max Ram > $min";
         $datafilter= $this->query($sql);
         return $datafilter;
    }
    
    public function getDataLoadMore($page,$cate){
        $limit=12;
        if(!empty($off)){
            $offset=12;
        }else{
            $offset=($page*$limit)-$limit;
        }
        
        $sql="select * from products where categories_id=$cate limit $limit offset $offset";
        $dataLoadMore=$this->query($sql);
        return $dataLoadMore;
    }
}
