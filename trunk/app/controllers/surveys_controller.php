<?php

	class SurveysController extends AppController{
		
		//var $helpers = array('Utilities');
		
		function index(){
			
			$surveyUsers = $this->Survey->User->find('all',array('fields'=>array('User.id','count(User.id) as num_surveys'),'group'=>'User.id'));
			
			$this->Survey->unbindModel(array('hasAndBelongsToMany'=>array('User')));
			
			$surveys = $this->Survey->find('all');
			
			for($i=0,$c=count($surveys);$i<$c;$i++){
				for($j=0,$c2=count($surveyUsers);$j<$c2;$j++){
					$a = $surveys[$i]['Survey']['id'];
					$b = $surveyUsers[$j]['User']['id'];
					if($a == $b){
						if(isset($surveyUsers[$j]['UsersSurvey'][0]['UsersSurvey'][0]['num_surveys']))
						$surveys[$i]['Survey']['num_surveys'] = $surveyUsers[$j]['UsersSurvey'][0]['UsersSurvey'][0]['num_surveys'];
					}
				}
				if(!isset($surveys[$i]['Survey']['num_surveys'] )) $surveys[$i]['Survey']['num_surveys'] = 0;
			}
			
			$this->set('surveys',$surveys);
		}
		
		
		function add(){
			$this->set('types', $this->Survey->Type->find('list'),array('fields'=>'name'));
			$this->set('careers', $this->Survey->Career->find('list'),array('fields'=>'name'));
		}
		
		function save(){
			if(!empty($this->data)) {        
				//If the form data can be validated and saved...
				$this->data['Survey']['date'] = date('Y-m-d H:i:s',time());
				
				if($this->Survey->saveAll($this->data)) {            
					//Set a session flash message and redirect.            
					$this->flash("¡Encuesta Actualizada!",array('controller'=>'surveys','action'=>'index'),3);
				}   
			}
		}
		
		function update(){
			if(isset($this->params['pass'][0])) $id = $this->params['pass'][0];
			
			if(isset($id) && $id > 0 && is_numeric($id)){
				if(!empty($this->data)){
				
					$this->data['Survey']['date'] = date('Y-m-d H:i:s',time());
				
					if($this->Survey->save($this->data)) {            
						//Set a session flash message and redirect.            
						$this->flash("¡Encuesta Actualizada!",array('controller'=>'surveys','action'=>'update',$id),3);            
						//$this->redirect(array('controller'=>'surveys'));        
					} 
				}
				
				$this->data = $this->Survey->findById($id);
				$careers = $this->Survey->Career->find('list');
				$this->set(compact('data','careers'));
				
				$types = $this->Survey->Type->find('list');
				$this->set(compact('data','types'));
				
			}
		}
		
		function delete(){
			if(isset($this->params['pass'][0])){
				$id = $this->params['pass'][0];
			}
			if(isset($id) && $id > 0 && is_numeric($id)){
				if($this->Survey->delete($id,false)){
					$this->flash("¡Encuesta Eliminada!",array('controller'=>'surveys','action'=>'index'),3);
				}
			}
			
		}
		
	
		
	}

?>