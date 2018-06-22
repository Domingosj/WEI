<?php
session_start();
require_once("class.user.php");
$login = new USER();



if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);

	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('dashboard.php');
	}
	else
	{
		$error = "Wrong Details !";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

<link href="css/login.css" rel="stylesheet">

<!-- Bootstrap core CSS-->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">
</head>
<body>


	<div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post">
          <div id="error">
  <?php
if(isset($error))
{
  ?>
          <div class="alert alert-danger">
             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
          </div>
          <?php
}
?>
  </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="email" name="txt_uname_email">
            <span id="check-e"></span>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="txt_password">
          </div>

					<button type="submit" class="btn btn-primary btn-block" name="btn-login">
              <i class="glyphicon glyphicon-open-file"></i>&nbsp;Entrar
            </button>
        </form>

      </div>
    </div>
  </div>


</body>
</html>
