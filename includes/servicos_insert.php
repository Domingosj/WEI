<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))

{

$benificiario_id = $_POST['codBen'];
$provincia = $_POST['provincia'];
$destrito = $_POST['distrito'];
$localidade = $_POST['localidade'];
$bairro = $_POST['bairro'];
$data = $_POST['data'];
$actvista = $_POST['actvista'];
$supervisor = $_POST['supervisor'];
$ocb = $_POST['ocb'];

$nome = $_POST['nome'];
$mes = $_POST['A'];
$cd_agreg= $_POST['cd_agreg'];
$idade= $_POST['idade'];
$sexo = $_POST['B'];
$alimentacao = $_POST['C'];
$educacao = $_POST['D'];
$ajuda_legal = $_POST['E'];
$saude = $_POST['F'];
$apoio_psicoSocial = $_POST['G'];
$apoio_financeiro = $_POST['H'];
$apoio_habitacional = $_POST['I'];
$data1 = $_POST['data1'];

	if($crud->createServicos($benificiario_id,$provincia,$destrito,$localidade,$bairro,$data,$actvista,$supervisor,$nome,$mes,$cd_agreg,$idade,
$sexo,$alimentacao,$educacao,$ajuda_legal,$saude,$apoio_psicoSocial,$apoio_financeiro,$apoio_habitacional,$data1))


	{
		header("Location: servicos.php?inserted");
	}

	else

	{
		header("Location: servicos.php?failure");
	}

}
 ?>
