<?php

class User extends AppModel{
    public $name="User";
    public $usesTable="users";
    
    public function getUser(){
        $data = $this->find("all");
        return $data;
    }
}
