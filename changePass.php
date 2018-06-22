<?php
session_start();

require_once 'dbconfig.php';
require_once('class.user.php');
$user = new USER();
$login = new USER();




$user_id = $_SESSION['user_session'];

$stmt = $login->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));

$userRow=$stmt->fetch(PDO::FETCH_ASSOC);


$nivel = $userRow['user_email'];





if(isset($_POST['btn-login']))
{

	$id = $user_id;
	$password = strip_tags($_POST['password']);
	$confirmPass = strip_tags($_POST['confirmPass']);

if ($password != $confirmPass) {
	$error = "Senha nao corresponde !";

}

else if(strlen($password) < 6){
	$error[] = "A Senha deve conter ao menos 6 caracteres";
}
else {

$login->updatePass($id,$password);


$login->redirect('index.php');


}
	//
	// if($login->doLogin($uname,$umail,$upass))
	// {
	// 	$login->redirect('dashboard.php');
	// }
	// else
	// {
	// 	$error = "Wrong Details !";
	// }
}
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
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index1.html"><b>Bantwana</b>DataServ</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Atualizar Senha de <?php echo $nivel; ?></p>

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
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha" name="password">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Confirmar Senha" name="confirmPass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn-login">Atualizar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
