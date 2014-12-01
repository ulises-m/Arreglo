<?php

$alumnos=array(
array(
"Codigo"=>"457",
"Nombre"=> "Juan Herrera",
"Edad"=>"20",
"Opciones"=>"<a href=eliminar.php>Eliminar</a> <a href=editar.php>Editar</a>",
),
array(
"Codigo"=>"477",
"Nombre"=> "Maria Lopez",
"Edad"=>"21",
"Opciones"=>"<a href=eliminar.php>Eliminar</a> <a href=editar.php>Editar</a>",
),
array(
"Codigo"=>"234",
"Nombre"=> "Jesus Hernandez",
"Edad"=>"30",
"Opciones"=>"<a href=eliminar.php>Eliminar</a> <a href=editar.php>Editar</a>",
),
array(
"Codigo"=>"123",
"Nombre"=> "Jose Gutierres",
"Edad"=>"31",
"Opciones"=>"<a href=eliminar.php>Eliminar</a> <a href=editar.php>Editar</a>",
),
array(
"Codigo"=>"111",
"Nombre"=> "Fatima Perez",
"Edad"=>"33",
"Opciones"=>"<a href=eliminar.php>Eliminar</a> <a href=editar.php>Editar</a>",
)
);
?>

<title>Practica#4</title>

<b>Practica#4</b>
<br>
<b>Arreglo</b>
</br>

<table border="1">
<tr>
	<th>Codigo</th>
	<th>Nombre</th>
	<th>Edad</th>
	<th>Opciones</th>
</tr>
<?php
        foreach($alumnos as $campo => $valor)
	{
		echo "<tr>";
		foreach($valor as $val => $dato){
?>
		<td><?php echo $dato ?></td>

			
<?php
}
		echo "<tr>";	
	}
?>
</table>