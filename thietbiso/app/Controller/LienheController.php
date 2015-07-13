<?php


App::uses('AppController', 'Controller');


class LienheController extends AppController {
	public $uses = array("Contact","User");
        
	public function lienhe() {
            $this->set('menu_lienhe','1');
            
            $this->_contact();
            $this->_login();
            $this->_logout();
            $this->_register();
            $this->_updateCate();
        }
        protected function _contact(){
            if(isset($_POST["lienhe"])) {
                $hoten=$this->request->data["hoten"];
                $diachi=$this->request->data["diachi"];
                $email=$this->request->data["email"];
                $sdt=$this->request->data["sdt"];
                $tieude=$this->request->data["tieude"];
                $noidung=$this->request->data["noidung"];
//                if(!empty(trim($hoten))&&!empty(trim($diachi))&&!empty(trim($email))&&!empty(trim($sdt))&&!empty(trim($tieude))&&!empty(trim($noidung))){
                    $this->Contact->insertContact($hoten,$diachi,$email,$sdt,$tieude,$noidung);
//                }else{
//                    echo "<script>alert('Ban chua nhap day du thong tin');</script>";
//                }
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
                $this->redirect(array("controller"=>"lienhe","action"=>"lienhe"));
            }
        }


        protected function _register(){
            if(isset($_POST["register"])){
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
        protected  function _updateCate(){
            $total=0;
            if($this->Session->check("cart")==true){
                foreach ($this->Session->read("cart") as $value) {
                    $total+=$value["quantity"];
                }
                $this->set("total",$total);
            }
        }
}
