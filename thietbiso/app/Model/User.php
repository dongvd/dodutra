<?php

class User extends AppModel{
    public $usesTtable="users";
    public $name="User";
    public function Login($email,$password){
        $sql="select * from users where Email='$email' and Password='$password'";
        $this->query($sql);
        $num=  $this->getNumRows();
        return $num;
    }
    
    public function getLogin($email,$password){
        $sql="select FirstName,LastName,id from users where Email='$email' and Password='$password'";
        $info=$this->query($sql);
        return $info;
    }
    
    public function testRegister($email){
        $sql="select count(*) as count from users where Email='$email'";
        $info=$this->query($sql);
        return $info;
    }
    public function register($email,$password,$fname,$lname,$phone,$add){
        $created=Date("Y-m-d H:i:s");
        $number=$this->testRegister($email);
//        var_dump(); exit;
        if($number[0][0]["count"]==0){
            $sql="insert into users values('','$email','$password','$fname','$lname','$phone','$add','2','$created')";
            $this->query($sql);
            $num=  $this->getNumRows();
            
        }else{
//            echo "<script>alert('email đã đk đăng kí')</script>"; exit;
            $num=0;
        }
        return $num;
    }
    public function getDataUser($id){
        $sql="select * from users where id=$id";
        $dataUser=$this->query($sql);
        return $dataUser;
    }
}

