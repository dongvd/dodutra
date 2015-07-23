<?php


App::uses('AppController', 'Controller');


class SanphamController extends AppController {


	public $uses = array("Product","User");


	public function sanpham() {
            $this->set('menu_sanpham', '1');
            
            $this->_addToCart();
            $this->_login();
            $this->_logout();
            $this->_register();
            $this->_updateCate();
            $this->_GetDataMenuLeft();
            $this->_filter();
        }
        public function resultsearch() {
            $this->set('menu_sanpham', '1');
            $this->_addToCart();
            $this->_login();
            $this->_logout();
            $this->_register();
            $this->_updateCate();
            $this->_search();
        }
        protected function _addToCart(){
            
            $id=$this->request->query("cart");
            $quantity=1;
            if($id>0){
                if($this->Session->check("login")==true){
                    if($this->Session->check("cart.$id")==FALSE){
                        $data=  $this->Product->find("all",array("conditions"=>array("Product.id=$id")));
                        foreach ($data as $value);
                        $this->Session->write("cart.$id.id",$id);
                        $this->Session->write("cart.$id.quantity",$quantity);
                        $this->Session->write("cart.$id.name",$value["Product"]["ProductName"]);
                        $this->Session->write("cart.$id.price",$value["Product"]["Price"]);
                        echo "<script>alert('ma sp:".$this->Session->read("cart.$id.id")."    so luong sp".$this->Session->read("cart.$id.quantity")."');</script>";
                         $this->redirect(array("controller"=>"sanpham","action"=>"sanpham"));
    //                      header("Location:")
    //                    $this->redirect(array("controller"=>"index","action"=>"index"));
                    }else{
                        $this->Session->write("cart.$id.quantity",$this->Session->read("cart.$id.quantity")+1);
//                        echo "<script>alert('ma sp:".$this->Session->write("cart.$id.id",$id)."  so luong sp".$this->Session->read("cart.$id.quantity")."');</script>";
                        $this->redirect(array("controller"=>"sanpham","action"=>"sanpham"));
                    }
                }else{
                    ?>
                <script>confirm('Bạn phải đăng nhập'); window.location.href=('sanpham')</script>";

                <?php
                //                $this->redirect(array("controller"=>"sanpham","action"=>"sanpham"));
                }
            }
        }
        protected function _login(){
            if(isset($_POST["login"])){
                $email=$this->request->data("lgemail");
                $pass=$this->request->data("lgpwd");
                if(!empty($email) && !empty($pass)){
                    $num=$this->User->login($email,$pass);
                    
                    $info=  $this->User->getLogin($email,$pass);
                    if(!empty($info)){
                        foreach ($info as $valIfo) {
                            $usr=$valIfo["users"]["FirstName"];
                            $pwd=$valIfo["users"]["LastName"];
                            $id=$valIfo["users"]["id"];
                        }
                         $name=$usr.$pwd;
                            $this->set("info",$info);
                        if($num>0){
                            echo "<script>alert('Bạn đăng nhập thành công');</script>";

                        }
                        
                        $this->Session->write("login.email","$email");
                        $this->Session->write("login.pass","$pass");
                        $this->Session->write("login.name","$name");
                        $this->Session->write("login.id","$id");
                        
                        }else{
                            echo "<script>alert('Đăng nhập không thành công');</script>";
                        }
                }else{
                    echo "<script>alert('Đăng nhập không thành công');</script>";
                }
                
            }
            return true;
        }
        
        protected  function _logout(){
            $p=$this->request->query("p");
            if($p!=0){
                $this->Session->delete("login");
                $this->Session->delete("cart");
                $this->redirect(array("controller"=>"sanpham","action"=>"sanpham"));
            }
        }


        protected function _register(){
            if($this->request->is("post")){
                
                    $email=$this->request->data("email");
                    $pass=$this->request->data("pwd");
                    $re_pass=$this->request->data("re_pwd");
                    $fname=$this->request->data("fname");
                    $lname=$this->request->data("lname");
                    $phone=$this->request->data("phone");
                    $add=$this->request->data("add");
                    if(!empty($email) && !empty($pass) && !empty($fname) && !empty($lname) && !empty($phone) && !empty($add)){
                        if($re_pass==$pass){
                            $num=$this->User->register($email,$pass,$fname,$lname,$phone,$add);
//                            echo $num; exit;
                            if($num!=0){
                                echo "<script>alert('bạn đăng kí thành công');</script>";
                            }else{
                                echo "<script>alert('Email của bạn đã được sử dụng');</script>";
                            }
                        }else{
                            echo "<script>alert('Bạn nhập chưa khớp password');</script>";
                        }
                    }
                
            }
        }
        protected  function _updateCate(){
            $total=0;
            if($this->Session->check("cart")==true){
                foreach ($this->Session->read("cart") as $value) {
                    $total+=$value["quantity"];
                }
                $this->set("total",$total);
            }
        }
        
        protected function _GetDataMenuLeft(){
//            $cate=$this->request->data("cate");
            
            $idSupp = $this->request->query("idSupp");
            $cate = $this->request->query("idCate");
            $min=  $this->request->query("min");
            $max=  $this->request->query("max");
            $screenmin=  $this->request->query("screenmin");
            $screenmax=  $this->request->query("screenmax");
            if (isset($idSupp) && isset($cate)) {
                $dataProduct = $this->Product->getDataMenuLeft($cate,$idSupp);
//                var_dump($dataProduct); exit;
            }else if(isset($min) && isset($max)){
    //            if(empty($min) || empty($max)){
    //                $min=0;
    ////                $max=0;
    //            }
                if(!empty($min) && !empty($max)){
                    $dataProduct=$this->Product->filter_price($min,$max);
                }
            } 
            else if(isset($screenmin) && isset($screenmax)){
    //            if(empty($min) || empty($max)){
    //                $min=0;
    ////                $max=0;
    //            }
                if(!empty($screenmin) && !empty($screenmax)){
                    $dataProduct=$this->Product->filter_price($screenmin,$screenmax);
                }
            } 
            else {
                $dataProduct = $this->Product->getDataProduct2();
            }
            $this->set("dataProduct", $dataProduct);
        }
        protected function _search(){
            if($this->request->is("post")){
                $text=$this->request->data("text-search");
//                echo $text; exit;
                if(!empty($text)){
                    $text_search=$this->_convert_vi_to_en($text);
                    $dataProduct=  $this->Product->getSearch($text_search);
//                    var_dump($dataProduct); exit;
                    $this->set("dataSearch", $dataProduct);
                }
            }
        }
        protected function _convert_vi_to_en($str) {
            $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
            $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
            $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
            $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
            $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
            $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
            $str = preg_replace("/(đ)/", 'd', $str);
            $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
            $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
            $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
            $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
            $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
            $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
            $str = preg_replace("/(Đ)/", 'D', $str);
            //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));

            return $str;
        }
        protected function _filter(){
//            $min=  $this->request->query("min");
////            if(empty($min) || empty($max)){
////                $min=0;
//////                $max=0;
////            }
//            
//            $max=  $this->request->query("max");
//            echo "<pre>";
////                echo $min.$max; exit;
//            if(!empty($min) && !empty($max)){
//                $dataFilter=$this->Product->filter($min,$max);
//                echo "<pre>";
////                var_dump($dataFilter); exit;
//                $this->set("dataFilter",$dataFilter);
//            }
        }
}
