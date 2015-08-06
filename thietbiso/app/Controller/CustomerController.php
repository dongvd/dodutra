<?php


App::uses('AppController', 'Controller');


class CustomerController extends AppController {


	public $uses = array("User");


	public function customer() {
            $this->set('menu_default','1');
            $this->_login();
            $this->_logout();
            $this->_register();
            $this->_getInfoUser();
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
                $this->redirect(array("controller"=>"gioithieu","action"=>"gioithieu"));
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
        protected  function _getInfoUser(){
            if($this->Session->check("login")==true){
                $id=$this->Session->check("login.id");
                $dataUser=$this->User->getDataUser($id);
            $this->set("dataUser",$dataUser);
            }
        }
}
