<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-update']))
{

  $id = $_GET['edit_id'];

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

  if($crud->update_presensa($id,$projecto,$data_inicio,$data_fim,$provincia,$distrito,$parceiro,$actividade,$nome,$organizacao,$proveniencia,$funcao,$sexo,
  $idade,$contacto))
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
	extract($crud->getID_presenca($id));
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
<?php include_once 'includes/edite_presensa.php';?>
