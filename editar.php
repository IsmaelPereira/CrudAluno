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
	$nome = $_POST["name"];
	$nota1 = $_POST["nota1"];
	$nota2 = $_POST["nota2"];

	$media = ($nota1 + $nota2)/2;
	$situacao = "Reprovado";
	if($media>=6){
		$situacao = "Aprovado";
	}

	$query_editar_aluno = "UPDATE alunos
							SET aluno_nome='{$nome}', nota1={$nota1}, nota2={$nota2},media={$media}, situacao='{$situacao}'
							WHERE ID={$matricula}";

	$editaraluno = mysqli_query($con, $query_editar_aluno) or die (' Erro na Query: ' . $query_editar_aluno . '<br>' . mysqli_error($con));
		echo '<br>' . 'Aluno editado com sucesso';

 ?>