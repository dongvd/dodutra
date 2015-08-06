<?php


App::uses('AppController', 'Controller');


class GiohangController extends AppController {


	public $uses = array("Product","User","Order");


	public function giohang() {
            $this->set('menu_default','1');
                if(isset($this->request->data["quantity"])){
                    $id=$this->request->data["quantity"];
                    
                        foreach($this->request->data["quantity"] as $key =>$val){
                            if($val>0){
                                $this->Session->write("cart.$key.quantity",$val);
                            }else{
                                $this->Session->delete("cart.$key");
                            }
                        }
                            
                }
                $this->_login();
            $this->_logout();
            $this->_register();
            $this->_updateCate();
            $this->_delCart();
            $this->_order();
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
        protected  function _delCart(){
            $id=  $this->request->query("del");
            if(!empty($id)){
                if($this->Session->check("cart.$id")==true){
                    $this->Session->delete("cart.$id");
                    $this->redirect(array("controller"=>"giohang","action"=>"giohang"));
                }
            }
        }
        protected function _order(){
            if(isset($_POST["order"])){
                if($this->Session->check("login")==true){
                    
                    $id_user=  $this->Session->read("login.id");
                    $dateOrder=  Date("Y-m-d H:i:s");
                    $status="Chua thanh toan";
                    $total=0;
                    if($this->Session->check("cart")==true){
                        foreach ($this->Session->read("cart") as $value) {
                            $total+=$value["quantity"]*$value["price"];
                        }
//                        echo $id_user."  ".$dateOrder."  ".$status."  ".$total; exit;
                        $this->Order->dathang($id_user,$dateOrder,$status,$total);
                        //echo $this->Form->getLastInsertId();
//                        $id_order=  $this->Order->getInsertId();
                        $arr_id= $this->Order->query("select LAST_INSERT_ID()");
                        $id_order=$arr_id[0][0]["LAST_INSERT_ID()"];
//                        echo $id_order; exit;
//                        echo "<pre>";
//                            var_dump($this->Session->read("cart")) ; exit;
                        $moneey=0;
                        foreach ($this->Session->read("cart") as $key=> $valuecart) {
                            $idpro=$valuecart["id"];
                            $quanti=$valuecart["quantity"];
                            $moneey=$valuecart["quantity"]*$valuecart["price"];
//                            echo "<pre>";
//                            var_dump($valuecart[]) ; exit;
                            $this->Order->insertOrderDetail($id_order,$idpro,$quanti,$moneey);
//                        echo $moneey;
                        }
                        
                    }
                }
            }
        }
}
