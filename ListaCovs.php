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
      <link rel="stylesheet" href="css/style.css">


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

    h2{
      color:blue;
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

    </style>
</head>
<body>

  <?php
        include_once 'includes/listaCovsInsert.php';

  ?>
  <div class="clearfix"></div>



  <?php
  if(isset($_GET['inserted']))
  {
    ?>
      <div class="container">
    <div class="alert alert-info">
      Dado inserido com sucesso <a href="index.php">dashboard</a>!
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

<div class="container">
<br><br>
  <div class="login-logo">
    <a href="#">Lista de Cov's que se beneficiam de apoio educacional</a>
  </div>
<br>
<br>
<a href="forms.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>
<br>
<br>
<br>
<br>
<form method="post">

  <div class="panel panel-default">

       <div class="panel-body">

              <fieldset class="col-md-12">

                 <legend class="A">  Dados da Escola</legend>
           <div class="panel panel-default">
             <div class="panel-body">
               <div class="row">

                   <div class="col-md-3">
                           <label for="">Provincia:</label>
                         <select id="first" name='provincia' class="form-control">
                           <option value=""></option>
                             <option data-second='{ "names" : [{"name":"Manica"},{"name":"Chimoio"},{"name":"Gongola"}]}'>Manica</option>
                             <option data-second='{ "names" : [{"name":"Nhamatanda"},{"name":"Dondo"},{"name":"Beira"}]}'>Sofala</option>
                             <option data-second='{ "names" : [{"name":"Quelimane"},{"name":"Nicoadala"},{"name":"Namacura"},{"name":"Ille"},{"name":"Gune"},{"name":"Lugela"}]}'>Zambezia</option>
                           <option data-second='{ "names" : [{"name":"Xai-Xai cidade"},{"name":"Xai-Xai Distrito"},{"name":"Chokwe"}]}'>Gaza</option>
                         </select>
                 </div>


                   <div class="col-md-3">
                       <label for="">Destrito:</label>
                       <select id="second" name='destrito' class="form-control"></select></td>
                   </div>

                   <div class="col-md-3">
                   <label for="">Localidade/bairro:</label>
                     <input id="textinput" name="localidade" type="text" placeholder="" class="form-control input-md">
                 </div>
                 <div class="col-md-3">

                   <label for="">Codigo da Escola:</label>
                     <input id="textinput" name="cd_escola" type="text" placeholder="" class="form-control input-md">
                   </div>
               </div>
               <br>

               <div class="row">
                 <div class="col-md-3">

                   <label  for="">Nome da Escola:</label>
                   <input id="textinput" name="nom_escola" type="text" placeholder="" class="form-control input-md">
               </div>

               <div class="col-md-3">
                   <label for="textinput">Tipo de Escola:</label>
                   <div class="form-group">
                     <input type="radio" name="A" id="radios-0" value="nao aplicavel" checked="checked" class="hide">
                   <label class="radio-inline" for="radios-0">
                     <input type="radio" name="A" id="radios-0" value="EP1" >
                     EP1
                   </label>
                   <label class="radio-inline" for="radios-1">
                     <input type="radio" name="A" id="radios-1" value="EP2">
                     EP2
                   </label>
                   <label class="radio-inline" for="radios-1">
                     <input type="radio" name="A" id="radios-1" value="EPC">
                     EPC
                   </label>
                   <label class="radio-inline" for="radios-2">
                     <input type="radio" name="A" id="radios-2" value="ES">
                     ES
                   </label>
                   </div>

                   </div>

                   <div class="col-md-3">
                         <label  for="">Nome do Diretor:</label>
                         <input id="textinput" name="diretor" type="text" placeholder="" class="form-control input-md">
                 </div>

                 <div class="col-md-3">
                     <label for="">Contacto:</label>
                   <input id="textinput" name="contacto" type="text" placeholder="" class="form-control input-md">
               </div>


                   </div>

                 <div class="row">
                   <div class="col-md-3">

                       <label class="col-md-3 control-label" for="textinput">LIP:</label>
                       <input id="textinput" name="lip" type="text" placeholder="" class="form-control input-md">


                     </div>


                 </div>

</fieldset>
                 <fieldset class="col-md-12">
              <legend class="A">Dados Demograficos</legend>

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="row">

                      <div class="col-md-3">
                        <label for="">Nome do Aluno:</label>
                      <input id="textinput" name="nom_aluno" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <div class="col-md-3">
                        <label  for="">Idade:</label>
                        <input id="textinput" name="idade" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <div class="col-md-3">
                      <label for="">Genero:</label>
                        <select id="selectbasic" name="genero" class="form-control">
                            <option value="Nao aplicavel"></option>
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                        </select>

                  </div>


                  </div>
                  <div class="row">

                    <div class="col-md-3">
                  <label  for="">Ano:</label>

                    <select id="selectbasic" name="ano1" class="form-control">
                        <option value="Nao aplicavel"></option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                    </div>

                    <div class="col-md-3">
                  <label  for="">Classe:</label>

                    <select id="selectbasic" name="classe1" class="form-control">
                        <option value="Nao aplicavel"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    </div>

                    <div class="col-md-3">
                  <label  for="">Ano:</label>

                    <select id="selectbasic" name="ano2" class="form-control">
                        <option value="Nao aplicavel"></option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                    </div>

                  <div class="col-md-3">
                    <label  for="">Classe:</label>
                      <select id="selectbasic" name="classe2" class="form-control">
                          <option value="Nao aplicavel"></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                      </select>
                  </div>


                  </div>

                  <div class="row">

                    <div class="col-md-3">
                  <label  for="">Ano:</label>

                    <select id="selectbasic" name="ano3" class="form-control">
                        <option value="Nao aplicavel"></option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                    </div>

                    <div class="col-md-3">
                      <label  for="">Classe:</label>
                        <select id="selectbasic" name="classe3" class="form-control">
                            <option value="Nao aplicavel"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                      <label  for="">Repitente:</label>
                        <select id="selectbasic" name="Repitente" class="form-control">
                            <option value="Nao aplicavel"></option>
                          <option value="Sim">Sim</option>
                          <option value="Nao">Nao</option>
                        </select>
                    </div>
                  </div>

                </div>
              </div>

            </fieldset>


            <fieldset class="col-md-12">
         <legend class="A">Tipo de Apoio recebido</legend>

         <div class="panel panel-default">
           <div class="panel-body">
             <div class="row">
                 <div class="col-md-3">
                   <label for="">Insencao de Matricula</label>
                   <select id="selectbasic" name='I_Matricula' class="form-control">
                     <option value="nao aplicavel"></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>

                 <div class="col-md-3">
                   <label for="">Materiais Escolares</label>
                   <select id="selectbasic" name='M_escolares' class="form-control">
                     <option value="nao aplicavel"></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>

                 <div class="col-md-3">
                   <label for="">Uniforme Escolar</label>
                   <select id="selectbasic" name='U_escolar' class="form-control">
                     <option value="nao aplicavel"></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>

                 <div class="col-md-3">
                   <label for="">Pagamento de Guarda</label>
                   <select id="selectbasic" name='P_guarda' class="form-control">
                     <option value="nao aplicavel"></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>
             </div>

               <div class="row">
                 <div class="col-md-3">
                   <label for="">Participante do CDC</label>
                   <select id="selectbasic" name='P_CDC' class="form-control">
                     <option value="nao aplicavel"></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>

                 <div class="col-md-3">
                   <label for="">Estado atual do aluno na escola</label>
                   <select id="selectbasic" name='E_A_Escola' class="form-control">
                     <option value="nao aplicavel"></option>
                     <option value="Activo">Activo</option>
                     <option value="Transferido">Transferido</option>
                     <option value="Abandono">Abandono</option>

                   </select>
                 </div>
               </div>

           </div>
         </div>

       </fieldset>

             </div>
           </div>




<br>
<br>
<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-2">

    <button type="submit" class="btn btn-primary btn-block" name="submeter" align="center">
        <i class="glyphicon glyphicon-plus" ></i>&nbsp;Submeter
      </button>

  </div>

</div>
<br>
<br>
<br>


</div>

</form>
<script src="js/main.js"></script>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="js/main.js"></script>

  <script src="js/jquery.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>


</html>
