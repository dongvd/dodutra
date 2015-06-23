<?php


App::uses('AppController', 'Controller');


class GioithieuController extends AppController {


	public $uses = array();


	public function gioithieu() {
            $this->set('menu_gioithieu','1');
            
        }
}
