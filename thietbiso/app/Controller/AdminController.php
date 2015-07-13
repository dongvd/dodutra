<?php


App::uses('AppController', 'Controller');


class AdminController extends AppController {


	public $uses = array();


	public function Admin() {
		
            $this->set('menu_default','1');
        }
}
