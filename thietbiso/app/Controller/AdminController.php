<?php

App::uses('AppController', 'Controller');
class AdminController extends AppController {
        public $uses=array("Product","Category","User","Supplier","Order","News","Log");
	public function Admin() {
		
            $this->set('menu_default','1');
            $data = $this->Product->getData();
            $this->set('products',$data);
            
            $dataEdit = $this->Product->getDataEdit();
            $this->set('proEdit',$dataEdit);
            
            $dataCate = $this->Category->getCate();
            $this->set('categories',$dataCate);
            
            $dataUser = $this->User->getUser();
            $this->set('users',$dataUser);
            
            $dataSup = $this->Supplier->getSup();
            $this->set('suppliers',$dataSup);
            
            $dataOrder = $this->Order->getOrder();
            $this->set('orders',$dataOrder);
            
            $dataNews = $this->News->getNews();
            $this->set('news',$dataNews);
            
            $dataLog = $this->Log->getLog();
            $this->set('logs',$dataLog);
        }
}
