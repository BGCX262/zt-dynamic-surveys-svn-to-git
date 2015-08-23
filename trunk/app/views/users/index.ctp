<?php echo $this->Html->link('Añadir Registro', array('controller' => 'users', 'action' => 'add'));?><br />

Reporte de Registros
<?php //var_dump($users)?>
<table>
	<tr>
		<th>
			Matrícula / Folio / Username
		</th>
		<th>
			Password
		</th>
		<th>
			Nombre
		</th>
		<th>
			Apellido
		</th>
		<th>
			Carrera
		</th>
		<th>
			Tipo
		</th>
		<th>
			Año de Graduado
		</th>
		<th>
			Email
		</th>
		<th>
			Encuestas Contestadas
		</th>
		<th>
			Eliminar
		</th>
	</tr>
<?php
	for($i=0;$i<count($users);$i++){
		echo "<tr>";
			echo "<td>{$users[$i]['User']['username']}</td>";
			echo "<td>{$users[$i]['User']['password']}</td>";
			echo "<td>{$users[$i]['User']['name']}</td>";
			echo "<td>{$users[$i]['User']['last_name']}</td>";
			echo "<td>{$users[$i]['Career']['abbreviation']}</td>";
			echo "<td>{$users[$i]['Type']['name']}</td>";
			echo "<td>{$users[$i]['User']['year_graduation']}</td>";
			echo "<td>{$users[$i]['User']['email']}</td>";			
			$num_surveys = isset($users[$i]['UsersSurvey'][0]['UsersSurvey'][0]['num_surveys'])? $users[$i]['UsersSurvey'][0]['UsersSurvey'][0]['num_surveys'] : 0;;
			echo "<td>$num_surveys</td>";
			echo "<td>".$this->Html->link('x', array('controller' => 'users', 'action' => 'delete',$users[$i]['User']['id']),array(),'¿Estas seguro que deseas eliminar?')."</td>";
		echo "</tr>";
		
	} 	
//$users[0]['Graduate']['name']. ' es '. $users[0]['Career']['name'] 

?>

</table>


