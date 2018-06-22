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

<center> <a href="reg_ben_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a></center>
<br>

<div class="container">

<input type='hidden' name='benificiario_id' class='form-control' value="<?php echo $benificiario_id; ?>" >
	 <form method='post'>

		 <div class="col-md-5">

		 <table class='table borderless'>

				 <tr>
						 <td style="border-top: none;" style="border-top: none;">Código de Inquiridor:</td>
						 <td style="border-top: none;"> <input type='text' name='cdInquiridor' class='form-control' value="<?php echo $cod_inquiridor; ?>"  > </td>
				 </tr>

				 <tr>
						 <td style="border-top: none;">Código de Agregado:</td>
						 <td style="border-top: none;">  <input type='text' name='cdAgregado' class='form-control' value="<?php echo $cod_agregado; ?>">  </td>
				 </tr>

				 <tr>
						 <td style="border-top: none;">Código de Beneficiario:</td>
						 <td style="border-top: none;">  <input type='text' name='cdBeneficiario' class='form-control'  value="<?php echo $cod_beneficiario; ?>"  >  </td>

				 </tr>
			 </table>

		</div>

		 <div class="panel panel-default">

					<div class="panel-body">

								 <fieldset class="col-md-12">

										<legend class="A">  Dados Demograficos</legend>
							<div class="panel panel-default">
								<div class="panel-body">
									 <table class='table borderless'>

										<tr>
											<td style="border-top: none;">Nome Completo:</td>
											<td style="border-top: none;">  <input type='text' name='nome'class='form-control'  value="<?php echo $nome; ?>" >  </td>

											<td style="border-top: none;">Numero de Identificacao:</td>
											<td style="border-top: none;">  <input type='text' name='N_Ident' class='form-control' value="<?php echo $num_Identificacao; ?>" >  </td>

											<td style="border-top: none;">Localidade:</td>
											<td style="border-top: none;">  <input type='text' name='localidade' class='form-control' value="<?php echo $localidade; ?>" >  </td>
										</tr>
										<tr>
											<td style="border-top: none;">Data de Nascimento:</td>
											<td style="border-top: none;">  <input type='date' name='dataNasc' class='form-control' value="<?php echo $data_Nasc; ?>"  >  </td>

											<td style="border-top: none;">Tipo Identificacao:</td>
												<td style="border-top: none;"><select id="selectbasic" name='T_Ident' class="form-control">
												  <option value="<?php echo $tipo_Identificacao; ?>"><?php echo $tipo_Identificacao; ?></option>
													<option value="BI">BI</option>
													<option value="Cedula">Cedula</option>
													<option value="Outro">Outro</option>
												</select>
											 </td>
											 <td style="border-top: none;">Bairro:</td>
											 <td style="border-top: none;">  <input type='text' name='Bairro' class='form-control' value="<?php echo $bairro; ?>" >  </td>
										</tr>
										<tr>
											<td style="border-top: none;">Sexo:</td>
											<td style="border-top: none;"><select id="selectbasic" name='sexo' class="form-control">
												   <option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
													<option value="M">Masculino</option>
													<option value="F">Femenino</option>
												</select>
											 </td>

											 <td style="border-top: none;">Provincia Atual:</td>
											 <td style="border-top: none;">
												 <select id="selectbasic" name='provincia' class="form-control">
												 <option value="<?php echo $provincia; ?>"><?php echo $provincia; ?></option>
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
												 </select>  </td>

												 <td style="border-top: none;">Quarterao:</td>
												 <td style="border-top: none;">  <input type='text' name='Quarterao' class='form-control' value="<?php echo $quarterao; ?>">  </td>
										</tr>
										<tr>
											<td style="border-top: none;">Idade:</td>
											<td style="border-top: none;">  <input type='text' name='idade' class='form-control' value="<?php echo $idade; ?>" >  </td>

											<td style="border-top: none;">Distrito Atual:</td>
											<td style="border-top: none;">  <input type='text' name='destrito' class='form-control' value="<?php echo $distrito; ?>" >  </td>

											<td style="border-top: none;">Ponto de Referencia:</td>
											<td style="border-top: none;">  <input type='text' name='pontReferencia' class='form-control' value="<?php echo $ponto_referencia; ?>">  </td>
										</tr>
										<tr>
											<td style="border-top: none;">Naturalidade:</td>
											<td style="border-top: none;">  <input type='text' name='Naturalidade'] class='form-control' value="<?php echo $naturalidade; ?>" >  </td>

											<td style="border-top: none;">Posto Adminstrativo:</td>
											<td style="border-top: none;">  <input type='text' name='postAdmin' class='form-control' value="<?php echo $posto_administrativo; ?>">  </td>

											<td style="border-top: none;">Contacto:</td>
											<td style="border-top: none;">  <input type='text' name='Contacto' class='form-control' value="<?php echo $Contato; ?>" >  </td>
										</tr>



									 </table>
								</div>
							</div>


								 <fieldset class="col-md-12">
							<legend class="A">Dados de Educacao</legend>

							<div class="panel panel-default">
								<div class="panel-body">
										 <table class='table borderless'>
									<tr>
										<td style="border-top: none;">Estudante:</td>
										<td style="border-top: none;"><select id="selectbasic" name='Estudante' class="form-control">
											  <option value="<?php echo $estudante; ?>"><?php echo $estudante; ?></option>
												<option value="Sim">Sim</option>
												<option value="Nao">Nao</option>
											</select>
										 </td>

										 <td style="border-top: none;">Turma:</td>
										 <td style="border-top: none;">  <input type='text' name='turma' class='form-control' value="<?php echo $turma; ?>" >  </td>

										 <td style="border-top: none;">Ultimo ano que <br> esteve na escola:</td>
										 <td style="border-top: none;">  <input type='text' name='ultimoAno' class='form-control' value="<?php echo $ultimo_ano_escolar; ?>" >  </td>
									</tr>


									<tr>
										<td style="border-top: none;">Caso Sim,nome da<br>escola: </td>
										<td style="border-top: none;">  <input type='text' name='nomEscola' class='form-control' value="<?php echo $nome_da_escola; ?>">  </td>

										<td style="border-top: none;">Numero:</td>
										<td style="border-top: none;">  <input type='text' name='numero' class='form-control' value="<?php echo $n_identificacao_turma; ?>">  </td>

										<td style="border-top: none;">Nome da Escola: </td>
										<td style="border-top: none;">  <input type='text' name='UltEscola' class='form-control' value="<?php echo $nome_Escola; ?>">  </td>
									</tr>

									<tr>
										<td style="border-top: none;">Classe:</td>
										<td style="border-top: none;">  <input type='text' name='classe' class='form-control' value="<?php echo $classe; ?>">  </td>

										<td style="border-top: none;">Se nao estuda,<br> porque:</td>
										<td style="border-top: none;">  <input type='text' name='Senaoporque' class='form-control' value="<?php echo $se_nao_estudante_porque; ?>">  </td>
									</tr>
						 </table>
								</div>
							</div>

						</fieldset>


								 <fieldset class="col-md-12">
							<legend class="A">Dados do Texte/HIV</legend>

							<div class="panel panel-default">
								<div class="panel-body">
										 <table class='table borderless'>
					<tr>
						<td style="border-top: none;">Alguma vez ja fez <br>o texte de HIV:</td>
						<td style="border-top: none;"><select id="selectbasic" name='texteHIV' class="form-control">
							  <option value="<?php echo $teste_HIV; ?>"><?php echo $teste_HIV; ?></option>
								<option value="Sim">Sim</option>
								<option value="Nao">Nao</option>
							</select>
						 </td>

						 <td style="border-top: none;">Caso Sim,qual foi <br>o ultimo resultado:</td>
						 <td style="border-top: none;"> <select id="selectbasic" name='resultado' class="form-control" >
								<option value="<?php echo $resultado; ?>"><?php echo $resultado; ?></option>
									 <option value="Posetivo">Posetivo</option>
									 <option value="Negativo">Negativo</option>
									 <option value="Indeterminado">Indeterminado</option>
					 </select>
					</td>
					<td style="border-top: none;">Caso positivo,<br>Em tratamento tarv:</td>
					<td style="border-top: none;"> <select id="selectbasic" name='Tarv' class="form-control" >
						 <option value="<?php echo $em_tratamento_tarv; ?>"><?php echo $em_tratamento_tarv; ?></option>
								<option value="Sim">Sim</option>
								<option value="Nao">Nao</option>

				</select>
		</td>
					</tr>

					<tr>
						<td style="border-top: none;">Pretendes Compartilhar <br>o Resultado:</td>
						<td style="border-top: none;"><select id="selectbasic" name='Compartilhar' class="form-control" >
							 <option value="<?php echo $compartilhar_resultado; ?>"><?php echo $compartilhar_resultado; ?></option>
								<option value="Sim">Sim</option>
								<option value="Nao">Nao</option>
							</select>
						 </td>

										 <td style="border-top: none;">Quando Fex o <br> Texte? data:</td>
										 <td style="border-top: none;">  <input type='date' name='dataTexte' class='form-control' value="<?php echo $data_Teste; ?>" >  </td>



					</tr>
						 </table>
								</div>
							</div>

						</fieldset>


								<fieldset class="col-md-12">
						 <legend class="A">Dados de Habitacao</legend>

						 <div class="panel panel-default">
							 <div class="panel-body">
										<table class='table borderless'>
										<tr>
											<td style="border-top: none;">Orfao de:</td>
											<td style="border-top: none;"> <select id="selectbasic" name='orfao' class="form-control" >
												   <option value="<?php echo $orfao_de; ?>"><?php echo $orfao_de; ?></option>
														<option value="Pai">Pai</option>
														<option value="Mae">Mae</option>
														<option value="Ambos">Ambos</option>
														<option value="Nao e Orfao">Nao e Orfao</option>
										</select>
									 </td>
									 <td style="border-top: none;">Tipo de Habitacao:</td>
									 <td style="border-top: none;"> <select id="selectbasic" name='tipoHabt' class="form-control" >
											  <option value="<?php echo $tipo_habitacao; ?>"><?php echo $tipo_habitacao; ?></option>
												 <option value="Precaria">Precaria</option>
												 <option value="Convecional">Convecional</option>
												 <option value="Meio-Convecional">Meio-Convecional</option>
								 </select>
								 </td>

								 <td style="border-top: none;">Historico Social <br> da Familia:</td>
								<td> <textarea class="form-control" id="textarea" name='historico' <?php echo $historial_familiar; ?>><?php echo $historial_familiar; ?></textarea> </td>
								 </tr>
									 <tr>
									 <td style="border-top: none;">De todos os membros<br>Listados, qual e o nome do <br> Chefe de Familia: </td>
									 <td style="border-top: none;">  <input type='text' name='chefe' class='form-control' value="<?php echo $chefe_familia; ?>" >  </td>

									 <td style="border-top: none;">Coordenadas GPS:<br> Latitude</td>
								<td>   <textarea class="form-control" id="textarea" name='latitude' value="<?php echo $Latitude; ?>" ><?php echo $Latitude; ?></textarea>  </td>

									 <td style="border-top: none;">Observacao:</td>
									 <td style="border-top: none;">  <input type='text' name='observacao' class='form-control' value="<?php echo $observacao; ?>" >  </td>
										</tr>

										<tr>
											<td style="border-top: none;"> Situacao Habitacional <br> da Casa:</td>
											<td style="border-top: none;"> <select id="selectbasic" name='situacaoHabt' class="form-control" >
												   <option value="<?php echo $tipo_casa; ?>"><?php echo $tipo_casa; ?></option>
														<option value="Propia">Propia</option>
														<option value="Alugada">Alugada</option>
										</select></td>

										<td style="border-top: none;">Coordenadas GPS:<br> Longitude</td>
										<td><textarea class="form-control" id="textarea" name='longitude' value="<?php echo $Longitude; ?>"><?php echo $Longitude; ?></textarea> </td>
										</tr>
						</table>
							 </div>
						 </div>

					 </fieldset>



							 <fieldset class="col-md-12">
						<legend class="A">Dados de Recolha</legend>

						<div class="panel panel-default">
							<div class="panel-body">
									 <table class='table borderless'>
										 <tr>
											 <td style="border-top: none;">Prenchido Por: </td>
											 <td style="border-top: none;"> <input type='text' name='prenchido' class='form-control' value="<?php echo $prenchido_por; ?>" >  </td>


											 <td style="border-top: none;">Outros</td>
											 <td style="border-top: none;">  <input type='text' name='outros' class='form-control' value="<?php echo $outros; ?>" >  </td>

											 <td style="border-top: none;">Posicao:</td>
											 <td style="border-top: none;">  <input type='text' name='Posicao' class='form-control' value="<?php echo $posicao; ?>" >  </td>
										 </tr>

										 <tr>
											 <td style="border-top: none;">Funcao:</td>
											 <td style="border-top: none;">  <input type='text' name='funcao' class='form-control' value="<?php echo $funcao; ?>" >  </td>

											 <td style="border-top: none;">Contacto:</td>
											 <td style="border-top: none;">  <input type='text' name='Scontacto' class='form-control' value="<?php echo $contacto_; ?>" >  </td>

											 <td style="border-top: none;">Contacto:</td>
											 <td style="border-top: none;">  <input type='text' name='TContacto' class='form-control' value="<?php echo $contacto; ?>" >  </td>

										 </tr>

										 <tr>
											 <td style="border-top: none;">Nome da CBO:</td>
											 <td style="border-top: none;">  <input type='text' name='cbo' class='form-control' value="<?php echo $nome_da_cbo; ?>" >  </td>

											 <td style="border-top: none;">Data:</td>
											 <td style="border-top: none;">  <input type='date' name='Sdata' class='form-control' value="<?php echo $data; ?>"  >  </td>

											 <td style="border-top: none;">Data:</td>
											 <td style="border-top: none;">  <input type='date' name='DataV' class='form-control' value="<?php echo $data_; ?>">  </td>
										 </tr>


										 <tr>

															 <td style="border-top: none;">Nome do Pograma:</td>
															 <td style="border-top: none;"> <select id="selectbasic" name='NomePogram' class="form-control" >
																	  <option value="<?php echo $nome_do_pograma; ?>"><?php echo $nome_do_pograma; ?></option>
																		 <option value="FCC">FCC</option>
																		 <option value="DREAMS">DREAMS</option>
																		 <option value="Outros">Outros</option>
														 </select>
														 </td>

														 <td style="border-top: none;">Nome do <br> Tecnico CBO:</td>
														 <td style="border-top: none;">  <input type='text' name='NomeTecnico' class='form-control'  value="<?php echo $nome_tecnico_cbo; ?>" >  </td>
					 </tr>


				 </table>
						</div>
					</div>

				</fieldset>

				<div class="clearfix"></div>
						 </div>

		</div>
		<table class='table borderless'>
		<tr>
            <td colspan="2">
              <button type="submit" class="btn btn-primary" name="btn-update">
         <span class="glyphicon glyphicon-edit"></span>  Actualizar
      </button>
                  <a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Cancelar</a>
              </td>
        </tr>

    </table>
</form>


</div>
