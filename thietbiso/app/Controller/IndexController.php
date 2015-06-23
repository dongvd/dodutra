<?php


App::uses('AppController', 'Controller');


class IndexController extends AppController {


	public $uses = array();


	public function index() {
            $this->set('menu_index','1');
            
        }
}
