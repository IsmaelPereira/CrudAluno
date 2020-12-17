<?php 
	//SQL conection
	$user ="root";
	$password = "";
	$database = "teste";
	$hostname = "localhost";
	$con = mysqli_connect($hostname, $user, $password);
	if(!$con){
		die('Erro ao conectar ao banco: ' . mysqli_error());
	}
	echo 'Conectado com sucesso <br>';
	//SQL Select
	mysqli_select_db($con,$database) or die( 'Erro na seleção do banco' );
		echo 'Banco ' . $database . ' Selecionado com sucesso';
	
	$matricula = $_POST["matricula"];

	$query_deletar_aluno = "DELETE FROM alunos WHERE ID={$matricula}";

	$editaraluno = mysqli_query($con, $query_deletar_aluno) or die (' Erro na Query: ' . $query_deletar_aluno . '<br>' . mysqli_error($con));
		echo '<br>' . 'Aluno deletado com sucesso';

 ?>