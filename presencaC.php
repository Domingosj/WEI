
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
    <title>Pagina Inicial </title>
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

    <!-- Google Font -->



  <style type="text/css">
  *{
    margin:0px;
  }
  body{
      background-color: #e6f0ff;
  }
  h2{
    color: blue;
  }
 </style>
</head>
<body>

  <?php include_once 'includes/presenca_insertC.php';?>


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
  			<a href="#">Presença</a>
  		</div>



<div class="container">
<br>
<br>
<a href="presensa_forms.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>

<br>
<br>
<br>
<br>

<form class="form" method="post">

<div class="form-group">
<div class="row">
  <div class="col-md-3">
    <label for="">Projecto</label>
    <select id="selectbasic" name='projecto' class="form-control">
      <option value="FCC">FCC</option>
      <option value="DREAMS">DREAMS</option>
    </select>
  </div>

  <div class="col-md-2">
    <label for="">Data do inicio</label>
    <input input id="date" type="date" name='dataInicio' class='form-control' >
  </div>

  <div class="col-md-2">
    <label for="">Data do fim</label>
    <input input id="date" type="date" name='data_fim' class='form-control' >
  </div>

</div>

<br>

  <div class="row">
    <div class="col-md-3">
      <label for="">Provincia</label>
			<select id="selectbasic" name='provincia' class="form-control">
			<option value=""></option>
				<option value="Maputo">Maputo</option>
				<option value="Maputo">Maputo (cidade)</option>
				<option value="Gaza">Gaza</option>
				<option value="Inhambane">Inhambane</option>
				<option value="Manica">Manica</option>
				<option value="Sofala">Sofala</option>
				<option value="Tete">Tete</option>
				<option value="Zambézia">Zambézia</option>
				<option value="Niassa">Niassa</option>
				<option value="Nampula">Nampula</option>
				<option value="Cabo Delgado">Cabo Delgado</option>
			</select>
    </div>

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
			</select>
		</div>

    <div class="col-md-3">
      <label for="">Parceiro de Implementacao</label>
			<select name='parceiro' class="form-control" >
				<option value="<?php echo $ocb; ?>"><?php echo $ocb; ?></option>
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
			</select>    </div>

    <div class="col-md-3">
      <label for="">Actividade</label>
      <select id="selectbasic" name='actividade' class="form-control">
        <option value=""></option>

        <option value="Sessoes sobre as normas de genero no contexto de HIV/SIDA realizados">Sessoes sobre as normas de genero no contexto de HIV/SIDA realizados</option>
        <option value="Encontros trimestrais e multisectoriais realizadas no ambito de coordenacao das actividades de COVs">Encontro trimestrais e multisectoriais no ambito de coordenacao das actividades de COVs</option>
        <option value="Treinamentos realizados nas diferentes areas (no acto de reporte deve especificar o tipo de treinamento, seja de VBG, Mentores, VSLA, gestao de caso, educacao parental etc).">Treinamentos realizados nas diferentes áreas (no acto de reporte deve especificar o tipo de treinamento, seja de VBG, Mentores, VSLA, gestao de caso, educacao parental etc)</option>
        <option value="Grupos de Educacao Parental">Grupos de Educação Parental</option>
        <option value="Clubes dos direitos da crianca(CRC)existente">Clubes dos direitos da criança (CRC) existente</option>
        <option value="Centros infantis existentes">Centros infantis existentes</option>
        <option value="Grupos de poupanca (VSLAs) criadas">Grupos de poupança (VSLAs) criadas</option>
				<option value="Grupos de emponderamento (YES CLUBs) criadas">Grupos de emponderamento (YES CLUBs) criadas</option>
      </select>
    </div>
  </div>

  <br>



    <div class="row">

      <div class="col-md-3">
        <label for="">Organização/Instituição</label>
        <input type='text' name='Organizacao' class='form-control' >
      </div>

      <div class="col-md-3">
        <label for="">Proveniência</label>
        <input type='text' name='proveniencia' class='form-control' >
      </div>
			<div class="col-md-3">
				<label for="">Função</label>
				<input type='text' name='funcao' class='form-control' >
			</div>
			<div class="col-md-3">
				<label for="">Numero Total</label>
				<input type='text' name='numero' class='form-control' >
			</div>

    </div>

    <br>


    <div class="row">

      <div class="col-md-3">
        <label for="">Contacto</label>
        <input type='text' name='contacto' class='form-control'>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary btn-block" name="submeter">
            <i class="glyphicon glyphicon-plus" ></i>&nbsp;Submeter
          </button>

      </div>
			<div class="col-md-2">
				<a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar ao dashboard</a>
			</div>
    </div>

</form>

</div>

  <script src="js/main.js"></script>

  <script src="js/jquery.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>


</body>


</html>
