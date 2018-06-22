<form class="form" method="post">

<div class="form-group">
<div class="row">
  <div class="col-md-3">
    <label for="">Projecto</label>
    <select id="selectbasic" name='projecto' class="form-control">
      <option value="FCC">FCC</option>
      <option value="DREAMS">DREAMS</option>
    </select>
  </div>

  <div class="col-md-2">
    <label for="">Data do inicio</label>
    <input input id="date" type="date" name='dataInicio' class='form-control' >
  </div>

  <div class="col-md-2">
    <label for="">Data do fim</label>
    <input input id="date" type="date" name='data_fim' class='form-control' >
  </div>

</div>

<br>

  <div class="row">
    <div class="col-md-3">
      <label for="">Provincia</label>
			<select id="selectbasic" name='provincia' class="form-control">
			<option value='<?php print($row['provincia']); ?>'><?php print($row['provincia']); ?></option>
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
			</select>
    </div>

    <div class="col-md-3">
      <label for="">Distrito</label>
			<select id="nivel" name='distrito' class="form-control">
			<option value='<?php print($row['distrito']); ?>'><?php print($row['distrito']); ?></option>
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
			</select>
		</div>

    <div class="col-md-3">
      <label for="">Parceiro de Implementacao</label>
			<select name='parceiro' class="form-control">
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
			</select>    </div>

    <div class="col-md-3">
      <label for="">Actividade</label>
      <select id="selectbasic" name='actividade' class="form-control">
        <option value=""></option>

        <option value="Treinamento em sistema de referencia">Treinamento em sistema de referencia</option>
        <option value="Encontro trimestrais e multisectoriais no ambito de coordenacao das actividades de COVs">Encontro trimestrais e multisectoriais no ambito de coordenacao das actividades de COVs</option>
        <option value="Beneficiários treinados em  materia de VBG">Beneficiários treinados em  materia de VBG</option>
        <option value="Benficiários treinados em materia de Educação Vocacional">Benficiários treinados em materia de Educação Vocacional</option>
        <option value="Benficiários treinados em materia de VSLA">Benficiários treinados em materia de VSLA</option>
        <option value="Benficiários treinados em materia de referência">Benficiários treinados em materia de referência</option>
        <option value="Benficiários treinados em materia de Gestao de Caso">Benficiários treinados em materia de Gestao de Caso</option>
        <option value="Benficiários treinados em materia de Nutricao">Benficiários treinados em materia de Nutricao</option>
        <option value="Benficiários treinados em materia de TARV Pediatrico e Adulto">Benficiários treinados em materia de TARV Pediatrico e Adulto</option>
        <option value="OVs (3-5anos) inscritos nos centros de DPI & que participa nas actividades de pre escola">COVs (3-5anos) inscritos nos centros de DPI & que participa nas actividades de pre escola</option>
        <option value="Benficiarios que receberam subcidio escolar nas escolas primaria">Benficiários que receberam subcidio escolar nas escolas primaria</option>
        <option value="Benficiarios que receberam subcidio escolar nas escolas Secundaria">Benficiários que receberam subcidio escolar nas escolas Secundaria</option>
        <option value="Membros dos conselhos das escolas e representantes dos pais treinados para fazer o coorte de COVs/RAMJ">Membros dos conselhos das escolas e representantes dos pais treinados para fazer o coorte de COVs/RAMJ </option>
        <option value="COVs/RAMJ acompanhados atraves dos coortes">COVs/RAMJ acompanhados atraves dos coortes</option>
        <option value="COVs identificados nas comunidades e rastreiados para mal nutricao (DAG e DAM)">COVs identificados nas comunidades e rastreiados para mal nutrição (DAG e DAM)</option>
        <option value="COVs com mal nutricao identificados nas comunidades e referidos para as Unidades Sanitarias">COVs com mal nutrição identificados nas comunidades e referidos para as Unidades Sanitarias</option>
        <option value="COVs com mal nutricao referidos para realizar o teste de HIV">COVs com mal nutrição referidos para realizar o teste de HIV</option>
        <option value="COVs apoiadas com o Pacote de nutricao">COVs apoiadas  com o Pacote de nutrição</option>
        <option value="Cuidadores que estao a receber sessoes sobre reabilitacao nutricional">Cuidadores que estão a receber sessões sobre reabilitação nutricional</option>
        <option value="GECs que se beneficiaram em educação parental">GECs que se beneficiaram em educação parental</option>
        <option value="Cuidadores que participam nas sessoes de educacao parental">Cuidadores que participam nas sessoes de educação parental</option>
        <option value="Parceiros (homens) alcancados atraves de mentores homens">Parceiros (homens) alcancados atraves de mentores homens</option>
        <option value="Lista de Gestores de caso">Lista de Gestores de caso</option>
        <option value="Crianças que participam em "Social Asset Building" [APS, ASRH, Habilidade de Vida">Crianças que participam em "Social Asset Building" [APS, ASRH, Habilidade de Vida</option>
        <option value="COVs e Cuidadores Treinado em materia de prevencao do HIV - PPREV -pop chave">COVs e Cuidadores Treinado em materia de prevencao do HIV - PPREV -pop chave</option>
        <option value="Beneficiarios nos YES Clubes e GECs treinados em literacia financeira (15-17 & 18-24)">Beneficiarios nos YES Clubes e GECs treinados em literacia financeira (15-17 & 18-24)</option>
        <option value="Membros de YES Clubes ligado a treinamento vocacional">Membros de YES Clubes ligado a treinamento vocacional</option>
        <option value="Beneficiarios apoiados atraves de serviços de VSLA+">Beneficiarios apoiados atraves de serviços de VSLA+</option>
        <option value="PEPFAR GEND_NORM: # de individuos que completaram as intervenções ligado as normas de genero">PEPFAR GEND_NORM: # de individuos que completaram as intervenções ligado as normas de genero</option>
        <option value="Beneficiarios rastreiados para o VBG">Beneficiarios rastreiados para o VBG</option>
          <option value="Beneficiarios que participam nos YES Clubs (Clubes de Fortalecimento Economico para Jovens)">beneficiarios que participam nos YES Clubs (Clubes de Fortalecimento Economico para Jovens)</option>
            <option value="Covs que participaram nas sessoes de educacao Vocacional (Culinaria, VSLA, actividade agricola etc)">Covs que participaram nas sessoes de educacao Vocacional (Culinaria, VSLA, actividade agricola etc)</option>
              <option value="beneficiarios Apoiados atraves de Apoio Legal">beneficiarios Apoiados atraves de Apoio Legal</option>
                <option value="Criancas em centros infantis (orfanatos, escolinhas e centros infantis)">Crianças em centros infantis (orfanatos, escolinhas e centros infantis)</option>
                  <option value="Educadores formados em DPI ">Educadores formados em DPI </option>
                  <option value="COVs recebendo educacao sobre saude sexual reprodutiva (ASRH) / palestras sobre o HIV"> COVs recebendo educaçao sobre saude sexual reprodutiva (ASRH) / palestras sobre o HIV</option>
                    <option value="COVs recebendo apoio em Habilidades para Vida">COVs recebendo apoio em Habilidades para Vida</option>
                      <option value="COVs recebendo o apoio psicosocial (APS)">COVs recebendo o apoio psicosocial (APS)</option>
                        <option value="COVs que participam nos Clubes dos direito da Crianca (CRC)">COVs que participam nos Clubes dos direito da Crianca (CRC)</option>
                        <option value="COVs e cuidadores que abandonaram o TARV e que foram referidos para reiniciar o TARV na US">COVs e cuidadores que abandonaram o TARV e que foram referidos para reiniciar o TARV na US</option>
                        <option value="COVs e cuidadores eligiveis que se beneficiaram em servicos de saude">COVs e cuidadores eligiveis que se beneficiaram em serviços de saúde</option>
                        <option value="Cuidadores que participaram nas sessoes de debates sobre HIV e revelacao do seroestado"> Cuidadores que participaram nas sessões de debates sobre HIV e revelação do seroestado</option>
                        <option value="Benficiarios treinados por cada tema de treinamento (VBG, Educacao, VSLA, referencia)">Benficiários treinados por cada tema de treinamento (VBG, Educação, VSLA, referência) </option>
                        <option value="Membros do governo treinados em sistema de referencia e ligacao dos beneficarios para os SDSMAS e LIPS">Membros do governo treinados em sistema de referencia e ligacao dos beneficarios para os SDSMAS e LIPS </option>
                        <option value="Individuos que completaram uma intervencao de normas de VBG no contexto de HIV/SIDA">Individuos que completaram uma intervençao de normas de VBG no contexto de HIV/SIDA</option>
                        <option value="Transferido para outros ONGs que nao tem o apoio financeiro da USAID">Transferido para outros ONGs que nao tem o apoio financeiro da USAID</option>

      </select>
    </div>
  </div>

  <br>



    <div class="row">
      <div class="col-md-3">
        <label for="">Nome Completo</label>
        <input type='text' name='nome' class='form-control'  value='<?php print($row['nome']); ?>' >
      </div>

      <div class="col-md-3">
        <label for="">Organização/Instituição</label>
        <input type='text' name='Organizacao' class='form-control' >
      </div>

      <div class="col-md-3">
        <label for="">Proveniência</label>
        <input type='text' name='proveniencia' class='form-control' >
      </div>
    </div>

    <br>


    <div class="row">
      <div class="col-md-3">
        <label for="">Função</label>
        <input type='text' name='funcao' class='form-control' >
      </div>

      <div class="col-md-3">
        <label for="">Genero</label>
        <select id="selectbasic" name='sexo' class="form-control">
           <option value='<?php print($row['sexo']); ?>'><?php print($row['sexo']); ?></option>
          <option value="M">M</option>
          <option value="F">F</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="">Idade</label>
        <select id="selectbasic" name='idade' class="form-control">
          <option value=""></option>
	 <option value="Menor que 1">Menor que 1</option>
          <option value="1-4">1-4</option>
 	  <option value="5-9">5-9</option>
          <option value="10-14">10-14</option>
          <option value="15-17">15-17</option>
 	  <option value="18-24">18-24</option>
          <option value="Maior que 25">Maior que 25</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="">Contacto</label>
        <input type='text' name='contacto' class='form-control'>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary btn-block" name="submeter">
            <i class="glyphicon glyphicon-plus" ></i>&nbsp;Submeter
          </button>

      </div>
      <div class="col-md-2">
        <a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar ao dashboard</a>
      </div>

    </div>

</form>

</div>

  <script src="js/main.js"></script>

  <script src="js/jquery.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>


</body>


</html>
