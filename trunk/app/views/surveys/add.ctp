Registro de Egresados

<?php 
	echo $this->Form->create('Survey',array('action'=>'save'));
	
	echo $this->Form->input('name');
	echo $this->Form->input('Type');
	echo $this->Form->input('Career');
	echo $this->Form->input('link');
	
	echo $this->Form->end('Submit');

?>








