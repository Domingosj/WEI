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
  <link rel="stylesheet" href="css/style.css">





</head>


<!Doctype html>

<?php
include_once 'includes/mac_insert.php';
?>

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
    <title>Pagina Inicial </title>


</head>
<body>

  <div class="clearfix"></div>



  <?php
  if(isset($_GET['inserted']))
  {
  	?>
      <div class="container">
  	<div class="alert alert-info">
      Dado inserido com sucesso <a href="forms.php">dashboard</a>!
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
      <a href="index1.html">Matriz de apoio a crianca (MAC)</a>
    </div>


  <div class="container">
		<br><br>

		<a href="forms.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>

<br>
<br>
	 <form method='post'>

    <table class='table borderless'>


      				<tr>
								<td style="border-top: none;">Codigo de Beneficiario:</td>

      						<td style="border-top: none;">  <input type='text' name='codBen'class='form-control' >  </td>


      						<td style="border-top: none;">  <button id="singlebutton" name="btn-verify" class="btn btn-success">Verificar</button>  </td>


      				</tr>

							<?php



								$query = "SELECT * FROM reg_ben WHERE cod_beneficiario = '$verifiedCod' ";
								$crud->dataview_MAC_verify($query);





						?>

</table>
  <table class='table borderless'>

    <tr>
      <th>Saude</th>
      <th>Saude</th>
      <th>Saude</th>
      <th>Saude</th>



    </tr>
		  <td style="border-top: none;">Completou o calendario de vacinacao?</td>
        <td style="border-top: none;">Bebe sempre agua tratada:</td>
        <td style="border-top: none;">As ultimas 3 vezes que a crianca <br> sentiu-se mal, foi atentida na <br> unidade sanitaria?</td>
        <td style="border-top: none;">A crianca teve diareia ou febres nas ultimas <br>2 semanas?</td>


        <tr>
          <td>
              <div class="form-group">
                <label class="radio-inline" for="radios-0">
                  <input type="radio" class="radio" class="radio" name="A" id="radios-4" value="Nao aplicavel" checked="checked">
									<img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-4').checked = true" id="radios-4" />
                </label>
                <label class="radio-inline" for="radios-1">
                  <input type="radio" class="radio" class="radio" name="A" id="radios-5" value="Mau">
									<img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-5').checked = true" />
                </label>
                <label class="radio-inline" for="radios-2">
                  <input type="radio" class="radio" class="radio" name="A" id="radios-6" value="Razoavel">
									<img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-6').checked = true" />
                </label>
                <label class="radio-inline" for="radios-3">
                  <input type="radio" class="radio" class="radio" name="A" id="radios-7" value="Bom">
									<img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-7').checked = true" />
                </label>
              </div>

</td>

<td>
          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" class="radio" name="B" id="radios-8" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-8').checked = true"  />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" class="radio" name="B" id="radios-9" value="Mau">
            <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-9').checked = true" />

          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" class="radio" name="B" id="radios-10" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-10').checked = true" />
          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" class="radio" name="B" id="radios-11" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-11').checked = true" />
          </label>
          </td>
          <td>

          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" class="radio" name="C" id="radios-12" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-12').checked = true " />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" class="radio" name="C" id="radios-13" value="Mau">
            <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-13').checked = true" />

          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" class="radio" name="C" id="radios-14" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-14').checked = true" />
          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" class="radio" name="C" id="radios-15" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-15').checked = true" />
          </label>
          </td>
          <td>
          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" class="radio" name="D" id="radios-16" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-16').checked = true"/>

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" class="radio" name="D" id="radios-17" value="Mau">
            <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-17').checked = true" />

          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" class="radio" name="D" id="radios-18" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-18').checked = true" />
          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" class="radio" name="D" id="radios-19" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-19').checked = true" />
          </label>
          </td>
		</tr>

</table>
  <table class='table borderless'>

  <tr>
    <th>Saude</th>
    <th>Saude</th>
    <th>Saude</th>
    <th>Alimentacao e Nutricao</th>



  </tr>
    <td style="border-top: none;">Dorme dentro de uma rede mosquiteira <br> tratada?</td>
      <td style="border-top: none;">Tem acesso a uma latrina limpa,<br>ou casa de banho e acesso <br> a agua para lavar as maos?</td>
      <td style="border-top: none;">Teve educacao acerca do hiv nos <br>ultimos 3 meses(maior de 3 anos <br>  de idade)</td>
      <td style="border-top: none;">A crianca come pelo menos 2  vezes por dia?</td>


      <tr>
        <td>
        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" class="radio" name="E" id="radios-20" value="Nao aplicavel" checked="checked">
          <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-20').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" class="radio" name="E" id="radios-21" value="Mau">
          <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-21').checked = true" />

        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" class="radio" name="E" id="radios-22" value="Razoavel">
          <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-22').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" class="radio" name="E" id="radios-23" value="Bom">
          <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-23').checked = true" />
        </label>
        </td>
        <td>


        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" class="radio" name="F" id="radios-24" value="Nao aplicavel" checked="checked">
          <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-24').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" class="radio" name="F" id="radios-25" value="Mau">
          <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-25').checked = true" />

        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" class="radio" name="F" id="radios-26" value="Razoavel">
          <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-26').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" class="radio" name="F" id="radios-27" value="Bom">
          <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-27').checked = true" />
        </label>
        </td>
        <td>

        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" class="radio" name="G" id="radios-28" value="Nao aplicavel" checked="checked">
          <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-28').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" class="radio" name="G" id="radios-29" value="Mau">
          <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-29').checked = true" />

        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" class="radio" name="G" id="radios-30" value="Razoavel">
          <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-30').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" class="radio" name="G" id="radios-31" value="Bom">
          <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-31').checked = true" />
        </label>
        </td>
        <td>
        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" class="radio" name="H" id="radios-32" value="Nao aplicavel" checked="checked">
          <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-32').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" class="radio" name="H" id="radios-33" value="Mau">
				 <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-33').checked = true" />

        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" class="radio" name="H" id="radios-34" value="Razoavel">
          <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-34').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" class="radio" name="H" id="radios-35" value="Bom">
          <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-35').checked = true" />
        </label>
        </td>
  </tr>
</table>
<table class='table borderless'>

<tr>
  <th>Alimentacao e Nutricao</th>
  <th>Educacao</th>
  <th>Educacao</th>
  <th>Educacao</th>



</tr>
  <td style="border-top: none;">A crianca variou os alimentos nos <br>ultimos 2 dias?</td>
    <td style="border-top: none;">A crianca esta inscrita no en-<br>sino  pre-primario,primario,secun-<br>dario ou curso professional?</td>
    <td style="border-top: none;">Foi a escola todos os dias durante a  <br>semana anterior?</td>
    <td style="border-top: none;">A crianca tem uniforme escolar?</td>


    <tr>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" class="radio" name="I" id="radios-36" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-36').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" class="radio" name="I" id="radios-37" value="Mau">
				 <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-37').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="I" id="radios-38" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-38').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="I" id="radios-39" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-39').checked = true" />
      </label>
      </td>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="J" id="radios-40" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-40').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="J" id="radios-41" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-41').checked = true" />
      </label>
			<label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="J" id="radios-42" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-42').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="J" id="radios-43" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-43').checked = true" />
      </label>
      </td>
      <td>

      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="K" id="radios-44" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-44').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="K" id="radios-45" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-45').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="K" id="radios-46" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-46').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="K" id="radios-47" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-47').checked = true" />
      </label>
      </td>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="L" id="radios-48" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-49').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="L" id="radios-49" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-49').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="L" id="radios-50" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-50').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="L" id="radios-51" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-51').checked = true" />
      </label>
      </td>
</tr>
</table>

<table class='table borderless'>

<tr>
  <th>Educacao</th>
  <th>Educacao</th>
  <th>Educacao</th>
  <th>Educacao</th>



</tr>
  <td style="border-top: none;">A crianca tem material escolar ?</td>
    <td style="border-top: none;">Tem acompalhamento dos pais na <br>vida escolar?</td>
    <td style="border-top: none;">A Crianca tem um bom desenpenho <br> escolar?</td>
    <td style="border-top: none;">A crianca faz o tpc e revisao das materias?</td>


    <tr>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="M" id="radios-52" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-52').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="M" id="radios-53" value="Mau">
				 <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-53').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="M" id="radios-54" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-54').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="M" id="radios-55" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-55').checked = true" />
      </label>
      </td>
      <td>

      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="N" id="radios-56" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-56').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="N" id="radios-57" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-57').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="N" id="radios-58" value="Razoavel">
			  <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-58').checked = true" />
      </label>
			<label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="N" id="radios-59" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-59').checked = true" />
      </label>
      </td>
      <td>

      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="O" id="radios-60" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-60').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="O" id="radios-61" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-61').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="O" id="radios-62" value="Razoavel">
				 <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-62').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="O" id="radios-63" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-63').checked = true" />
      </label>
      </td>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="P" id="radios-64" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-64').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="P" id="radios-65" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-65').checked = true"/>
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="P" id="radios-66" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-66').checked = true" />

      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="P" id="radios-67" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-67').checked = true" />
      </label>
      </td>
</tr>
</table>

<table class='table borderless'>

<tr>
  <th>Educacao</th>
  <th>Protecao e Apoio Legal</th>
  <th>Protecao e Apoio Legal</th>
  <th>Protecao e Apoio Legal</th>



</tr>
  <td style="border-top: none;">A crianca passou de classe no ano <br> passado?</td>
    <td style="border-top: none;">A Crianca e tratada de forma igual <br> pelo cuidador?</td>
    <td style="border-top: none;">A Crianca teve educacao sobre os <br> direitos da crianca?</td>
    <td style="border-top: none;">A crianca tem registo de nascimento(Registo <br>Notarial)?</td>


    <tr>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="Q" id="radios-68" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-68').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="Q" id="radios-69" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-69').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="Q" id="radios-70" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-70').checked = true"/>
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="Q" id="radios-71" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-71').checked = true" />
      </label>
      </td>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="R" id="radios-72" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-72').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="R" id="radios-73" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-73').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="R" id="radios-74" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-74').checked = true" />

      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="R" id="radios-75" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-75').checked = true" />
      </label>
      </td>
      <td>

      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="S" id="radios-76" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-76').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="S" id="radios-77" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-77').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="S" id="radios-78" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-78').checked = true" />

      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="S" id="radios-79" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-79').checked = true" />
      </label>
      </td>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="T" id="radios-80" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-80').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="T" id="radios-81" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-81').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="T" id="radios-82" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-82').checked = true" />

      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="T" id="radios-83" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-83').checked = true" />
      </label>
      </td>
</tr>
</table>
<table class='table borderless'>

<tr>
  <th>Protecao e Apoio Legal</th>
  <th>Habitacao</th>
  <th>Habitacao</th>
  <th>Habitacao</th>



</tr>
  <td style="border-top: none;">A crianca foi vitima de violencia(Psicolo<br>gica,fisica,sexual,negligencia)?</td>
    <td style="border-top: none;">Casa adequada,segura,seca e ventilada,<br>com paredes e telhado fortes?</td>
    <td style="border-top: none;">A crianca tem uma atitude posetiva e <br> esperanca acerca do futuro?</td>
    <td style="border-top: none;">A crianca esta envolvida em alguma actividade <br> onde consegue expressar a sua opiniao <br>(familia,clube escolar,ccpc,etc)?</td>


    <tr>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="U" id="radios-84" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-84').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="U" id="radios-85" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-85').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="U" id="radios-86" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-86').checked = true" />

      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="U" id="radios-87" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-87').checked = true" />
      </label>
      </td>
      <td>

      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="V" id="radios-88" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-88').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="V" id="radios-89" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-89').checked = true"/>
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="V" id="radios-90" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-90').checked = true" />

      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="V" id="radios-91" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-91').checked = true" />
      </label>
      </td>
      <td>

      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="W" id="radios-92" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-92').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="W" id="radios-93" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-93').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="W" id="radios-95" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-95').checked = true" />

      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="W" id="radios-97" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-97').checked = true" />
      </label>
      </td>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" name="Y" id="radios-98" value="Nao aplicavel" checked="checked">
        <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-98').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="Y" id="radios-99" value="Mau">
				  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-99').checked = true" />
      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" name="Y" id="radios-100" value="Razoavel">
        <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-100').checked = true" />

      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" name="Y" id="radios-101" value="Bom">
        <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-101').checked = true" />
      </label>
      </td>
</tr>
</table>
    <table class='table borderless'>

    <tr>
      <th>Apoio Psico-Social</th>
      <th>Apoio Psico-Social</th>
      <th>Apoio Psico-Social</th>
      <th>Apoio Psico-Social</th>



    </tr>
      <td style="border-top: none;">A crianca respeita os mais velhos(<br>nao desafia nem se revolta)?</td>
        <td style="border-top: none;">Participa de servicos religiosos caso <br> deseje?</td>
        <td style="border-top: none;">Tem um bom amigo ou fala com <br>os adultos  acerca dos poblemas?</td>
        <td style="border-top: none;">A  crianca brinca com outras criancas?</td>


        <tr>
          <td>
          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" name="X" id="radios-102" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-102').checked = true" />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="X" id="radios-103" value="Mau">
						  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-103').checked = true" />
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="X" id="radios-104" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-104').checked = true" />

          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" name="X" id="radios-105" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-105').checked = true" />
          </label>
          </td>
          <td>


          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" name="Z" id="radios-106" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-106').checked = true" />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="Z" id="radios-107" value="Mau">
						  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-107').checked = true" />
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="Z" id="radios-108" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-108').checked = true" />

          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" name="Z" id="radios-109" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-109').checked = true" />
          </label>
          </td>
          <td>

          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" name="A1" id="radios-110" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-110').checked = true" />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="A1" id="radios-111" value="Mau">
						  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-111').checked = true" />
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="A1" id="radios-112" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-112').checked = true" />

          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" name="A1" id="radios-137" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-137').checked = true" />
          </label>
          </td>
          <td>
          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" name="B1" id="radios-113" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-113').checked = true" />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="B1" id="radios-114" value="Mau">
						  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-114').checked = true" />
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="B1" id="radios-115" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-115').checked = true" />

          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" name="B1" id="radios-116" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-116').checked = true" />
          </label>
          </td>
    </tr>
    </table>
    <table class='table borderless'>

    <tr>
      <th>Apoio Psico-Social</th>
      <th>Apoio Psico-Social</th>
      <th>Apoio Psico-Social</th>
      <th>Fortalecimento Economico</th>



    </tr>
      <td style="border-top: none;">A casa e um sitio seguro para a crianca <br>(nao  tem objectos cortantes,pocos <br>abertos,etc)?:</td>
        <td style="border-top: none;">A crianca tem 2 ou mas brinquedos(caseiros ou <br> da loja)?</td>
        <td style="border-top: none;">O cuidador e capaz de dar exemplo de <br>uma brincadeira que faz com a crianca?</td>
        <td style="border-top: none;">A crianca benefecia das actividades de <br>geracao de renda da familia(Ex:Machamba,<br>criacao de animais)</td>


        <tr>
          <td>
          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" name="C1" id="radios-117" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-117').checked = true" />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="C1" id="radios-118" value="Mau">
						  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-118').checked = true" />
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="C1" id="radios-119" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-119').checked = true" />

          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" name="C1" id="radios-120" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-120').checked = true" />
          </label>
          </td>
          <td>


          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" name="D1" id="radios-121" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-121').checked = true" />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="D1" id="radios-122" value="Mau">
						  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-122').checked = true" />
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="D1" id="radios-123" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-123').checked = true" />

          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" name="D1" id="radios-124" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-124').checked = true" />
          </label>
          </td>
          <td>

          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" name="E1" id="radios-125" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-125').checked = true" />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="E1" id="radios-126" value="Mau">
						  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-126').checked = true" />
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="E1" id="radios-127" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-127').checked = true" />

          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" name="E1" id="radios-128" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-128').checked = true" />
          </label>
          </td>
          <td>
          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" name="F1" id="radios-129" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-129').checked = true" />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="F1" id="radios-130" value="Mau">
						  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-130').checked = true" />
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="F1" id="radios-131" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-131').checked = true" />
          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" name="F1" id="radios-132" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-132').checked = true" />
          </label>
          </td>
    </tr>
    </table>
    <table class='table borderless'>

    <tr>
      <th>Fortalecimento Economico</th>
    </tr>
      <td style="border-top: none;">O criador participa de um grupo de poupanca?</td>

        <tr>
          <td>

          <label class="radio-inline" for="radios-0">
            <input type="radio" class="radio" name="G1" id="radios-133" value="Nao aplicavel" checked="checked">
            <img src="img/null.png" onclick="this.src='img/null-1.png'; document.getElementById('radios-133').checked = true" />

          </label>
          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="G1" id="radios-134" value="Mau">
						  <img src="img/sad.png" onclick="this.src='img/sad-1.png'; document.getElementById('radios-134').checked = true" />
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="G1" id="radios-135" value="Razoavel">
            <img src="img/neutral.png" onclick="this.src='img/neutral-1.png'; document.getElementById('radios-135').checked = true" />
          </label>
          <label class="radio-inline" for="radios-3">
            <input type="radio" class="radio" name="G1" id="radios-136" value="Bom">
            <img src="img/happy.png" onclick="this.src='img/happy-1.png'; document.getElementById('radios-136').checked = true" />
          </label>
          </td>
          <td>

    </tr>
    </table>
<center><h4>Resumo de Principais Constatacoes por area de Servico</h4></center>
<br>

<div class="row">
  <div class="col-md-6">
    <!-- Textarea -->
    <div class="form-group">
      <label>SAUDE</label>
      <textarea class="form-control" rows="3" name="resumo_saude" placeholder="SAUDE"></textarea>
    </div>
  </div>

  <div class="col-md-6">
    <!-- Textarea -->
    <div class="form-group">
      <label>ALIMENTACAO E NUTRICAO</label>
      <textarea class="form-control" rows="3" name="resumo_aliment_nutricao" placeholder="ALIMENTACAO E NUTRICAO"></textarea>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-md-6">
    <!-- Textarea -->
    <div class="form-group">
      <label>EDUCACAO</label>
      <textarea class="form-control" rows="3" name="resumo_educacao" placeholder="EDUCACAO"></textarea>
    </div>
  </div>

  <div class="col-md-6">
    <!-- Textarea -->
    <div class="form-group">
      <label>PROTECAO E APOIO LEGA</label>
      <textarea class="form-control" rows="3" name="resumo_protecao" placeholder="PROTECAO E APOIO LEGAL"></textarea>
    </div>
  </div>

</div>


<div class="row">
  <div class="col-md-6">
    <!-- Textarea -->
    <div class="form-group">
      <label>HABITCAO</label>
      <textarea class="form-control" rows="3" name="resumo_habitcao" placeholder="HABITCAO"></textarea>
    </div>
  </div>

  <div class="col-md-6">
    <!-- Textarea -->
    <div class="form-group">
      <label>APOIO PSIICOSOOCIAL</label>
      <textarea class="form-control" rows="3" name="resumo_apoio" placeholder="APOIO PSIICOSOOCIAL"></textarea>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-md-6">
    <!-- Textarea -->
    <div class="form-group">
      <label>FORTALECIMENTO</label>
      <textarea class="form-control" rows="3" name="resumo_fortal" placeholder="FORTALECIMENTO"></textarea>
    </div>
  </div>




</div>

<div class="form-group">

  <center> <h3> Plano  de Acao para cuidados desenvolvidos: </h3> </center>


</div>



		<div class="form-group">
			<div class="col-md-2">

			<label class="col-md-4 control-label" for="textarea"><h5></h5></label>
			</div>

      <br>

			<input type='radio' name='gender' checked='true' value='Male' class="hide">

			<div class="col-md-4">
				<label class="radio-inline" for="radios-1000">
      <input type="radio" name="plano_acao" id="radios-1000" value="Sim">
      Sim
    </label>
		<label class="radio-inline" for="radios-1001">
		<input type="radio" name="plano_acao" id="radios-1001" value="Nao">
		Nao
	</label>
			</div>

			<div class="col-md-2">
				<br>
				<br>
				<br>
			</div>
		</div>


<br>
<br>
<br>

	<button type="submit" class="btn btn-primary" name="btn-save">
	<span class="glyphicon glyphicon-plus"></span> Submeter
	</button>
	<a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Retornar ao dashboard</a>


</form>


</div>
<br>
<br>


</div>
  <script src="js/jquery.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="vendor/jquery/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#radios-4").click(function(){
			if($("#radios-4").attr("src") == "img/null.png"){
				$("#radios-4").attr("src", "img/null-1.png");
			}else{
				$("#radios-4").attr("src", "img/null.png");
			}
		});
	});
	</script>

</body>


</html>
