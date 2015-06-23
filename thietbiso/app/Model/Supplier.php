<?php

class Supplier extends AppModel{
    public $name="Supplier";
    public $usesTable="suppliers";
    
    public function getSup(){
        $data = $this->find("all");
        return $data;
    }
}
