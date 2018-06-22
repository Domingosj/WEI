<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-update']))
{
  $id = $_GET['edit_id'];

  $provincia = $_POST['provincia'];
  $destrito = $_POST['destrito'];
  $localidade = $_POST['localidade'];
  $bairro = $_POST['bairro'];
  $data = $_POST['data'];
  $actvista = $_POST['actvista'];
  $supervisor = $_POST['supervisor'];
  $nome = $_POST['nome'];
  $mes = $_POST['A'];
  $cd_agreg= $_POST['cd_agreg'];
  $idade= $_POST['idade'];
  $sexo = $_POST['B'];
  $alimentacao = $_POST['C'];
  $educacao = $_POST['D'];
  $ajuda_legal = $_POST['E'];
  $saude = $_POST['F'];
  $Psico_Social = $_POST['G'];
  $apoio_financeiro = $_POST['H'];
  $apoio_habitacional = $_POST['I'];
  $data1 = $_POST['data1'];


  if($crud->update_servicos($id,$provincia,$destrito,$localidade,$bairro,$data,$actvista,$supervisor,$nome,$mes,$cd_agreg,$idade,
$sexo,$alimentacao,$educacao,$ajuda_legal,$saude,$Psico_Social,$apoio_financeiro,$apoio_habitacional,$data1))
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
	extract($crud->getID_servicos($id));
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
<?php include_once 'includes/edit_form_reference.php';?>
