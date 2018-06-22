<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))

{

$benificiario_id = $_POST['codBen'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$dataNasc = $_POST['dtaNasc'];
$sexo = $_POST['sexo'];
$contacto = $_POST['contacto'];
$bairo = $_POST['bairro'];
$referido1 = $_POST['referido1'];
$data1 = $_POST['data1'];
$contrRecebida = $_POST['contrRecebida'];
$data2	 = $_POST['data2'];
$referido2 = $_POST['referido2'];
$funcao = $_POST['funcao'];
$contacto1 = $_POST['contacto1'];
$ocb = $_POST['ocb'];


	if($crud->createReference($benificiario_id,$nome,$idade,$dataNasc,$sexo,$contacto,$bairo,$referido1,$data1,$contrRecebida,$data2,$referido2,$funcao,
  $contacto1,$ocb))


	{
		header("Location: referenc.php?inserted");
	}

	else

	{
		header("Location: referenc.php?failure");
	}

}
 ?>
