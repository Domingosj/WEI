
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
  <!Doctype html>
  <html>
  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Plano de açao</title>
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

      <!-- Google Font -->

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
</head>
<body>

  <?php include_once 'includes/planoAcao_insert.php';?>


  <?php
  if(isset($_GET['inserted']))
  {
    ?>
      <div class="container">
    <div class="alert alert-info">
      Dado inserido com sucesso <a href="forms.php">Voltar</a>!
    </div>
    </div>
      <?php
  }
  else if(isset($_GET['failure']))
  {
    ?>
      <div class="container">
    <div class="alert alert-warning">
      <strong>Erro!</strong> Falha ao inserir os dados !
    </div>
    </div>
      <?php
  }
  ?>

  <br><br>
    <div class="login-logo">
      <a href="#">Plano de açao</a>
    </div>



<div class="container">

<br>
<br>
<a href="forms.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>

<br>
<br>
<br>
<br>

<form class="form" method="post">
  <div class="panel panel-default">

       <div class="panel-body">

              <fieldset class="col-md-12">

                 <legend class="A">  Dados Demograficos</legend>
           <div class="panel panel-default">
             <div class="panel-body">
             <div class="row">

               <div class="col-md-3">
                 <label for="">Nome do membro do CCPC:</label>
                 <input type='text' name='nomeMembroCCPC' class='form-control' >
               </div>


               <div class="col-md-3">
                 <label for="">Nome DA OCB</label>
								 <select name='nomeOCB' class="form-control">
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
			 					</select>               </div>




               <div class="col-md-3">
                 <label for="">Distrito</label>
								 <select id="nivel" name='distrito' class="form-control">
							 	<option value="0"></option>
							 	<optgroup label="Manica">
							 		<option value="Manica">Manica</option>
							 		<option value="Chimoio">Chimoio</option>
							 		<option value="Gondola">Gondola</option>
							 	</optgroup>
							 	<optgroup label="Sofala">
							 		<option value="Beira">Beira</option>
							 		<option value="Dondo">Dondo</option>
							 		<option value="Nhamatanda">Nhamatanda</option>
							 	</optgroup>
							 	<optgroup label="Zambezia">
							 		<option value="Quelimane">Quelimane</option>
							 		<option value="Nicoadala">Nicoadala</option>
							 		<option value="Namacurra">Namacurra</option>
							 		<option value="Ile">Ile</option>
							 		<option value="Lugela">Lugela</option>
							 		<option value="Gurue">Gurue</option>
							 	</optgroup>
							 	<optgroup label="Gaza">
							 		<option value="Chokwe">Chokwe</option>
							 		<option value="Xaixai Cidade">Xaixai Cidade</option>
							 		<option value="Xaixai Distrito">Xaixai Distrito</option>
							 	</optgroup>
							 	</select>               </div>

             </div>

             <br>



             <div class="row">

               <div class="col-md-3">
                 <label for="">Nome da Criança</label>
                 <input type='text' name='nomeCrianca' class='form-control' >
               </div>



               <div class="col-md-3">
                 <label for="">Codigo do Benificiario</label>
                 <input type='text' name='codBen' class='form-control' >
               </div>



               <div class="col-md-3">
                 <label for="">Data</label>
                 <input input id="date" type="date" name='data' class='form-control' >
               </div>



             </div>

             <br>


             <div class="row">

               <div class="col-md-3">
                 <label for="">Periodo de Seguimento (Data)</label>
                 <input input id="date" type="date" name='dataPeriodoSeg' class='form-control' >

               </div>

               <div class="col-md-3">
                 <label for="">Passou para manutenção (Data)</label>
                 <input input id="date" type="date" name='dataManutencao' class='form-control' >
               </div>

               <div class="col-md-3">
                 <label for="">Passou para graduação (Data)</label>
                 <input input id="date" type="date" name='dataGraduacao' class='form-control' >
               </div>

             </div>

             </div>
           </div>


              <fieldset class="col-md-12">
           <legend class="A">Area de Servico</legend>

           <div class="panel panel-default">
             <div class="panel-body">
             <div class="row">

               <div class="col-md-3">

                 <label for=""><br>Area de Serviço</label>
                 <input type='text' name='areaServico' class='form-control' >

               </div>

               <div class="col-md-3">

                 <label for="">Necessidades Prioritária por Serviço no maximo (3)</label>
                 <input type='text' name='necessidadePrioritarea' class='form-control' >

               </div>

               <div class="col-md-3">

                 <label for=""><br>Pontuação (1,2)</label>
                 <input type='text' name='pontuacao' class='form-control' >

               </div>

               <div class="col-md-3">

                 <label for=""><br>Necessidades Resolvidas (X)</label>
                 <input type='text' name='necessidadesResolvidas' class='form-control' >

               </div>





             </div>

           <br><br>

               <div class="row">

                 <div class="col-md-3">

                   <label for="">Data (mês)</label>
                   <input input id="date" type="date" name='data_2' class='form-control' >

                 </div>
                 </div>

             </div>
           </div>

         </fieldset>


              <fieldset class="col-md-12">
           <legend class="A">Apoio Direito</legend>

           <div class="panel panel-default">
             <div class="panel-body">
                       <div class="row">

                               <div class="col-md-3">
                                 <label for="">Apoio Direito</label>
                                 <input type='text' name='apoioDireito' class='form-control' >
                               </div>

                               <div class="col-md-3">
                                 <label for="">Realizado(X)</label>
                                 <input type='text' name='realizado_1' class='form-control' >
                               </div>

                               <div class="col-md-3">
                                 <label for="">Data(mês)</label>
                                 <input type='text' name='data_3' class='form-control' >
                               </div>
                       </div>
         </fieldset>


             <fieldset class="col-md-12">
          <legend class="A">Apoio por Referência</legend>

          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">

                <div class="col-md-3">
                  <label for="">Apoio por Referência</label>
                  <input type='text' name='apoioPorReferenc' class='form-control' >
                </div>

                <div class="col-md-3">
                  <label for="">Completo (X)</label>
                  <input type='text' name='completou' class='form-control' >
                </div>

                <div class="col-md-3">
                  <label for="">Data (mês)</label>
                  <input type='text' name='data_4' class='form-control' >
                </div>
              </div>
            </div>
          </div>

        </fieldset>



            <fieldset class="col-md-12">
         <legend class="A">Acção da Familia</legend>

         <div class="panel panel-default">
           <div class="panel-body">
                <div class="row">
                  <div class="col-md-3">
                    <label for="">Acção da Familia</label>
                    <input type='text' name='acaoDaFamilia' class='form-control' >
                  </div>

                  <div class="col-md-3">
                    <label for="">Realizado (X)</label>
                    <input type='text' name='realizado' class='form-control' >
                  </div>

                  <div class="col-md-3">
                    <label for="">Data (mês)</label>
                    <input type='text' name='data_5' class='form-control' >
                  </div>

                  <div class="col-md-3">
                    <label for="">Comentarios</label>
                    <input type='text' name='comentarios' class='form-control' >
                  </div>

                </div>
         </div>
       </div>

     </fieldset>



<br><br>
     <div class="row">

           <div class="col-md-3">
                 <label for="">Assinatura do membro de CCPC:</label>
                 <input type='text' name='membroCCPC' class='form-control' >
           </div>

             <div class="col-md-3">
                   <label for="">Data:</label>
                   <input type='date' name='data_6' class='form-control' >
             </div>



     </div>

     <br><br>

     <div class="row">

           <div class="col-md-3">
                 <label for="">Assinatura do Gestor de Caso:</label>
                 <input type='text' name='gestorCaso' class='form-control' >
           </div>

             <div class="col-md-3">
                   <label for="">Data:</label>
                   <input type='date' name='data_7' class='form-control' >
             </div>



     </div>



<br><br><br>
        <div class="row">

          <div class="col-md-5">

          </div>

          <div class="col-md-2">
            <button type="submit" class="btn btn-primary btn-block" name="submeter" align="center">
                <i class="glyphicon glyphicon-plus" ></i>&nbsp;Submeter
              </button>

          </div>

        </div>

    <br><br>

  </div>





</div>
</form>

  <script src="js/main.js"></script>

  <script src="js/jquery.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>


</body>


</html>
