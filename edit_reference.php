<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-update']))
{

  $id = $_GET['edit_id'];

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

  if($crud->update_reference($id,$nome,$idade,$dataNasc,$sexo,$contacto,$bairo,$referido1,$data1,$contrRecebida,$data2,$referido2,$funcao,
  $contacto1,$ocb))
	{
		$msg = "<div class='alert alert-info'>
				<strong></strong> Dado actualizado com sucesso <a href='index.php'>HOME</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>DESCULPE!</strong> FALHA ao actualizar dado !
				</div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID_reference($id));
}

?>
<?php include_once 'includes/header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />
<?php include_once 'includes/edite_reference.php';?>
