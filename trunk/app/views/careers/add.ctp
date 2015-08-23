Registro de Egresados

<?php 
	echo $this->Form->create('Career',array('action'=>'save'));
	
	echo $this->Form->input('name');
	echo $this->Form->input('abbreviation');
	
	echo $this->Form->end('Submit');



?>








