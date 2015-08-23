<?php echo $this->Html->link('Añadir Registro', array('controller' => 'surveys', 'action' => 'add'));?><br />

<?php //var_dump($surveys)?>

Reporte de Registros

<table>
	<tr>
		<th>
			Id
		</th>
		<th>
			Encuesta
		</th>
		<th>
			Carrera
		</th>
		<th>
			Tipo
		</th>
		<th>
			Link
		</th>
		<th>
			# Resultados
		</th>
		<th>
			Eliminar
		</th>
	</tr>
<?php
	
	foreach($surveys as $survey){
		$groupCareer = '';
		$groupType = '';
		
		foreach($survey['Career'] as $key => $career){
			$groupCareer .= $career['name'];
			if($key < count($survey['Career'])) $groupCareer .= '<br /> ';
		}
		
		foreach($survey['Type'] as $key => $type){
			$groupType .= $type['name'];
			if($key < count($survey['Type'])) $groupType .= '<br /> ';
		}
		
		
		
		echo "<tr>";
			echo "<td>{$survey['Survey']['id']}</td>";
			echo '<td>'.$this->Html->link($survey['Survey']['name'],array('controller'=>'surveys','action'=>'update',$survey['Survey']['id'])).'</td>';
			echo "<td>$groupCareer</td>";
			echo "<td>$groupType</td>";
			echo "<td>{$survey['Survey']['link']}</td>";
			echo "<td>{$survey['Survey']['num_surveys']}</td>";
			echo "<td>".$this->Html->link('x', array('controller' => 'surveys', 'action' => 'delete',$survey['Survey']['id']),array(),'¿Estas seguro que deseas eliminar?')."</td>";
		echo "</tr>";
		
	} 
	


//$graduates[0]['Graduate']['name']. ' es '. $graduates[0]['Career']['name'] 

?>

</table>



