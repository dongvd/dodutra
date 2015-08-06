<?php
App::uses('AppController', 'Controller');


class NewsController extends AppController {
	public $uses = array("News");
        
        public function news($news_id = NUll){
            if(!empty($news_id)){
                $news_detail = $this->News->findById($news_id);
                if(empty($news_detail))
                    $this->redirect(array('controller'=>'index', 'action'=>'index'));
            }
            $this->paginate = array('limit'=>10,'order'=>'News.created DESC');
            $list_news = $this->paginate('News');
            $this->set('list_news',$list_news);
            
            $this->set('title',$news_detail['News']['title']);
            $this->set('content',$news_detail['News']['content']);
            $this->set('created',$news_detail['News']['created']);
        }
}
