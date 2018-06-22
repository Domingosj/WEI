<?php
include_once 'dbconfig.php';

if(isset($_POST['submeter']))

{
$data_digitacao = date("Y-m-d");
$projecto = $_POST['projecto'];
$data_inicio = $_POST['dataInicio'];
$data_fim = $_POST['data_fim'];
$provincia = $_POST['provincia'];
$distrito = $_POST['distrito'];
$parceiro = $_POST['parceiro'];
$actividade = $_POST['actividade'];
$nome = $_POST['nome'];
$organizacao = $_POST['Organizacao'];
$proveniencia = $_POST['proveniencia'];
$funcao = $_POST['funcao'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];
$contacto = $_POST['contacto'];
$numero = $_POST['numero'];



	if($crud->createPresenca($data_digitacao,$projecto,$data_inicio,$data_fim,$provincia,$distrito,$parceiro,$actividade,$nome,$organizacao,$proveniencia,$funcao,$sexo,
  $idade,$contacto,$numero))


	{
		header("Location: presencaB.php?inserted");
	}

	else

	{
		header("Location: presencaB.php?failure");
	}

}
 ?>
