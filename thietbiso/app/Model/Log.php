<?php

class Log extends AppModel{
    public $name="Log";
    public $usesTable="logs";
    
    public function getLog(){
        $data = $this->find("all");
        return $data;
    }
}
