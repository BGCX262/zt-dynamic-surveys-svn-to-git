<a href="add">Añadir Registro</a><br />

Reporte de Registros

<table>
	<tr>
		<th>
			Id
		</th>
		<th>
			Carrera
		</th>
		<th>
			Abreviación
		</th>
	</tr>
<?php
	for($i=0;$i<count($careers);$i++){
		echo "<tr>";
			echo "<td>{$careers[$i]['Career']['id']}</td>";
			echo "<td>{$careers[$i]['Career']['name']}</td>";
			echo "<td>{$careers[$i]['Career']['abbreviation']}</td>";
			
		echo "</tr>";
		
	} 
	


//$graduates[0]['Graduate']['name']. ' es '. $graduates[0]['Career']['name'] 

?>

</table>


