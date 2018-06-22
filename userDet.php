<?php include_once 'dbconfig.php';?>

<?php



	require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	$nivel = $userRow['nivel'];
	$ocb = $userRow['ocb'];




?>

<?php

include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID($id));
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Detalhes do beneficiario</title>
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">


<style type="text/css" media="screen">
body{
	background-color: #e6f0ff;

}

 .card {
		margin-top: 20px;
		padding: 30px;
		background-color: rgba(214, 224, 226, 0.2);
		-webkit-border-top-left-radius:10px;
		-moz-border-top-left-radius:10px;
		border-top-left-radius:10px;
		-webkit-border-top-right-radius:10px;
		-moz-border-top-right-radius:10px;
		border-top-right-radius:10px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
}
.card.hovercard {
		position: relative;
		padding-top: 0;
		overflow: hidden;
		text-align: center;
		background-color: #fff;
		background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
		height: 130px;
}
.card-background img {
		-webkit-filter: blur(25px);
		-moz-filter: blur(25px);
		-o-filter: blur(25px);
		-ms-filter: blur(25px);
		filter: blur(25px);
		margin-left: -100px;
		margin-top: -200px;
		min-width: 130%;
		height: 100%;
}
.card.hovercard .useravatar {
		position: absolute;
		top: 15px;
		left: 0;
		right: 0;
}
.card.hovercard .useravatar img {
		width: 100px;
		height: 100px;
		max-width: 100px;
		max-height: 100px;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
		border-radius: 50%;
		border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
		position: absolute;
		bottom: 14px;
		left: 0;
		right: 0;
}
.card.hovercard .card-info .card-title {
		padding:0 5px;
		font-size: 20px;
		line-height: 1;
		color: #262626;
		background-color: rgba(255, 255, 255, 0.1);
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
}
.card.hovercard .card-info {
		overflow: hidden;
		font-size: 12px;
		line-height: 20px;
		color: #737373;
		text-overflow: ellipsis;
}
.card.hovercard .bottom {
		padding: 0 20px;
		margin-bottom: 17px;
}
.btn-pref .btn {
		-webkit-border-radius:0 !important;
}

.well{
	height: 1200px;

}
.roller{
	height: 10px;
}
.det_label{
	 font-weight: bold;
}
.cor{
	background-color: white;
}

.core{
	background-color: #e6f0ff;
	color: black;
}

.A{
		width:35%;
		font-size:18px;

}

</style>

  </head>
  <body>



    <br>
		<br>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
					<center><a href="reg_ben_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a></center>


					<div class="col-lg-12 col-sm-6">
					    <div class="card hovercard">
					        <div class="card-background">
					            <img class="card-bkimg" alt="" src="">
					            <!-- http://lorempixel.com/850/280/people/9/ -->
					        </div>
					        <div class="useravatar">
										<?php
												if($sexo=="M"){
													echo '<img alt="" src="img/default-user.png"/>';
												}
												else {
													echo '<img alt="" src="img/student-girl-512.png"/>';
												}


										 ?>

					        </div>
					        <div class="card-info"> <span class="card-title"><?php echo $nome; ?></span>

					        </div>
					    </div>

					    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
					        <div class="btn-group" role="group">
					            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					                <div class="hidden-xs">Dados Pessoais</div>
					            </button>
					        </div>
									<div class="btn-group" role="group">
								
											</button>
									</div>
					        <div class="btn-group" role="group">
					            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
					                <div class="hidden-xs">Dados da OCB</div>
					            </button>
					        </div>

					    </div>

					        <div class="well">

					      <div class="tab-content">
					        <div class="tab-pane fade in active" id="tab1">
										<fieldset class="col-md-12">

												 <legend class="A"> Dados Demográficos</legend>

										  <table class='table table-bordered'>


																<tr>
																		<td  class="core">Código de Agregado:</td>
																		<td class="cor"><?php echo $cod_agregado; ?> </td>

																		<td  class="core">Código de Beneficiario:</td>
																		<td class="cor"><?php echo $cod_beneficiario; ?> </td>

																			<td  class="core">Código de Inquiridor: </td>
																		<td class="cor"><?php echo $cod_inquiridor; ?>  </td>
																</tr>




																																<tr>
																																		<td class="core">Data de Nascimento:</td>
																																		<td class="cor"><?php echo $data_Nasc; ?> </td>

																																		<td class="core">Genero:</td>
																																		<td class="cor"><?php echo $sexo; ?></span> </td>

																																		<td class="core">Idade: </td>
																																		<td class="cor"><?php echo $idade; ?> </td>
																																</tr>



																																				<tr>
																																						<td class="core">Naturalidade:</td>
																																						<td class="cor"><?php echo $naturalidade; ?> </td>

																																						<td class="core">Numero de identificaçao:</td>
																																						<td class="cor"><?php echo $num_Identificacao; ?> </td>

																																						<td class="core">Tipo de Identificaçao:  </td>
																																						<td class="cor"><?php echo $tipo_Identificacao; ?> </td>
																																				</tr>


																																				<tr>
																																						<td class="core">Provincia Atual:</td>
																																						<td class="cor"><?php echo $provincia; ?> </td>

																																						<td class="core">Distrito Atual:</td>
																																						<td class="cor"><?php echo $destrito; ?> </td>

																																						<td class="core">Posto Adminstrativo: </td>
																																						<td class="cor"><?php echo $posto_administrativo; ?></td>
																																				</tr>

																																				<tr>
																																						<td class="core">Localidade: </td>
																																						<td class="cor"><?php echo $localidade; ?></td>

																																						<td class="core">Bairro:</td>
																																						<td class="cor"><?php echo $bairro; ?> </td>

																																						<td class="core">Quarterao:</td>
																																						<td class="cor"><?php echo $quarterao; ?></td>
																																				</tr>

																																				<tr>
																																						<td class="core">Ponto de Referencia:</td>
																																						<td class="cor"><?php echo $ponto_referencia; ?></td>

																																						<td class="core">Contacto:</td>
																																						<td class="cor"><?php echo $Contato; ?></td>

																																				</tr>



																											</fieldset>

  <table class='table table-bordered'>
		<fieldset class="col-md-12">

				 <legend class="A">Dados de Educação</legend>
																																				<tr>
																																						<td class="core">Estudante: </td>
																																						<td class="cor"><?php echo $estudante; ?></td>

																																						<td class="core">Caso sim, nome da escola:</td>
																																						<td class="cor"><?php echo $nome_da_escola; ?></td>

																																						<td class="core">Classe:</td>
																																						<td class="cor"><?php echo $classe; ?></td>


																																				</tr>

																																				<tr>
																																					<td class="core">Turma: </td>
																																					<td class="cor"><?php echo $turma; ?></td>

																																						<td class="core">Numero: </td>
																																						<td class="cor"><?php echo $n_identificacao_turma; ?></td>

																																						<td class="core">Caso nao estuda,porque:</td>
																																						<td class="cor"><?php echo $se_nao_estudante_porque; ?></td>


																																				</tr>

																																				<tr>
																																					<td class="core">Ultimo ano que esteva na escola: </td>
																																					<td class="cor"><?php echo $ultimo_ano_escolar; ?></td>

																																						<td class="core">Nome da Escola: </td>
																																						<td class="cor"><?php echo $nome_Escola; ?></td>



																																				</tr>
																											</fieldset>
<table class='table table-bordered'>
	<fieldset class="col-md-12">

			 <legend class="A">Dados do Teste/HIV</legend>
																																				<tr>
																																					<td class="core">Alguma vez ja fez o texte de HIV: </td>
																																					<td class="cor"><?php echo $teste_HIV; ?></td>

																																					<td class="core">Pretendes Compartilhar o Resultado: </td>
																																					<td class="cor"><?php echo $compartilhar_resultado; ?></td>

																																						<td class="core">Caso Sim,qual foi o ultimo resultado: </td>
																																						<td class="cor"><?php echo $resultado; ?></td>




																																				</tr>

																																				<tr>
																																					<td class="core">Quando Fex o Teste? data: </td>
																																					<td class="cor"><?php echo $data_Teste; ?></td>

																																					<td class="core">Caso positivo,Em tratamento tarv:  </td>
																																					<td class="cor"><?php echo $em_tratamento_tarv; ?></td>

																																						<td class="core">Orfao de: </td>
																																						<td class="cor"><?php echo $orfao_de; ?></td>




																																				</tr>

																			</fieldset>

</table>
<table class='table table-bordered'>
	<fieldset class="col-md-12">

			 <legend class="A">Dados de Habitação</legend>

																																				<tr>
																																					<td class="core">Nome do Chefe de Familia:</td>
																																					<td class="cor"><?php echo $chefe_familia; ?></td>

																																					<td class="core">Situacao Habitacional da Casa: </td>
																																					<td class="cor"><?php echo $tipo_casa; ?></td>

																																						<td class="core">Tipo de Habitacao: </td>
																																						<td class="cor"><?php echo $tipo_habitacao; ?></td>


																																				</tr>


																																				<tr>
																																					<td class="core">Coordenadas GPS-Latitude: </td>
																																					<td class="cor"><?php echo $Latitude; ?></td>

																																					<td class="core">Coordenadas GPS-Longitude: </td>
																																					<td class="cor"><?php echo $Longitude; ?></td>


																																				</tr>
																																				<tr>
																																					<td class="core">Historico Social da Familia: </td>
																																					<td class="cor"><?php echo $historial_familiar; ?></td>

																																					<td class="core">Observacao: </td>
																																					<td class="cor"><?php echo $observacao; ?></td>

																																				</tr>

</fieldset>
											</table>
										</div>
					        <div class="tab-pane fade in" id="tab2">

										<table class='table table-bordered'>

																																													<tr>
																																															<td class="core">Prenchido Por: </td>
																																															<td class="cor"><?php echo $prenchido_por; ?></td>

																																															<td class="core">Funcao: </td>
																																															<td class="cor"><?php echo $funcao; ?></td>

																																															<td class="core">Nome da CBO: </td>
																																															<td class="cor"><?php echo $nome_da_cbo; ?></td>

																																													</tr>


																																													<tr>
																																															<td class="core">Nome do Pograma: </td>
																																															<td class="cor"><?php echo $nome_do_pograma; ?></td>

																																															<td class="core">Outros: </td>
																																															<td class="cor"><?php echo $outros; ?></td>

																																															<td class="core">Contacto: </td>
																																															<td class="cor"><?php echo $contacto_; ?></td>

																																													</tr>

																																													<tr>
																																															<td class="core">Data: </td>
																																															<td class="cor"><?php echo $data; ?></td>

																																															<td class="core">Nome do Tecnico CBO:  </td>
																																															<td class="cor"><?php echo $nome_tecnico_cbo; ?></td>

																																															<td class="core">Posicao:  </td>
																																															<td class="cor"><?php echo $posicao; ?></td>

																																													</tr>

																																													<tr>
																																															<td class="core">Contacto:  </td>
																																															<td class="cor"><?php echo $contacto; ?></td>

																																															<td class="core">Data:  </td>
																																															<td class="cor"><?php echo $data_; ?></td>



																																													</tr>



																				</table>
					        </div>



  <script src="js/main.js"></script>
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery/jsprofile.js"></script>
	<script src="vendor/jsprofile.js"></script>
	<script src="vendor/popper/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Page level plugin JavaScript-->
	<script src="vendor/chart.js/Chart.min.js"></script>
	<script src="vendor/datatables/jquery.dataTables.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin.min.js"></script>
	<!-- Custom scripts for this page-->
	<script src="js/sb-admin-datatables.min.js"></script>
	<script src="js/sb-admin-charts.min.js"></script>
  </body>
</html>
