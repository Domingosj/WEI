<?php
session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('dashboard.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['nome']);
	$umail = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['senha']);
	$provincia = strip_tags($_POST['provincia']);
	$distrito  = strip_tags($_POST['distrito']);
	$contacto  = strip_tags($_POST['contacto']);
	$nivel = strip_tags($_POST['nivel']);
	$cod_digitador  = strip_tags($_POST['cod_digitador']);



	if($uname=="")	{
		$error[] = "providencie o nome do usuario !";
	}
	else if($umail=="")	{
		$error[] = "providencie um email !";
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Porfavor providencie um email valido !';
	}
	else if($upass=="")	{
		$error[] = "providencie uma senha !";
	}
	else if(strlen($upass) < 6){
		$error[] = "A senha deve conter mais de 6 carecteres";
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);

			if($row['user_name']==$uname) {
				$error[] = "sorry username already taken !";
			}
			else if($row['user_email']==$umail) {
				$error[] = "sorry email id already taken !";
			}
			else
			{
				if($user->register($uname,$umail,$upass,$provincia,$distrito,$contacto,$nivel,$cod_digitador)){
					$user->redirect('sign-up.php?joined');
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign up</title>

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">

<div class="signin-form">

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
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Cadastrado com sucesso <a href='index.php'>login</a> aqui
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
              <div class="col-md-6">
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
                <input class="form-control" id="exampleInputPassword1" type="text" name='distrito' placeholder="Distrito">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Contacto</label>
                <input class="form-control" id="exampleConfirmPassword" type="text" name='contacto' placeholder="Contacto">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <label for="exampleInputPassword1">Nivel</label>
                <select id="nivel" name='nivel' class="form-control">
                <option value="0"></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
              <div class="col-md-6">
                <div id="codDig">
                  <label for="exampleInputPassword1" >Codigo do digitador</label>
                  <input class="form-control" id="" type="text" name='cod_digitador' placeholder="Codigo do digitador">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name='email' aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Senha</label>
                <input class="form-control" id="exampleInputPassword1" type="password" name='senha' placeholder="Senha">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirmar a senha</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" name='senha2' placeholder="Confirmar a senha">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="btn-signup">
              <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
            </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html" name="">Entrar</a>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

</body>
</html>
