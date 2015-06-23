<?php


App::uses('AppController', 'Controller');


class CustomerController extends AppController {


	public $uses = array();


	public function customer() {
            $this->set('menu_default','1');
            
        }
}
