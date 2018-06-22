
<?php include_once 'dbconfig.php';?>

<?php
	require_once("session.php");


	require_once("class.user.php");
	$auth_user = new USER();

	$stmt = $auth_user->runQuery("SELECT * FROM users");
	$stmt->execute();

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	$nivel = $userRow['nivel'];
	$ocb = $userRow['ocb'];


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



  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php include_once 'includes/head.php' ?>
	<aside class="main-sidebar">
	  <!-- sidebar: style can be found in sidebar.less -->
	  <section class="sidebar">
	    <!-- Sidebar user panel -->
	    <div class="user-panel">
	      <div class="pull-left image">
	        <img src="dist/img/boxed-bg.jpg" class="img-circle" alt="User Image">
	      </div>
	      <div class="pull-left info">
	        <p><?php print($userRow['nome']); ?></p>
	        <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
	      </div>
	    </div>
	    <!-- search form -->

	    <!-- /.search form -->
	    <!-- sidebar menu: : style can be found in sidebar.less -->
	    <ul class="sidebar-menu" data-widget="tree">

	      <li class="header">MENU</li>
	      <li class="active">
	        <a href="dashboard.php">
	          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
	          <span class="pull-right-container">
	            <i class="fa fa-angle-left pull-right"></i>
	          </span>
	        </a>

	      </li>
	      <li>
	        <a href="forms.php">
	          <i class="fa fa-pencil"></i> <span>Formularios</span>
	          <span class="pull-right-container">

	          </span>
	        </a>
	      </li>
	      <li>
	        <a href="tables.php">
	          <i class="fa fa-table"></i> <span>Atualizacoes</span>
	          <span class="pull-right-container">

	          </span>
	        </a>
	      </li>

	      <li>
	        <a href="validacoes.php">
	          <i class="fa fa-check-square"></i> <span>Validacoes</span>
	          <span class="pull-right-container">

	          </span>
	        </a>
	      </li>
	      <li>
	        <a href="cascataServicos.php">
	          <i class="fa fa-user-md"></i> <span>Serviços</span>
	          <span class="pull-right-container">

	          </span>
	        </a>
	      </li>
	      <li>
	        <a href="relatorios.php">
	          <i class="fa fa-file-text-o"></i> <span>Relatorios</span>
	          <span class="pull-right-container">

	          </span>
	        </a>
	      </li>


	      <li class="active treeview">
	        <a href="#">
	          <i class="fa fa-group"></i> <span>Admin de usuarios</span>
	          <span class="pull-right-container">
	            <i class="fa fa-group-left pull-right"></i>
	          </span>
	        </a>
	        <ul class="treeview-menu">
	          <li class="active"><a href="register.php"><i class="fa fa-circle-o"></i> Registo de usuarios</a></li>
	          <li><a href="userTable.php"><i class="fa fa-circle-o"></i>Tabelas de usuarios</a></li>
	        </ul>
	      </li>



	    </ul>
	  </section>
	  <!-- /.sidebar -->
	</aside>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once 'includes/nav.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Tabela de usuarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Menu principal</a></li>
        <li class="active">Tabela de usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabela de Servicos basicos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
									<tr>
									  <th>Username</th>
									  <th>User email</th>
									  <th>Provincia</th>
									  <th>distrito</th>
									  <th>contacto</th>
									  <th>nivel</th>
									  <th>Cod digitador</th>
										<th></th>
										<th></th>
                </thead>
                <tfoot>
									<tr>
									  <th>Username</th>
									  <th>User email</th>
									  <th>Provincia</th>
									  <th>distrito</th>
									  <th>contacto</th>
									  <th>nivel</th>
									  <th>Cod digitador</th>
										<th></th>
										<th></th>

									</tr>
                </tfoot>

                <tbody>

									<?php
									$stmt = $auth_user->runQuery("SELECT * FROM users");
									$stmt->execute();

									if($stmt->rowCount()>0)
									{
									  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
									  {
									    ?>


									    <tr>
											<td> <a href="userProfile.php?edit_id=<?php print($row['user_id']); ?>"><?php print($row['user_name']); ?></a> </td>
									    <td> <a href="#"><?php print($row['user_email']); ?></a> </td>
									    <td><?php print($row['provincia']); ?></td>
									    <td><?php print($row['distrito']); ?></td>
									    <td><?php print($row['contacto']); ?></td>
									    <td><?php print($row['nivel']); ?></td>
									    <td><?php print($row['cod_digitador']); ?></td>

									    <td align="center">
									    <a href="edite-user.php?id=<?php print($row['user_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									    </td>
									    <td align="center">
									    <a href="delete_user.php?delete_id=<?php print($row['user_id']); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
									    </td>

									    </tr>
									            <?php
									  }

									}
									else
									{
									  ?>
									        <tr>
									        <td>Sem nenhum resultado...</td>
									        </tr>
									        <?php
									}

									 ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2017-2018 <a href="https://adminlte.io">WEI/ B</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  </script>
  </body>
  </html>
