<?php
session_start();

require_once 'dbconfig.php';
require_once('class.user.php');
$user = new USER();

if(isset($_POST['btn-signup']))

{

	$nome = strip_tags($_POST['nome']);
	$sexo = strip_tags($_POST['sexo']);
	$provincia = strip_tags($_POST['provincia']);
	$destrito = strip_tags($_POST['distrito']);
	$contacto = strip_tags($_POST['contacto']);
	$nivel = strip_tags($_POST['nivel']);
	$cod_digitador = strip_tags($_POST['cod_digitador']);
	$area_actuacao = strip_tags($_POST['area_actuacao']);
	$email = strip_tags($_POST['email']);
	$ocb = strip_tags($_POST['ocb']);
	$senha = "1234";

	if($nome=="")	{
		$error[] = "Providencie um nome de usuario !";
	}
	else if($email=="")	{
		$error[] = "Providencie um email !";
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Por favor, introduz um email valido !';
	}
	// else if($senha=="")	{
	// 	$error[] = "provide password !";
	// }
	// else if(strlen($senha) < 6){
	// 	$error[] = "Password must be atleast 6 characters";
	// }
	else
	{
		try
		{





		$stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:nome OR user_email=:email");
		$stmt->execute(array(':nome'=>$nome, ':email'=>$email));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if($row['nome']==$nome) {
				$error[] = "sorry username already taken !";
			}
			else if($row['email']==$email) {
				$error[] = "sorry email id already taken !";
			}
			else
			{
				if($user->register($nome,$sexo,$email,$ocb,$senha,$provincia,$destrito,$contacto,$nivel,$cod_digitador,$area_actuacao)){


					header("Location:register.php?joined");

				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}

?>

<!Doctype html>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cadastro de Usuarios</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><h3>Cadastro de usuarios</h3></div>
      <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Registrado com sucesso <a href='dashboard.php'>Voltar ao sistema</a> 
                 </div>
                 <?php
			}
			?>
      <div class="card-body">




        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nome</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name='nome' placeholder="Nome Completo">
              </div>
							<div class="col-md-2">
								<label for="exampleInputName">Sexo</label>
								<select id="selectbasic" name='sexo' class="form-control">
								<option value=""></option>
									<option value="Masculino">M</option>
									<option value="Femenino">F</option>

								</select>							</div>
              <div class="col-md-4">
                <label for="exampleInputName">Provincia</label>

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
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Distrito</label>
								<select id="" name='distrito' class="form-control">
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
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Contacto</label>
                <input class="form-control" id="exampleConfirmPassword" type="text" name='contacto' placeholder="Contacto">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <label for="exampleInputPassword1">Nivel</label>
                <select id="nivel" name='nivel' class="form-control">
                <option value="0"></option>
                 <option value="1">Administrador</option>
                  <option value="2">Especialista M/A</option>
                  <option value="3">Gestores M/A</option>
                  <option value="4">Digitador</option>
                </select>
              </div>
              <div class="col-md-4">
                <div id="codDig">
                  <label for="exampleInputPassword1" >Codigo do digitador</label>
                  <input class="form-control" id="" type="text" name='cod_digitador' placeholder="Codigo do digitador">
                </div>
              </div>

							<div class="col-md-5">
								<div id="codDig">
									<label for="exampleInputPassword1" >Area de actuaçao</label>
									<input class="form-control" id="" type="text" name='area_actuacao' placeholder="Codigo do digitador">
								</div>
							</div>

            </div>
          </div>
          <div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<label for="exampleInputEmail1">Email</label>
								<input class="form-control" id="exampleInputEmail1" type="email" name='email' aria-describedby="emailHelp" placeholder="Email">
							</div>

							<div class="col-md-4">
								<label for="exampleInputPassword1">OCB</label>
								<select name='ocb' class="form-control">
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
								</select>
							</div>
						</div>
					</div>

          <button type="submit" class="btn btn-primary btn-block" name="btn-signup">
              <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
            </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="dashboard.php" name="">Voltar ao sistema</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Core plugin JavaScript-->

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
