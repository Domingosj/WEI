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
$organizacao = $_POST['Organizacao'];
$proveniencia = $_POST['proveniencia'];
$funcao = $_POST['funcao'];
$contacto = $_POST['contacto'];
$numero = $_POST['numero'];



	if($crud->createPresencaC($data_digitacao,$projecto,$data_inicio,$data_fim,$provincia,$distrito,$parceiro,$actividade,$organizacao,$proveniencia,$funcao,$contacto,$numero))


	{
		header("Location: presencaC.php?inserted");
	}

	else

	{
		header("Location: presencaC.php?failure");
	}

}
 ?>
