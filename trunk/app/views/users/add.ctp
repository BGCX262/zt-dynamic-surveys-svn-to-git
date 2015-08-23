Registro de Egresados

<?php 
	echo $this->Form->create('User',array('action'=>'save'));
	
	echo $this->Form->input('username',array('label'=>'Matrícula / Folio / Username'));
	echo $this->Form->input('password', array('type'=>'password'));
	echo $this->Form->input('name');
	echo $this->Form->input('last_name');
	echo $this->Form->input('year_graduation');
	echo $this->Form->input('career_id');
	echo $this->Form->input('type_id');
	echo $this->Form->input('mobile');
	echo $this->Form->input('email');
	echo $this->Form->input('twitter');
	echo $this->Form->input('facebook');
	
	echo $this->Form->end('Submit');



?>








