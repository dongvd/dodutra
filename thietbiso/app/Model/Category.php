<?php

class Category extends AppModel{
    public $usesTable="categories";
    public $name="Category";
//        public $hasMany=array("categories"=>array("className"=>"Category","foreignkey"=>"id"),"suppliers"=>array("className"=>"Supplier","foreignkey"=>"id"));

    public function getDataCate(){
        $dataCate=  $this->find("all");
        return $dataCate;
    }
     public function getDataAjax2() {
//        if($page<1){
//            $page=1;
//        }
//        $limit=8;
//        $offset=($limit * $page)-$limit;
//        $limit2=$limit+1;
        $dataAjax=  $this->query("select * from products inner join suppliers on products.suppliers_id=suppliers.id");
////        array_push($array, $dataAjax);
//        echo '<pre>';
        var_dump($dataAjax); exit;
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
}

