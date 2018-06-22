<?php
session_start();

require_once 'dbconfig.php';
require_once('class.user.php');

$auth_user = new USER();

   if(isset($_GET["id"])){

     $id1 = $_GET["id"];

     $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id = $id1  ");
     $stmt->execute();

     $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

   }






// Processing form data when form is submitted
if(isset($_POST['btn-update'])){
   // Get hidden input value
   $id = $_POST["id"];


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
   $senha = "1234" ;

   if($nome=="")	{
     $error[] = "Providencie um nome de usuario !";
   }
   else if($email=="")	{
     $error[] = "Providencie um email !";
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL))	{
       $error[] = 'Por favor, introduz um email valido !';
   }


       // runQuery an insert statement
       $sql = "UPDATE users SET user_name=:uname,sexo=:sexo,user_email=:umail,ocb=:ocb,user_pass=:upass,provincia=:provincia,distrito=:distrito,contacto=:contacto,nivel=:nivel,cod_digitador=:cod_digitador,area_actuacao=:area_actuacao
 																							WHERE user_id=:id ";

       if($stmt = $auth_user->runQuery($sql)){

          $new_password = password_hash($senha, PASSWORD_DEFAULT);
           // Bind variables to the runQueryd statement as parameters


           $stmt->bindparam(":id", $id);
           $stmt->bindparam(":uname", $nome);
           $stmt->bindparam(":sexo", $sexo);
           $stmt->bindparam(":umail", $email);
           $stmt->bindparam(":ocb", $ocb);
           $stmt->bindparam(":upass", $new_password);
           $stmt->bindparam(":provincia", $provincia);
           $stmt->bindparam(":distrito", $destrito);
           $stmt->bindparam(":contacto", $contacto);
           $stmt->bindparam(":nivel", $nivel);
           $stmt->bindparam(":cod_digitador", $cod_digitador);
           $stmt->bindparam(":area_actuacao", $area_actuacao);

           $stmt->execute();

           header("location: userTable.php");





       }

       // Close statement
       unset($stmt);


   // Close connection
   unset($auth_user);
} else{

   // Check existence of id parameter before processing further
   if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
       // Get URL parameter
       $id =  trim($_GET["id"]);

       // runQuery a select statement
       $sql = "SELECT * FROM users WHERE user_id = :id";
       if($stmt = $auth_user->runQuery($sql)){
           // Bind variables to the runQueryd statement as parameters
           $stmt->bindParam(':id', $id);


           // Attempt to execute the runQueryd statement
           if($stmt->execute()){
               if($stmt->rowCount() == 1){
                   /* Fetch result row as an associative array. Since the result set
                   contains only one row, we don't need to use while loop */
                   $row = $stmt->fetch(PDO::FETCH_ASSOC);


               } else{
                   // URL doesn't contain valid id. Redirect to error page
                   header("location: error.php");
                   exit();
               }

           } else{
               echo "Oops! Something went wrong. Please try again later.";
           }
       }

       // Close statement
       unset($stmt);

       // Close connection
       unset($auth_user);
   }  else{
       // URL doesn't contain id parameter. Redirect to error page
       header("location: error.php");
       exit();
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
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Dados Atualizados com sucesso <a href='index.php'></a>
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
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name='nome' placeholder="Nome Completo" value="<?php print($userRow['user_name']); ?>">
              </div>
							<div class="col-md-2">
								<label for="exampleInputName">Sexo</label>
								<select id="selectbasic" name='sexo' class="form-control" >
								<option value="<?php print($userRow['sexo']); ?>"> <?php print($userRow['sexo']); ?> </option>
									<option value="Masculino">M</option>
									<option value="Femenino">F</option>

								</select>
              </div>

              <div class="col-md-4">
                <label for="exampleInputName">Provincia</label>

                <select id="selectbasic" name='provincia' class="form-control" >
                <option value="<?php print($userRow['provincia']); ?>"><?php print($userRow['provincia']); ?></option>
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
								<select id="nivel" name='distrito' class="form-control">
								<option value="<?php print($userRow['distrito']); ?>"><?php print($userRow['distrito']); ?></option>

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
                <input class="form-control" id="exampleConfirmPassword" type="text" name='contacto' placeholder="Contacto" value="<?php print($userRow['contacto']); ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-2">
                <label for="exampleInputPassword1">Nivel</label>
                <select id="nivel" name='nivel' class="form-control">
                <option value="<?php print($userRow['nivel']); ?>"><?php print($userRow['nivel']); ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
              <div class="col-md-4">
                <div id="codDig">
                  <label for="exampleInputPassword1" >Codigo do digitador</label>
                  <input class="form-control" id="" type="text" name='cod_digitador' placeholder="Codigo do digitador" value="<?php print($userRow['cod_digitador']); ?>">
                </div>
              </div>

              <div class="col-md-5">
                <div id="codDig">
                  <label for="exampleInputPassword1" >Area de actuaçao</label>
                  <input class="form-control" id="" type="text" name='area_actuacao' placeholder="Codigo do digitador" value="<?php print($userRow['area_actuacao']); ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<label for="exampleInputEmail1">Email</label>
								<input class="form-control" id="exampleInputEmail1" type="email" name='email' aria-describedby="emailHelp" placeholder="Email" value="<?php print($userRow['user_email']); ?>">
							</div>

							<div class="col-md-4">
								<label for="exampleInputPassword1">OCB</label>
								<select name='ocb' class="form-control">
								<option value="<?php print($userRow['ocb']); ?>"><?php print($userRow['ocb']); ?></option>
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


          <input type="hidden" name="id" value="<?php echo $id; ?>"/>

          <button type="submit" class="btn btn-primary btn-block" name="btn-update">
              <i class="glyphicon glyphicon-open-file"></i>&nbsp;ACTUALIZAR
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
