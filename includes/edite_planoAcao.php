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
    <center><h2>Plano de açao</h2></center>
  </header>

<div class="container">
<br>
<br>
<a href="forms.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>

<br>
<br>
<br>
<br>

<form class="form" method="post">
  <div class="panel panel-default">

       <div class="panel-body">

              <fieldset class="col-md-12">

                 <legend class="A">  Dados Demograficos</legend>
           <div class="panel panel-default">
             <div class="panel-body">
             <div class="row">

               <div class="col-md-3">
                 <label for="">Nome do membro do CCPC:</label>
                 <input type='text' name='nomeMembroCCPC' class='form-control' value="<?php echo $nomeMembroCCPC; ?>">
               </div>


               <div class="col-md-3">
                 <label for="">Nome DA OCB</label>
                 <input type='text' name='nomeOCB' class='form-control' value="<?php echo $nomeOCB; ?>">
               </div>




               <div class="col-md-3">
                 <label for="">Distrito</label>
                 <input type='text' name='distrito' class='form-control' value="<?php echo $distrito; ?>" >
               </div>

             </div>

             <br>



             <div class="row">

               <div class="col-md-3">
                 <label for="">Nome da Criança</label>
                 <input type='text' name='nomeCrianca' class='form-control' value="<?php echo $nomeCrianca; ?>" >
               </div>



               <div class="col-md-3">
                 <label for="">Codigo do Benificiario</label>
                 <input type='text' name='codBen' class='form-control' value="<?php echo $codBen; ?>" >
               </div>



               <div class="col-md-3">
                 <label for="">Data</label>
                 <input input id="date" type="date" name='data' class='form-control' value="<?php echo $data; ?>">
               </div>



             </div>

             <br>


             <div class="row">

               <div class="col-md-3">
                 <label for="">Periodo de Seguimento (Data)</label>
                 <input input id="date" type="date" name='dataPeriodoSeg' class='form-control' value="<?php echo $dataPeriodoSeg; ?>" >

               </div>

               <div class="col-md-3">
                 <label for="">Passou para manutenção (Data)</label>
                 <input input id="date" type="date" name='dataManutencao' class='form-control' value="<?php echo $dataManutencao; ?>" >
               </div>

               <div class="col-md-3">
                 <label for="">Passou para graduação (Data)</label>
                 <input input id="date" type="date" name='dataGraduacao' class='form-control' value="<?php echo $dataGraduacao; ?>" >
               </div>

             </div>

             </div>
           </div>


              <fieldset class="col-md-12">
           <legend class="A">Area de Servico</legend>

           <div class="panel panel-default">
             <div class="panel-body">
             <div class="row">

               <div class="col-md-3">

                 <label for=""><br>Area de Serviço</label>
                 <input type='text' name='areaServico' class='form-control' value="<?php echo $areaServico; ?>" >

               </div>

               <div class="col-md-3">

                 <label for="">Necessidades Prioritária por Serviço no maximo (3)</label>
                 <input type='text' name='necessidadePrioritarea' class='form-control' value="<?php echo $necessidadePrioritarea; ?>">

               </div>

               <div class="col-md-3">

                 <label for=""><br>Pontuação (1,2)</label>
                 <input type='text' name='pontuacao' class='form-control' value="<?php echo $pontuacao; ?>" >

               </div>

               <div class="col-md-3">

                 <label for=""><br>Necessidades Resolvidas (X)</label>
                 <input type='text' name='necessidadesResolvidas' class='form-control' value="<?php echo $necessidadesResolvidas; ?>" >

               </div>





             </div>

           <br><br>

               <div class="row">

                 <div class="col-md-3">

                   <label for="">Data (mês)</label>
                   <input input id="date" type="date" name='data_2' class='form-control' value="<?php echo $data_2; ?>" >

                 </div>
                 </div>

             </div>
           </div>

         </fieldset>


              <fieldset class="col-md-12">
           <legend class="A">Apoio Direito</legend>

           <div class="panel panel-default">
             <div class="panel-body">
                       <div class="row">

                               <div class="col-md-3">
                                 <label for="">Apoio Direito</label>
                                 <input type='text' name='apoioDireito' class='form-control'value="<?php echo $apoioDireito; ?>" >
                               </div>

                               <div class="col-md-3">
                                 <label for="">Realizado(X)</label>
                                 <input type='text' name='realizado_1' class='form-control' value="<?php echo $realizado_1; ?>">
                               </div>

                               <div class="col-md-3">
                                 <label for="">Data(mês)</label>
                                 <input type='text' name='data_3' class='form-control' value="<?php echo $data_3; ?>">
                               </div>
                       </div>
         </fieldset>


             <fieldset class="col-md-12">
          <legend class="A">Apoio por Referência</legend>

          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">

                <div class="col-md-3">
                  <label for="">Apoio por Referência</label>
                  <input type='text' name='apoioPorReferenc' class='form-control' value="<?php echo $apoioPorReferenc; ?>" >
                </div>

                <div class="col-md-3">
                  <label for="">Completo (X)</label>
                  <input type='text' name='completou' class='form-control' value="<?php echo $completou; ?>" >
                </div>

                <div class="col-md-3">
                  <label for="">Data (mês)</label>
                  <input type='text' name='data_4' class='form-control' value="<?php echo $data_4; ?>" >
                </div>
              </div>
            </div>
          </div>

        </fieldset>



            <fieldset class="col-md-12">
         <legend class="A">Acção da Familia</legend>

         <div class="panel panel-default">
           <div class="panel-body">
                <div class="row">
                  <div class="col-md-3">
                    <label for="">Acção da Familia</label>
                    <input type='text' name='acaoDaFamilia' class='form-control' value="<?php echo $acaoDaFamilia; ?>">
                  </div>

                  <div class="col-md-3">
                    <label for="">Realizado (X)</label>
                    <input type='text' name='realizado' class='form-control' value="<?php echo $realizado; ?>" >
                  </div>

                  <div class="col-md-3">
                    <label for="">Data (mês)</label>
                    <input type='text' name='data_5' class='form-control' value="<?php echo $data_5; ?>">
                  </div>

                  <div class="col-md-3">
                    <label for="">Comentarios</label>
                    <input type='text' name='comentarios' class='form-control' value="<?php echo $comentarios; ?>" >
                  </div>

                </div>
         </div>
       </div>

     </fieldset>



<br><br>
     <div class="row">

           <div class="col-md-3">
                 <label for="">Assinatura do membro de CCPC:</label>
                 <input type='text' name='membroCCPC' class='form-control' value="<?php echo $membroCCPC; ?>" >
           </div>

             <div class="col-md-3">
                   <label for="">Data:</label>
                   <input type='date' name='data_6' class='form-control' value="<?php echo $data_6; ?>" >
             </div>



     </div>

     <br><br>

     <div class="row">

           <div class="col-md-3">
                 <label for="">Assinatura do Gestor de Caso:</label>
                 <input type='text' name='gestorCaso' class='form-control' value="<?php echo $gestorCaso; ?>" >
           </div>

             <div class="col-md-3">
                   <label for="">Data:</label>
                   <input type='date' name='data_7' class='form-control' value="<?php echo $data_7; ?>">
             </div>



     </div>



<br><br><br>
        <div class="row">

          <div class="col-md-5">

          </div>

          <div class="col-md-2">
            <button type="submit" class="btn btn-primary btn-block" name="btn-update" align="center">
                <i class="glyphicon glyphicon-edit" ></i>&nbsp;Atualizar
              </button>

          </div>

        </div>

    <br><br>

  </div>





</div>
</form>

  <script src="js/main.js"></script>

  <script src="js/jquery.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>


</body>


</html>
