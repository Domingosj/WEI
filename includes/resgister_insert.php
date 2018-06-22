<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))

{
$nome= $_POST['nome'];
$provincia=$_POST['provincia'];
$distrito=$_POST['destrito'];
$contacto=$_POST['contacto'];
$nivel=$_POST['nivel'];
$cod_digitador=$_POST['cod_digitador'];
$email=$_POST['email'];
$senha1=$_POST['senha1'];


	if($crud->createUser($nome,$provincia,$distrito,$contacto,$nivel,$cod_digitador,$email,$senha1))


	{
		header("Location: register.php?inserted");
	}

	else

	{
		header("Location: register.php?failure");
	}

}
 ?>
