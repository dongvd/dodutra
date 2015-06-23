<?php


App::uses('AppController', 'Controller');


class SanphamController extends AppController {


	public $uses = array();


	public function sanpham() {
		$this->set('menu_sanpham','1');
            
        }
}
