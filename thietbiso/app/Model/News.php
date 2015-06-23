<?php

class News extends AppModel{
    public $name="News";
    public $usesTable="news";
    
    public function getNews(){
        $data = $this->find("all");
        return $data;
    }
}
