<?php include_once 'dbconfig.php';?>

<?php

	require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

	$ocb = $userRow['ocb'];
	$nivel = $userRow['nivel'];


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bantwana DataServ</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->



<html>
	<head>
		<meta charset="utf-8">
		<title>WEI / Bantwana</title>
		<style type="text/css">
		body{
			  background-color: #e6f0ff;
		}


fieldset
{
border: 1px solid #ddd !important;
margin: 0;
xmin-width: 0;
padding: 10px;
position: relative;
border-radius:4px;
background-color:#f5f5f5;
padding-left:10px!important;
}

legend
{
	font-weight:bold;
	margin-bottom: 0px;
	border: 1px solid #ddd;
	border-radius: 4px;
	padding: 5px 5px 5px 10px;
	background-color: #e6f0ff;
	margin-left: 5px;
}
.A{
		width:35%;
		font-size:18px;

}
h2{
	color: blue;
}

		</style>

		<script>
		function checkAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
			url: "check_availability.php",
			data:'cdBeneficiario='+$("#cdBeneficiario").val(),
			type: "POST",
			success:function(data){
				$("#user-availability-status").html(data);
				$("#loaderIcon").hide();
			},
			error:function (){}
			});
		}
		</script>

	</head>
	<body>

		<?php include_once 'includes/header.php';
					include_once 'includes/insert.php';
		?>

		<div class="clearfix"></div>



		<?php
		if(isset($_GET['inserted']))
		{
			?>
		    <div class="container">
			<div class="alert alert-info">
		    Record was inserted successfully <a href="index.php">HOME</a>!
			</div>
			</div>
		    <?php
		}
		else if(isset($_GET['failure']))
		{
			?>
		    <div class="container">
			<div class="alert alert-warning">
		    <strong>SORRY!</strong> ERROR while inserting record !
			</div>
			</div>
		    <?php
		}


		?>

		<div class="clearfix"></div><br/>

		<header>

		<center><h2>Registo de beneficiario</h2></center>
		</header>
		<br>
		<div class="container">



			<a href="forms.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>


			<br><br><br>

			 <form method='post'>
				 <div class="col-md-5">

				 <table class='table borderless'>

				     <tr>
				         <td style="border-top: none;" style="border-top: none;">Código de Inquiridor:</td>
				         <td style="border-top: none;"> <input type='text' name='cdInquiridor' class='form-control' > </td>
				     </tr>

				     <tr>
				         <td style="border-top: none;">Código de Agregado:</td>
				         <td style="border-top: none;">  <input type='text' name='cdAgregado' class='form-control' >  </td>
				     </tr>

				     <tr>
				         <td style="border-top: none;">Código de Beneficiario:</td>
				         <td style="border-top: none;">  <input type='text' name='cdBeneficiario' class='form-control' id="cdBeneficiario" class="demoInputBox" onBlur="checkAvailability()"><span id="user-availability-status"></span>  </td>

				     </tr>
					 </table>

				</div>

				 <div class="panel panel-default">

				 			<div class="panel-body">

				   <fieldset class="col-md-12">

								<legend class="A"> Dados Demograficos</legend>
				 					<div class="panel panel-default">
				 						<div class="panel-body">
				 							 <table class='table borderless'>

												<tr>
													<td style="border-top: none;">Nome Completo:</td>
													<td style="border-top: none;">  <input type='text' name='nome'class='form-control' >  </td>

													<td style="border-top: none;">Numero de Identificacao:</td>
													<td style="border-top: none;">  <input type='text' name='N_Ident' class='form-control' >  </td>

													<td style="border-top: none;">Localidade:</td>
													<td style="border-top: none;">  <input type='text' name='localidade' class='form-control' >  </td>
												</tr>
												<tr>
													<td style="border-top: none;">Data de Nascimento:</td>
									        <td style="border-top: none;">  <input type="date" id="dob"  name='dataNasc' class='form-control'  >  </td>

													<td style="border-top: none;">Tipo Identificacao:</td>
														<td style="border-top: none;"><select id="selectbasic" name='T_Ident' class="form-control">
															<option value=""></option>
															<option value="BI">BI</option>
															<option value="Cedula">Cedula</option>
															<option value="Outro">Outro</option>
														</select>
													 </td>
													 <td style="border-top: none;">Bairro:</td>
									         <td style="border-top: none;">  <input type='text' name='Bairro' class='form-control' >  </td>
												</tr>
												<tr>
													<td style="border-top: none;">Sexo:</td>
													<td style="border-top: none;"><select id="selectbasic" name='sexo' class="form-control">
														 <option value="0"></option>
															<option value="M">Masculino</option>
															<option value="F">Femenino</option>
														</select>
													 </td>




													 <td style="border-top: none;">Provincia Atual:</td>
													 <td style="border-top: none;">
														 <select id="first" name='provincia' class="form-control">
															 <option value=""></option>
																 <option data-second='{ "names" : [{"name":"Manica"},{"name":"Chimoio"},{"name":"Gongola"}]}'>Manica</option>
																 <option data-second='{ "names" : [{"name":"Nhamatanda"},{"name":"Dondo"},{"name":"Beira"}]}'>Sofala</option>
																 <option data-second='{ "names" : [{"name":"Quelimane"},{"name":"Nicoadala"},{"name":"Namacura"},{"name":"Ille"},{"name":"Gune"},{"name":"Lugela"}]}'>Zambezia</option>
															 <option data-second='{ "names" : [{"name":"Xai-Xai cidade"},{"name":"Xai-Xai Distrito"},{"name":"Chokwe"}]}'>Gaza</option>
														 </select>
													 </td>

														 <td style="border-top: none;">Quarterao:</td>
														 <td style="border-top: none;">  <input type='text' name='Quarterao' class='form-control' >  </td>
												</tr>
												<tr>
													<td style="border-top: none;">Idade:</td>
													<td style="border-top: none;">  <input type='text' name='idade' id="age" class='form-control' >  </td>

													<td style="border-top: none;">Distrito Atual:</td>
													<td style="border-top: none;">
														<select id="second" name='distrito' class="form-control"></select>
													</td>

													<td style="border-top: none;">Ponto de Referencia:</td>
													<td style="border-top: none;">  <input type='text' name='pontReferencia' class='form-control' >  </td>
												</tr>
												<tr>
													<td style="border-top: none;">Naturalidade:</td>
													<td style="border-top: none;">  <input type='text' name='Naturalidade'] class='form-control' >  </td>

													<td style="border-top: none;">Posto Adminstrativo:</td>
													<td style="border-top: none;">  <input type='text' name='postAdmin' class='form-control' >  </td>

													<td style="border-top: none;">Contacto:</td>
													<td style="border-top: none;">  <input type='text' name='Contacto' class='form-control' >  </td>
												</tr>



											 </table>
				 						</div>
				 					</div>


				             <fieldset class="col-md-12">
				 					<legend class="A">Dados de Educacao</legend>

				 					<div class="panel panel-default">
				 						<div class="panel-body">
												 <table class='table borderless'>
				 							<tr>
												<td style="border-top: none;">Estudante:</td>
												<td style="border-top: none;"><select id="selectbasic" name='Estudante' class="form-control">
													 <option value="0"></option>
														<option value="Sim">Sim</option>
														<option value="Nao">Nao</option>
													</select>
												 </td>

												 <td style="border-top: none;">Turma:</td>
												 <td style="border-top: none;">  <input type='text' name='turma' class='form-control' >  </td>

												 <td style="border-top: none;">Ultimo ano que <br> esteve na escola:</td>
												 <td style="border-top: none;">  <input type='text' name='ultimoAno' class='form-control' >  </td>
				 							</tr>


											<tr>
												<td style="border-top: none;">Caso Sim,nome da<br>escola: </td>
												<td style="border-top: none;">  <input type='text' name='nomEscola' class='form-control' >  </td>

												<td style="border-top: none;">Numero:</td>
												<td style="border-top: none;">  <input type='text' name='numero' class='form-control' >  </td>

												<td style="border-top: none;">Nome da Escola: </td>
												<td style="border-top: none;">  <input type='text' name='UltEscola' class='form-control' >  </td>
											</tr>

											<tr>
												<td style="border-top: none;">Classe:</td>
												<td style="border-top: none;">  <input type='text' name='classe' class='form-control' >  </td>

												<td style="border-top: none;">Se nao estuda,<br> porque:</td>
												<td style="border-top: none;">  <input type='text' name='Senaoporque' class='form-control' >  </td>
											</tr>
								 </table>
				 						</div>
				 					</div>

				 				</fieldset>


				             <fieldset class="col-md-12">
				 					<legend class="A">Dados do Teste/HIV</legend>

				 					<div class="panel panel-default">
				 						<div class="panel-body">
												 <table class='table borderless'>
				 			<tr>
								<td style="border-top: none;">Alguma vez ja fez <br>o teste de HIV:</td>
								<td style="border-top: none;"><select id="selectbasic" name='texteHIV' class="form-control">
									 <option value="0"></option>
										<option value="1">Sim</option>
										<option value="2">Nao</option>
									</select>
								 </td>

								 <td style="border-top: none;">Caso Sim,qual foi <br>o ultimo resultado:</td>
								 <td style="border-top: none;"> <select id="selectbasic" name='resultado' class="form-control" >
										<option value="0"></option>
											 <option value="1">Pos</option>
											 <option value="2">Neg</option>
											 <option value="3">Ind</option>
							 </select>
							</td>
							<td style="border-top: none;">Caso positivo,<br>Em tratamento tarv:</td>
							<td style="border-top: none;"> <select id="selectbasic" name='Tarv' class="form-control" >
								 <option value="0"></option>
										<option value="1">Sim</option>
										<option value="2">Nao</option>

						</select>
		</td>
				 			</tr>

							<tr>
								<td style="border-top: none;">Pretendes Compartilhar <br>o Resultado:</td>
								<td style="border-top: none;"><select id="selectbasic" name='Compartilhar' class="form-control" >
									 <option value="0"></option>
										<option value="1">Sim</option>
										<option value="2">Nao</option>
									</select>
								 </td>

								         <td style="border-top: none;">Quando Fex o <br> Teste? data:</td>
								         <td style="border-top: none;">  <input type='date' name='dataTexte' class='form-control' >  </td>



							</tr>
								 </table>
				 						</div>
				 					</div>

				 				</fieldset>


										<fieldset class="col-md-12">
								 <legend class="A">Dados de Habitacao</legend>

								 <div class="panel panel-default">
									 <div class="panel-body">
												<table class='table borderless'>
												<tr>
													<td style="border-top: none;">Orfao de:</td>
													<td style="border-top: none;"> <select id="selectbasic" name='orfao' class="form-control" >
														 <option value="0"></option>
																<option value="Pai">Pai</option>
																<option value="Mae">Mae</option>
																<option value="Ambos">Ambos</option>
																<option value="Nao e Orfao">Nao e Orfao</option>
												</select>
											 </td>
											 <td style="border-top: none;">Tipo de Habitacao:</td>
											 <td style="border-top: none;"> <select id="selectbasic" name='tipoHabt' class="form-control" >
													<option value="0"></option>
														 <option value="Precaria">Precaria</option>
														 <option value="Convecional">Convecional</option>
														 <option value="Meio-Convecional">Meio-Convecional</option>
										 </select>
										 </td>

										 <td style="border-top: none;">Historico Social <br> da Familia:</td>
										 <td style="border-top: none;">   <textarea class="form-control" id="textarea" name='historico'></textarea> </td>
										 </tr>
											 <tr>
											 <td style="border-top: none;">De todos os membros<br>Listados, qual e o nome do <br> Chefe de Familia: </td>
											 <td style="border-top: none;">  <input type='text' name='chefe' class='form-control' >  </td>

											 <td style="border-top: none;">Coordenadas GPS:<br> Latitude</td>
											 <td style="border-top: none;">   <textarea class="form-control" id="textarea" name='latitude'></textarea>  </td>

											 <td style="border-top: none;">Observacao:</td>
											 <td style="border-top: none;">  <input type='text' name='observacao' class='form-control' >  </td>
												</tr>

												<tr>
													<td style="border-top: none;"> Situacao Habitacional <br> da Casa:</td>
													<td style="border-top: none;"> <select id="selectbasic" name='situacaoHabt' class="form-control" >
														 <option value="0"></option>
																<option value="Propia">Propia</option>
																<option value="Alugada">Alugada</option>
												</select></td>

												<td style="border-top: none;">Coordenadas GPS:<br> Longitude</td>
												<td style="border-top: none;">   <textarea class="form-control" id="textarea" name='longitude'></textarea> </td>
												</tr>
								</table>
									 </div>
								 </div>

							 </fieldset>



				           <fieldset class="col-md-12">
				        <legend class="A">Dados de Recolha</legend>

				        <div class="panel panel-default">
				          <div class="panel-body">
				               <table class='table borderless'>
				                 <tr>
				                   <td style="border-top: none;">Prenchido Por: </td>
				                   <td style="border-top: none;"> <input type='text' name='prenchido' class='form-control' >  </td>


				                   <td style="border-top: none;">Outros</td>
				                   <td style="border-top: none;">  <input type='text' name='outros' class='form-control' >  </td>

				                   <td style="border-top: none;">Posicao:</td>
				                   <td style="border-top: none;">  <input type='text' name='Posicao' class='form-control' >  </td>
				                 </tr>

				                 <tr>
				                   <td style="border-top: none;">Funcao:</td>
				                   <td style="border-top: none;">  <input type='text' name='funcao' class='form-control' >  </td>

				                   <td style="border-top: none;">Contacto:</td>
				                   <td style="border-top: none;">  <input type='text' name='Scontacto' class='form-control' >  </td>

				                   <td style="border-top: none;">Contacto:</td>
				                   <td style="border-top: none;">  <input type='text' name='TContacto' class='form-control' >  </td>

				                 </tr>

				                 <tr>
				                   <td style="border-top: none;">Nome da CBO:</td>
				                   <td style="border-top: none;">
														 <select name='cbo' class="form-control">
						 								<option value="0"></option>
						 								<optgroup label="Manica">
						 									<option value="ANDA">ANDA</option>
						 									<option value="Kubatsirana">Kubatsirana</option>
						 								</optgroup>
						 								<optgroup label="Sofala">
						 									<option value="CCM">CCM</option>
						 									<option value="SOPROC">SOPROC</option>
						 									<option value="Kugarissica">Kugarissica</option>
						 									<option value="COMUSSANAS">COMUSSANAS</option>
						 								</optgroup>
						 								<optgroup label="Zambezia">
						 									<option value="AMME">AMME</option>
						 									<option value="NAFEZA">NAFEZA</option>
						 									<option value="Kukumbi">Kukumbi</option>

						 								</optgroup>
						 								<optgroup label="Gaza">
						 									<option value="Vukotxa">Vukotxa</option>
						 									<option value="OCSIDA">OCSIDA</option>
						 									<option value="Kuvumbana">Kuvumbana</option>
						 									<option value="Activa">Activa</option>
						 									<option value="Udeba">Udeba</option>
						 									<option value="Arepacho">Arepacho</option>
						 								</optgroup>
						 								</select>														 </td>

				                   <td style="border-top: none;">Data:</td>
				                   <td style="border-top: none;">  <input type='date' name='Sdata' class='form-control' >  </td>

				                   <td style="border-top: none;">Data:</td>
				                   <td style="border-top: none;">  <input type='date' name='DataV' class='form-control' >  </td>
				                 </tr>


				                 <tr>

				                           <td style="border-top: none;">Nome do Pograma:</td>
				                           <td style="border-top: none;"> <select id="selectbasic" name='NomePogram' class="form-control" >
				                              <option value="0"></option>
				                                 <option value="FCC">FCC</option>
				                                 <option value="DREAMS">DREAMS</option>
				                                 <option value="Outros">Outros</option>
				                         </select>
				                         </td>

				                         <td style="border-top: none;">Nome do <br> Tecnico CBO:</td>
				                         <td style="border-top: none;">  <input type='text' name='NomeTecnico' class='form-control' >  </td>
				       </tr>


				     </table>
				        </div>
				      </div>

				    </fieldset>

				    <div class="clearfix"></div>
				         </div>

				</div>

				<table class='table borderless'>
				<tr>
				    <td style="border-top: none;" colspan="2">
				    <button type="submit" class="btn btn-primary" name="btn-save">
				    <span class="glyphicon glyphicon-plus"></span> Adicionar
				    </button>
				    <a href="forms.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar ao dashboard</a>
				      </td>
				</tr>

				</table>
				</form>



		</div>

		<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

		<script src="js/main.js"></script>

		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/popper/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
		<!-- Page level plugin JavaScript-->
		<script src="vendor/datatables/jquery.dataTables.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin.min.js"></script>
		<!-- Custom scripts for this page-->
		<script src="js/sb-admin-datatables.min.js"></script>

		<script src="js/main.js"></script>


		<script>
		  $( function() {
		    $( "#datepicker" ).datepicker();
		  } );
		  </script>

	</body>

</html>
