<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-update']))
{

  $id = $_GET['edit_id'];

  $provincia = $_POST['provincia'];
	$destrito= $_POST['destrito'];
	$localidade= $_POST['localidade'];
  $codigo_escola= $_POST['cd_escola'];
	$nome_escola= $_POST['nom_escola'];
	$tipo_escola= $_POST['A'];
	$nome_diretor= $_POST['diretor'];
  $contacto= $_POST['contacto'];
  $lip= $_POST['lip'];
  $nome_aluno= $_POST['nom_aluno'];
  $idade= $_POST['idade'];
  $genero= $_POST['genero'];
	$ano1= $_POST['ano1'];
  $classe_2016= $_POST['classe1'];
	$ano2= $_POST['ano2'];
  $classe_2017= $_POST['classe2'];
	$ano3= $_POST['ano3'];
  $classe_2018= $_POST['classe3'];
	$repitente= $_POST['Repitente'];
	$I_matricula= $_POST['I_Matricula'];
	$M_escolares= $_POST['M_escolares'];
	$U_escolar= $_POST['U_escolar'];
	$P_guarda= $_POST['P_guarda'];
	$P_cdc= $_POST['P_CDC'];
  $Estado_do_aluno= $_POST['E_A_Escola'];


	if($crud->CreateListaCovs($provincia,$destrito,$localidade,$codigo_escola,$nome_escola,$tipo_escola,$nome_diretor,$contacto,$lip,$nome_aluno,
	$idade,$genero,$ano1,$classe_2016,$ano2,$classe_2017,$ano3,$classe_2018,$repitente,$I_matricula,$M_escolares,$U_escolar,$P_guarda,$P_cdc,$Estado_do_aluno))
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
	extract($crud->getID_ListaCovs($id));
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
<?php include_once 'includes/edite_listaCovs.php';?>
