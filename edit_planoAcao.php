<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-update']))
{

  $id = $_GET['edit_id'];

  $nomeMembroCCPC = $_POST['nomeMembroCCPC'];
  $nomeOCB = $_POST['nomeOCB'];
  $distrito = $_POST['distrito'];
  $nomeCrianca = $_POST['nomeCrianca'];
  $codBen = $_POST['codBen'];
  $data = $_POST['data'];
  $dataPeriodoSeg = $_POST['dataPeriodoSeg'];
  $dataManutencao = $_POST['dataManutencao'];
  $dataGraduacao = $_POST['dataGraduacao'];
  $areaServico = $_POST['areaServico'];
  $necessidadePrioritarea = $_POST['necessidadePrioritarea'];
  $pontuacao = $_POST['pontuacao'];
  $necessidadesResolvidas = $_POST['necessidadesResolvidas'];
  $data_2 = $_POST['data_2'];
  $apoioDireito = $_POST['apoioDireito'];
  $realizado_1 = $_POST['realizado_1'];
  $data_3 = $_POST['data_3'];
  $apoioPorReferenc = $_POST['apoioPorReferenc'];
  $completou = $_POST['completou'];
  $data_4 = $_POST['data_4'];
  $acaoDaFamilia = $_POST['acaoDaFamilia'];
  $realizado = $_POST['realizado'];
  $data_5 = $_POST['data_5'];
  $comentarios = $_POST['comentarios'];
  $membroCCPC = $_POST['membroCCPC'];
  $data_6 = $_POST['data_6'];
  $gestorCaso = $_POST['gestorCaso'];
  $data_7 = $_POST['data_7'];

  if($crud->update_palno($id,$nomeMembroCCPC,$nomeOCB,$distrito,$nomeCrianca,$codBen,$data,$dataPeriodoSeg,$dataManutencao,$dataGraduacao,$areaServico,$necessidadePrioritarea,$pontuacao,
	$necessidadesResolvidas,$data_2,$apoioDireito,$realizado_1,$data_3,$apoioPorReferenc,$completou,$data_4,$acaoDaFamilia,$realizado,$data_5,$comentarios,$membroCCPC,$data_6,$gestorCaso,$data_7))
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
	extract($crud->getID_plano($id));
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
<?php include_once 'includes/edite_planoAcao.php';?>
