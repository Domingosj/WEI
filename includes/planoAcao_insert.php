<?php

include_once 'dbconfig.php';

if(isset($_POST['submeter']))

{

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



	if($crud->createPlanoAcao($nomeMembroCCPC,$nomeOCB,$distrito,$nomeCrianca,$codBen,$data,$dataPeriodoSeg,$dataManutencao,$dataGraduacao,
  $areaServico,$necessidadePrioritarea,$pontuacao,$necessidadesResolvidas,$data_2,$apoioDireito,$realizado_1,$data_3,$apoioPorReferenc,$completou,$data_4,
  $acaoDaFamilia,$realizado,$data_5,$comentarios,$membroCCPC,$data_6,$gestorCaso,$data_7))


	{
		header("Location: planoAcao.php?inserted");
	}

	else

	{
		header("Location: planoAcao.php?failure");
	}

}





















 ?>
