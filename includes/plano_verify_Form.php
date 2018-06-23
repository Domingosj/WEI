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
                 <input type='text' name='nomeMembroCCPC' class='form-control' >
               </div>


               <div class="col-md-3">
                 <label for="">Nome DA OCB</label>
								 <select name='nomeOCB' class="form-control">
                <option value='<?php print($row['nome_da_cbo']); ?>'><?php print($row['nome_da_cbo']); ?></option>
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
			 					</select>               </div>




               <div class="col-md-3">
                 <label for="">Distrito</label>
								 <select id="nivel" name='distrito' class="form-control">
							 		<option value='<?php print($row['destrito']); ?>'><?php print($row['destrito']); ?></option>
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
							 	</select>               </div>

             </div>

             <br>



             <div class="row">

               <div class="col-md-3">
                 <label for="">Nome da Criança</label>
                 <input type='text' name='nomeCrianca' class='form-control' value='<?php print($row['nome']); ?>' >
               </div>



               <div class="col-md-3">
                 <label for="">Codigo do Benificiario</label>
                 <input type='text' name='codBen' class='form-control' value='<?php print($row['cod_beneficiario']); ?>' >
               </div>



               <div class="col-md-3">
                 <label for="">Data</label>
                 <input input id="date" type="date" name='data' class='form-control' value='<?php print($row['data_Nasc']); ?>' >
               </div>

               <div class="col-md-3">
                 <label for="">Idade</label>
                 <input input id="date" type="idade" name='idade' class='form-control' value='<?php print($row['idade']); ?>' >
               </div>



             </div>

             <br>


             <div class="row">

               <div class="col-md-3">
                 <label for="">Genero</label>
                 <select id="selectbasic" name='sexo' class="form-control">
                    <option value='<?php print($row['sexo']); ?>'><?php print($row['sexo']); ?></option>
                     <option value="M">Masculino</option>
                     <option value="F">Femenino</option>
                   </select>

               </div>

               <div class="col-md-3">
                 <label for="">Periodo de Seguimento (Data)</label>
                 <input input id="date" type="date" name='dataPeriodoSeg' class='form-control' >

               </div>

               <div class="col-md-3">
                 <label for="">Passou para manutenção (Data)</label>
                 <input input id="date" type="date" name='dataManutencao' class='form-control' >
               </div>

               <div class="col-md-3">
                 <label for="">Passou para graduação (Data)</label>
                 <input input id="date" type="date" name='dataGraduacao' class='form-control' >
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
                 <input type='text' name='areaServico' class='form-control' >

               </div>

               <div class="col-md-3">

                 <label for="">Necessidades Prioritária por Serviço no maximo (3)</label>
                 <input type='text' name='necessidadePrioritarea' class='form-control' >

               </div>

               <div class="col-md-3">

                 <label for=""><br>Pontuação (1,2)</label>
                 <input type='text' name='pontuacao' class='form-control' >

               </div>

               <div class="col-md-3">
                 <label for=""><br>Necessidades Resolvidas (X)</label> <br>

                 <label class="radio-inline" for="radios-1000">
                 <input type="radio" name="necessidadesResolvidas" id="radios-1000" value="X">Sim</label>

                 <label class="radio-inline" for="radios-1000">
                 <input type="radio" name="necessidadesResolvidas" id="radios-1000" value="">Nao</label>

               </div>





             </div>

           <br><br>

               <div class="row">

                 <div class="col-md-3">

                   <label for="">Data (mês)</label>
                   <input input id="date" type="date" name='data_2' class='form-control' >

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
                                 <input type='text' name='apoioDireito' class='form-control' >
                               </div>

                               <div class="col-md-3">
                                 <label for="">Realizado(X)</label> <br>

   															<label class="radio-inline" for="radios-1000">
   															<input type="radio" name="realizado_1" id="radios-1000" value="X">Sim</label>

   															<label class="radio-inline" for="radios-1000">
   															<input type="radio" name="realizado_1" id="radios-1000" value="">Nao</label>
                               </div>

                               <div class="col-md-3">
                                 <label for="">Data(mês)</label>
                                 <input type='date' name='data_3' class='form-control' >
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
                  <input type='text' name='apoioPorReferenc' class='form-control' >
                </div>

                <div class="col-md-3">
                  <label for="">Completo (X)</label> <br>

                  <label class="radio-inline" for="radios-1000">
                  <input type="radio" name="completou" id="radios-1000" value="X">Sim</label>

                  <label class="radio-inline" for="radios-1000">
                  <input type="radio" name="completou" id="radios-1000" value="">Nao</label>
                </div>

                <div class="col-md-3">
                  <label for="">Data (mês)</label>
                  <input type='date' name='data_4' class='form-control' >
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
                    <input type='text' name='acaoDaFamilia' class='form-control' >
                  </div>

                  <div class="col-md-3">
                  <label for="">Realizado (X)</label> <br>

                  <label class="radio-inline" for="radios-1000">
                  <input type="radio" name="realizado" id="radios-1000" value="X">Sim</label>

                  <label class="radio-inline" for="radios-1000">
                  <input type="radio" name="realizado" id="radios-1000" value="">Nao</label>
                  </div>

                  <div class="col-md-3">
                    <label for="">Data (mês)</label>
                    <input type='date' name='data_5' class='form-control' >
                  </div>

                  <div class="col-md-3">
                    <label for="">Comentarios</label>
                    <input type='text' name='comentarios' class='form-control' >
                  </div>

                </div>
         </div>
       </div>

     </fieldset>



<br><br>
     <div class="row">

           <div class="col-md-3">
                 <label for="">Assinatura do membro de CCPC:</label>
                 <input type='text' name='membroCCPC' class='form-control' >
           </div>

             <div class="col-md-3">
                   <label for="">Data:</label>
                   <input type='date' name='data_6' class='form-control' >
             </div>



     </div>

     <br><br>

     <div class="row">

           <div class="col-md-3">
                 <label for="">Assinatura do Gestor de Caso:</label>
                 <input type='text' name='gestorCaso' class='form-control' >
           </div>

             <div class="col-md-3">
                   <label for="">Data:</label>
                   <input type='date' name='data_7' class='form-control' >
             </div>



     </div>



<br><br><br>
        <div class="row">



          <div class="col-md-2">
            <button type="submit" class="btn btn-primary btn-block" name="submeter" align="center">
                <i class="glyphicon glyphicon-plus" ></i>&nbsp;Submeter
              </button>
                </div>
              <div class="col-md-2">
                <a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar ao dashboard</a>
              </div>



        </div>

    <br><br>

  </div>

</form>
