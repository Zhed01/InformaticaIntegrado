<?php
	$local = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "Gabrielvendas";
	
	$conectar = new mysqli($local, $usuario, $senha, $database);

	$stringbusca = "select * from cliente";
	
	$retornocliente = $conectar->query($stringbusca);
	$listardados = array();//array dinamico
	while($listar = $retornocliente->fetch_array()) {
		$listardados[] = $listar;
	}
	//var_dump($listardados);
	?>
	<table>
		<th>Item</th>	
		<th>Codigo</th>
		<th>Nome</th>
		<th>Telefone</th>
		<th>E-Mail</th>
<?php
	foreach($listardados as $chave => $value){
		echo "<tr><td>". $chave . "</td>";
		echo "<td>". $value["id"] . "</td>";
		echo "<td>". $value["nome"] . "</td>";
		echo "<td>". $value["telefone"] . "</td>";
		echo "<td>". $value["email"] . "</td></tr>";
	}
?>
</table>
		