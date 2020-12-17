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
	
	$nome = $_POST["name"];
	$nota1 = $_POST["nota1"];
	$nota2 = $_POST["nota2"];
	$media = ($nota1 + $nota2)/2;
	$situacao = "Reprovado";
	if($media>=6){
		$situacao = "Aprovado";
	}

	$query_cadastro_aluno = "INSERT INTO alunos (aluno_nome, nota1, nota2, media, situacao) VALUES ('{$nome}',{$nota1},{$nota2},{$media},'{$situacao}')";

	$addaluno = mysqli_query($con, $query_cadastro_aluno) or die (' Erro na Query: ' . $query_cadastro_aluno . '<br>' . mysqli_error($con));
		echo '<br>' . 'Aluno adicionado com sucesso';

 ?>