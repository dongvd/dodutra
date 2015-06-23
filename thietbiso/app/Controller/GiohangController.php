<?php


App::uses('AppController', 'Controller');


class GiohangController extends AppController {


	public $uses = array();


	public function giohang() {
            $this->set('menu_default','1');
            
        }
}
