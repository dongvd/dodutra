<?php

class Product extends AppModel{
    public $name="Product";
    public $usesTable="products,suppliers,categories";
    var $helps=array("Ajax","Javascript");
//    public $hasAndBelongsToMany="Supplier";
    public function getData($cate) {
        $data=  $this->find("all",array("conditions"=>"categories_id=$cate","limit"=>"12","offset"=>"0"));
//        $data2=  $this->find("threaded");
//        echo '<pre>';
//        var_dump($data); exit;
        return $data;
    }
//    public function getDataMenu(){
////        $dataMenu=$this->Product->Category->find("all",array("conditions"=>array("limit"=>"9","offset"=>"0")));
//        $sql="select id from categories limit 9 offset 0";
//        $dataMenu=  $this->query($sql);
//        
//        $data=  implode(',', Set::extract($dataMenu, '{n}.categories.id'));
////        $this->Product->getDataSubMenu($data);
//        return $data;
//    }
    
    public function getDataSubMenu(){
        
//        $sql="select suppliers.SupplierName from products inner join suppliers on products.Suppliers_id=suppliers.id WHERE products.CategoryId in ({$id}) group by suppliers.id";
//        $dataMenu=$this->find("all");
//        echo "<pre>";
//        var_dump($dataMenu); exit;
    }


    public function getDataProduct($idSupp){
        $dataProduct=  $this->find("all",array("conditions"=>"suppliers_id=$idSupp"));
        return $dataProduct;
    }
    public function getDataProduct2(){
        $sql="select * from products limit 20 offset 0";
        $dataProduct2=$this->query($sql);
//        $dataProduct2=  $this->find("all",array("limit"=>"20","offset"=>"0"));
        return $dataProduct2;
    }
    
    public function getDataModal($proId) {
        $dataModal=  $this->find("all", array("conditions"=>"Product.id=$proId"));
        echo "<pre>";
        var_dump($dataModal); exit;
//        return $dataModal;
    }
    
    
    public function getDataAjax($page) {
//        if($page<1){
//            $page=1;
//        }
//        $limit=8;
//        $offset=($limit * $page)-$limit;
//        $limit2=$limit+1;
        $dataAjax=  $this->find("all",array("conditions"=>"id=$page","limit"=>"0","offset"=>"5"));
        return $dataAjax;
////        array_push($array, $dataAjax);
//        echo '<pre>';
//        var_dump($dataAjax);
//        if(!empty($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"])=="xmlhttprequest"){
//            sleep(1);
//            die(json_decode($dataAjax));
//        }else{
//            foreach ($dataAjax as $value) {
//                echo "<div>";
//                echo $value["Product"]["ProductName"];
//                echo "</div>";
//            }
//        }
    }
   
    
    public function getDataMenuLeft($cate,$idSupp){
        $sql="select * from products where categories_id=$cate and suppliers_id=$idSupp";
        $data=$this->query($sql);
//        echo "<pre>";
//        var_dump($data);
        return $data;
    }
    public function getSearch($text_search){
        $sql="select * from products where ProductName like '%$text_search%'";
        $result=$this->query($sql);
//         echo "<pre>";
//        var_dump($result); exit;
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
}
