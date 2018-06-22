<!Doctype html>
<html>
<head>
  <meta charset="utf-8">
    <title>Pagina Inicial </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

    <style type="text/css">
    body{
        background-color: #e6f0ff;
    }
    header{
      background-color:#e6e6ff;
      width: 100%;
      height: 50px;
      margin-top: 0%;
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


<div class="container">

  <header>
   <center><h2>Lista de Cov's que se beneficiam de apoio educacional</h2></center>
 </header>
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
                             <option value="<?php echo $provincia; ?>"><?php echo $provincia; ?></option>
                             <option data-second='{ "names" : [{"name":"Manica"},{"name":"Chimoio"},{"name":"Gongola"}]}'>Manica</option>
                             <option data-second='{ "names" : [{"name":"Nhamatanda"},{"name":"Dondo"},{"name":"Beira"}]}'>Sofala</option>
                             <option data-second='{ "names" : [{"name":"Quelimane"},{"name":"Nicoadala"},{"name":"Namacura"},{"name":"Ille"},{"name":"Gune"},{"name":"Lugela"}]}'>Zambezia</option>
                           <option data-second='{ "names" : [{"name":"Xai-Xai cidade"},{"name":"Xai-Xai Distrito"},{"name":"Chokwe"}]}'>Gaza</option>
                         </select>
                 </div>


                 <div class="col-md-3">
                     <label for="">Destrito:</label>
                         <input id="textinput" name="destrito" type="text" placeholder="" class="form-control input-md"  value="<?php echo $destrito; ?>">
                 </div>

                   <div class="col-md-3">
                   <label for="">Localidade/bairro:</label>
                     <input id="textinput" name="localidade" type="text" placeholder="" class="form-control input-md" value="<?php echo $localidade; ?>">
                 </div>
                 <div class="col-md-3">

                   <label for="">Codigo da Escola:</label>
                     <input id="textinput" name="cd_escola" type="text" placeholder="" class="form-control input-md"  value="<?php echo $codigo_escola; ?>">
                   </div>
               </div>
               <br>

               <div class="row">
                 <div class="col-md-3">

                   <label  for="">Nome da Escola:</label>
                   <input id="textinput" name="nom_escola" type="text" placeholder="" class="form-control input-md" value="<?php echo $nome_escola; ?>">
               </div>

               <div class="col-md-3">
                   <label for="textinput">Tipo de Escola:</label>
                   <div class="form-group">
                     <input type="radio" name="A" id="radios-0" value="nao aplicavel" checked="checked" class="hide"  <?php if ($tipo_escola =='nao aplicavel') echo 'checked="checked"'; ?>>
                   <label class="radio-inline" for="radios-0">
                     <input type="radio" name="A" id="radios-0" value="EP1" <?php if ($tipo_escola =='EP1') echo 'checked="checked"'; ?> >
                     EP1
                   </label>
                   <label class="radio-inline" for="radios-1">
                     <input type="radio" name="A" id="radios-1" value="EP2" <?php if ($tipo_escola == 'EP2') echo 'checked="checked"'; ?>>
                     EP2
                   </label>
                   <label class="radio-inline" for="radios-1">
                     <input type="radio" name="A" id="radios-1" value="EPC" <?php if ($tipo_escola == 'EPC') echo 'checked="checked"'; ?>>
                     EPC
                   </label>
                   <label class="radio-inline" for="radios-2">
                     <input type="radio" name="A" id="radios-2" value="ES" <?php if ($tipo_escola == 'ES') echo 'checked="checked"'; ?>>
                     ES
                   </label>
                   </div>

                   </div>

                   <div class="col-md-3">
                         <label  for="">Nome do Diretor:</label>
                         <input id="textinput" name="diretor" type="text" placeholder="" class="form-control input-md" value="<?php echo $nome_diretor; ?>">
                 </div>

                 <div class="col-md-3">
                     <label for="">Contacto:</label>
                   <input id="textinput" name="contacto" type="text" placeholder="" class="form-control input-md" value="<?php echo $contacto; ?>">
               </div>


                   </div>

                   <div class="row">
                     <div class="col-md-3">

                         <label class="col-md-3 control-label" for="textinput">LIP:</label>
                         <input id="textinput" name="lip" type="text" placeholder="" class="form-control input-md"  value="<?php echo $lip; ?>">


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
                      <input id="textinput" name="nom_aluno" type="text" placeholder="" class="form-control input-md"  value="<?php echo $nome_aluno; ?>">
                    </div>

                    <div class="col-md-3">
                        <label  for="">Idade:</label>
                        <input id="textinput" name="idade" type="text" placeholder="" class="form-control input-md"  value="<?php echo $idade; ?>">
                    </div>

                    <div class="col-md-3">
                      <label for="">Genero:</label>
                        <select id="selectbasic" name="genero" class="form-control">
                      <option value="<?php echo $genero; ?>"><?php echo $genero; ?></option>
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                        </select>

                  </div>




                  </div>
                  <div class="row">

                    <div class="col-md-3">
                  <label  for="">Ano:</label>

                    <select id="selectbasic" name="ano1" class="form-control">
                          <option value="<?php echo $ano1; ?>"><?php echo $ano1; ?></option>
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
                    <option value="<?php echo $classe_2016; ?>"><?php echo $classe_2016; ?></option>
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
                          <option value="<?php echo $ano2; ?>"><?php echo $ano2; ?></option>
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
                            <option value="<?php echo $classe_2017; ?>"><?php echo $classe_2017; ?></option>
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
                        <option value="<?php echo $ano3; ?>"><?php echo $ano3; ?></option>
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
                            <option value="<?php echo $classe_2018; ?>"><?php echo $classe_2018; ?></option>
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
                          <option value="<?php echo $repitente; ?>"><?php echo $repitente; ?></option>
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
                     <option value="<?php echo $I_matricula; ?>"><?php echo $I_matricula; ?></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>

                 <div class="col-md-3">
                   <label for="">Materiais Escolares</label>
                   <select id="selectbasic" name='M_escolares' class="form-control">
                    <option value="<?php echo $M_escolares; ?>"><?php echo $M_escolares; ?></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>

                 <div class="col-md-3">
                   <label for="">Uniforme Escolar</label>
                   <select id="selectbasic" name='U_escolar' class="form-control">
                     <option value="<?php echo $U_escolar; ?>"><?php echo $U_escolar; ?></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>

                 <div class="col-md-3">
                   <label for="">Pagamento de Guarda</label>
                   <select id="selectbasic" name='P_guarda' class="form-control">
                     <option value="<?php echo $P_guarda; ?>"><?php echo $P_guarda; ?></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>
             </div>

               <div class="row">
                 <div class="col-md-3">
                   <label for="">Participante do CDC</label>
                   <select id="selectbasic" name='P_CDC' class="form-control">
                     <option value="<?php echo $P_cdc; ?>"><?php echo $P_cdc; ?></option>
                     <option value="sim">Sim</option>
                     <option value="nao">Nao </option>

                   </select>
                 </div>

                 <div class="col-md-3">
                   <label for="">Estado atual do aluno na escola</label>
                   <select id="selectbasic" name='E_A_Escola' class="form-control">
                     <option value="<?php echo $Estado_do_aluno; ?>"><?php echo $Estado_do_aluno; ?></option>
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

    <button type="submit" class="btn btn-primary btn-block" name="btn-update" align="center">
      <span class="glyphicon glyphicon-edit"></span> Atualizar
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
