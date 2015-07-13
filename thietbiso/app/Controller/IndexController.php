<?php
App::uses('AppController', 'Controller');


class IndexController extends AppController {
	public $uses = array("Product","Category","User");
        public $helpers=array("Session");
//        var $components = array( 'RequestHandler' );
	public function index() {
//            echo "<pre>";
//            var_dump($this->SESSION);
            $dataLaptop=$this->Product->getData(3);
            $dataPhone=$this->Product->getData(1);
            $dataTablet=$this->Product->getData(2);
            $dataFitting=$this->Product->getData(4);
            $this->set("dataLaptop",$dataLaptop);
            $this->set("dataPhone",$dataPhone);
            $this->set("dataTablet",$dataTablet);
            $this->set("dataFitting",$dataFitting);
            $this->set('menu_index','1');
            $dataCate=  $this->Category->getDataCate();
            
            $this->set("dataCate",$dataCate);
            $proId = $this->request->data("pID");
            if ($proId!=0) {
                $data=$this->Product->getDataModal($proId);
                echo $proId ; exit;
            }else{

            }           
            $this->_login();
    //        $this->_getLogin();
            $this->_register();
            $this->_logout();
            $this->_addToCart();
            $this->_updateCate();
            $this->_test();
//            $this->_ajaxModal2();
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
                    }
                     $name=$usr.$pwd;
                        $this->set("info",$info);
                    if($num>0){
                        echo "<script>alert('Bạn đăng nhập thành công');</script>";

                    }
                    $this->Session->write("login.email","$email");
                    $this->Session->write("login.pass","$pass");
                    $this->Session->write("login.name","$name");
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
                $this->redirect(array("controller"=>"index","action"=>"index"));
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
                        $this->User->register($email,$pass,$fname,$lname,$phone,$add);
                    }else{
                        echo "<script>alert('Bạn nhập chưa khớp password');</script>";
                    }
                }
            }
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
//                    echo "<script>alert('ma sp:".$this->Session->read("cart.$id.id")."    so luong sp".$this->Session->read("cart.$id.quantity")."');</script>";
                    $this->redirect(array("controller"=>"index","action"=>"index"));
//                    $this->redirect(array("controller"=>"index","action"=>"index"));
                }else{
                    $this->Session->write("cart.$id.quantity",$this->Session->read("cart.$id.quantity")+1);
//                    echo "<script>alert('ma sp:".$this->Session->write("cart.$id.id",$id)."  so luong sp".$this->Session->read("cart.$id.quantity")."');</script>";
                    $this->redirect(array("controller"=>"index","action"=>"index"));
                }
                }else{
                echo "<script>alert('Bạn phải đăng nhập');window.location.href=('index')</script>";
            }
            }
            
//            $this->Session->delete("cart");
//                echo count($this->Session->read("cart")); exit;
//            echo "<pre>";
//            var_dump($this->Session->read("cart"));exit;
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
        protected function _ajaxModal2(){
//            $id=  $this->request->query("proid");
//            if(!empty($id)){
//            echo "<pre>";
//                $this->Category->getDataAjax2();
////            }else{
////                echo "khong co :((((";
////            }
        }
        
        public function _test(){
            $id=  $this->request->query("proid");
            if(!empty($id)){
                $data_ajax=$this->Product->getDataAjax($id);
//                var_dump($data_ajax); exit;
//                $this->set("data_ajax",$data_ajax);
                $result=array();
                $i=0;
            foreach ($data_ajax as $value_jax) {
//                $result=$value_jax;
                array_push($result, $value_jax["Product"]);
            }
                die(json_encode($result));
//            var_dump($result); exit;
                
            }
            
//            die;
        }
}
