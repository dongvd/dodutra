<?php
class Category extends AppModel{
    public $name="Category";
    public $usesTable="categories";
    public function getCate() {
        $dataCate=  $this->find("all");
        return $dataCate;
    }
}

