<?php include_once 'dbconfig.php';?>

<?php

	require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	$nivel = $userRow['nivel'];


	$ocb = $userRow['ocb'];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lista de beneficiarios</title>
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

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include_once 'includes/head.php' ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once 'includes/nav.php' ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabela de benificiarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Menu principal</a></li>
        <li><a href="tables.php">Lista de Formularios</a></li>
        <li class="active">Tabela de benificiarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabela de benificiarios</h3>
            </div>
            <!-- /.box-header -->


							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th>Codigo do Benificiario</th>
											<th>Nome Completo</th>
											<th>Data Nascimento</th>
											<th>Sexo</th>
											<th>Idade</th>
											<th>Digitado em</th>
											<th>Codigo_Digitador</th>
											<th></th>
											<th></th>

										</tr>
									</thead>
									<tfoot>
										<th>#</th>
										<th>Codigo do Benificiario</th>
										<th>Nome Completo</th>
										<th>Data Nascimento</th>
										<th>Sexo</th>
										<th>Idade</th>
										<th>Digitado em</th>
										<th>Codigo_Digitador</th>
										<th></th>
										<th></th>

									</tfoot>
									<tbody>
										<?php
										if ($nivel==1) {

								 $query = "SELECT * FROM reg_ben";
									 $records_per_page= $crud->getBenCount();
									 $newquery = $crud->paging($query,$records_per_page);
									 $crud->dataview($newquery);

									}

								else	if ($nivel==2) {

											  $query = "SELECT * FROM reg_ben";
												$records_per_page= $crud->getBenCount();
												$newquery = $crud->paging($query,$records_per_page);
											  $crud->dataview($newquery);

								}
								else if($nivel==3) {
											  $query = "SELECT * FROM reg_ben WHERE nome_da_cbo = '$ocb' ";
														 $records_per_page= $crud->getBenCount();
														 $newquery = $crud->paging($query,$records_per_page);
														 $crud->dataview($newquery);
											}
									else if($nivel==4) {


													 $query = "SELECT * FROM reg_ben WHERE nome_da_cbo = '$ocb' ";
													 $records_per_page= $crud->getBenCount();
													 $newquery = $crud->paging($query,$records_per_page);
													 	 $crud->dataviewDG($newquery);

												}

												else {
													# code...
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

<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>





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


<script type="text/javascript">

$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>
</body>
</html>
