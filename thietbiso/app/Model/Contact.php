<?php

class Contact extends AppModel{
    public $name="Contact";
    public $usesTable="contacts";
    public function insertContact($hoten,$diachi,$email,$sdt,$tieude,$noidung) {
        $datepost=  Date("Y-m-d H:i:s");
        $this->save(array("id"=>"","NameUserPost"=>"$hoten","Email"=>"$email","Phone"=>"$sdt","Address"=>"$diachi","Title"=>"$tieude","Content"=>"$noidung","DatePost"=>"$datepost"));
    }
}

