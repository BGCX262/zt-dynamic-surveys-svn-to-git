<?php

	class CareersController extends AppController{
		
		function index(){
			
			$careers = $this->Career->find('all');
			
			$this->set('careers',$careers);
			
		}
		
		function add(){
			$helpers = array('Form');
			
			
			$this->Career->set(array(
				'name'=>'aa',
				'abbreviation'=>'aaa'
			));
			
			$this->Career->save();
		}
		
		function save(){
			$form = $this->params['form'];
			
			$this->set('forma',$form);
			
			var_dump($this->data);
			
			
			$this->Career->save($this->data);
			
			if(!empty($this->data)) {        
				//If the form data can be validated and saved...
				
				
			
				if(1==1) {            
					//Set a session flash message and redirect.            
					$this->Session->setFlash("Career Saved!");            
					//$this->redirect('/graduates/');        
				}    
			}
		}
		
	}

?>