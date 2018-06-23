<?php include_once 'includes/planoAcao_insert.php';?>

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
	<?php

	if(isset($_POST['btn-verify'])){

		$verifiedCod = $_POST['codBen'];


	}
	else {
		$verifiedCod = 0;
	}


	 ?>
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
			<br><br>
			<a href="forms.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>

		<br>
		<br>
		 <form class="form" method="post">

		<div class="row">
			<div class="col-md-3">
				<label for="">Codigo de Benificiario:</label>
			</div>
			<div class="col-md-6">
			 <input type='text' name='codBen'class='form-control' >
			</div>
			<div class="col-md-3">
			 <button id="singlebutton" name="btn-verify" class="btn btn-success">Verificar</button>
			</div>
			<br><br><br><br>

		</div>

				<?php

			 $query = "SELECT * FROM reg_ben WHERE cod_beneficiario = '$verifiedCod' ";
			 $records_per_page=20;
			 $newquery = $crud->paging($query,$records_per_page);
			 $crud->dataview_plano_verify($newquery);
			?>

		</div>
		<script src="js/jquery.js"> </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



		</body>


		</html>
