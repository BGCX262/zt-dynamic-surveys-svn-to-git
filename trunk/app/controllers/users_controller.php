<?php

	class UsersController extends AppController{
		
		function beforeFilter() {
        	//$this->Auth->allow('index','view');
        	$this->Auth->allow('index','view');
        	//$this->Auth->allow('login','save');
        	Security::setHash('md5');
		}
		
		function index(){
			$users = $this->User->find('all');
			
			$this->set('users',$users);
		}
		
		function login(){
			
		}
		
		function add(){
			$helpers = array('Form');
			
			$this->loadModel('Career');
			$careers =  $this->Career->find('list',array('fields' => array('abbreviation')));
			$this->set('careers',$careers);
			
			$this->loadModel('Type');
			$types =  $this->Type->find('list');
			$this->set('types',$types);
		}
		
		function save(){
			
			if(!empty($this->data)) {        
				//If the form data can be validated and saved...
			
				//$this->data['User']['password'] = $this->Auth->password($this->data['User']['password']);      
				if($this->User->saveAll($this->data)) {            
					//Set a session flash message and redirect.    
					$this->flash("¡Usera Guardada!",array('controller'=>'users','action'=>'index'),3);            
					//$this->redirect(array('controller'=>'graduates'));  
				}    
			}
		}
		
		function delete(){
			if(isset($this->params['pass'][0])){
				$id = $this->params['pass'][0];
			}
			if(isset($id) && $id > 0 && is_numeric($id)){
				if($this->User->delete($id,false)){
					$this->flash("¡Usera Eliminada!",array('controller'=>'users','action'=>'index'),3);
				}
			}
		}
		
		function logout() {
			$this->redirect($this->Auth->logout());
		}
		
	}

?>