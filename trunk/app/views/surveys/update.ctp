

<?php 
echo "<h2>{$this->data['Survey']['id']} - {$this->data['Survey']['name']} </h2>
<h3>Úlltima fecha de modificación: {$this->data['Survey']['date']}</h3>
";

	echo $this->Form->create('Survey',array('action'=>'update',$this->data['Survey']['id']));
	
	echo $this->Form->input('name');
	echo $this->Form->input('Type');
	echo $this->Form->input('Career');
	echo $this->Form->input('link');
	
	echo $this->Form->end('Submit');

?>




