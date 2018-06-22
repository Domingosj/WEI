<div class="container">
  <br><br>

  <a href="mac_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>

<br>
<br>
 <form method='post'>


  <table class='table borderless'>
<tr>
  <td style="border-top: none;">  <input type='hidden' name='codBen'class='form-control' >  </td>
</tr>
<tr>

    <td style="border-top: none;">Nome Completo:</td>
    <td style="border-top: none;">  <input type='text' name='nome'class='form-control' value="<?php echo $nome; ?>" >  </td>

    <td style="border-top: none;">Idade:</td>
    <td style="border-top: none;">  <input type='number' name='idade' class='form-control' value="<?php echo $idade; ?>" >  </td>

    <td style="border-top: none;">Numero de Identificacao:</td>
    <td style="border-top: none;">  <input type='text' name='N_Ident' class='form-control' value="<?php echo $cd_ident; ?>" > </td>

</tr>

<tr>
    <td style="border-top: none;">Nome Cuidador:</td>
    <td style="border-top: none;">  <input type='text' name='cuidador' class='form-control' value="<?php echo $nome_cuidador; ?>"  >  </td>

    <td style="border-top: none;">Sexo:</td>
    <td style="border-top: none;"><select id="selectbasic" name='sexo' class="form-control" >
       <option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
      </select>
     </td>

     <td style="border-top: none;">Provincia Atual:</td>
     <td style="border-top: none;">    <select id="selectbasic" name='provincia' class="form-control">
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
</tr>

<tr>

      <td style="border-top: none;">Nome do Vuluntario:</td>
        <td style="border-top: none;">  <input type='text' name='vuluntario' class='form-control' value="<?php echo $nome_voluntario; ?>" >  </td>

    <td style="border-top: none;">Nome Lider Comunitario:</td>
    <td style="border-top: none;">  <input type='text' name='lider' class='form-control' value="<?php echo $nome_lider; ?>" >  </td>


    <td style="border-top: none;">Nome da OCB:</td>
    <td style="border-top: none;">

      <select name='ocb' class="form-control">
       <option value="<?php echo $nome_ocb; ?>" > <?php echo $nome_ocb; ?> </option>
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
       </select>


</tr>

    <td style="border-top: none;">Destrito:</td>
    <td style="border-top: none;">  <input type='text' name='destrito' class='form-control' value="<?php echo $destrito; ?>" >  </td>

    <td style="border-top: none;">A crianca tem HIV:</td>
    <td style="border-top: none;"><select id="selectbasic" name='hiv' class="form-control">

       <option value="<?php echo $hiv; ?>"><?php echo $hiv; ?></option>
       <option value="Posetivo">Posetivo</option>
       <option value="Negativo">Negativo</option>
       <option value="desconhecido">Desconhecido</option>
      </select>
     </td>
     <td style="border-top: none;">Se sim, em tratamento tarv:</td>
    <td style="border-top: none;"><select id="selectbasic" name='tarv' class="form-control">
       <option value="<?php echo $tarv; ?>"><?php echo $tarv; ?></option>
        <option value="Sim">Sim</option>
        <option value="Nao">Nao</option>
      </select>
     </td>
</tr>



<tr>
  <td style="border-top: none;">Orfao de:</td>
 <td style="border-top: none;"><select id="selectbasic" name='situacao_crianca' class="form-control">
    <option value="<?php echo $situacao_crianca; ?>"><?php echo $situacao_crianca; ?></option>
     <option value="Pai">Pai</option>
     <option value="Mae">Mae</option>
        <option value="Ambos">Ambos</option>
   </select>
  </td>

</tr>



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
                <input type="radio" class="radio" class="radio" name="A" id="radios-4" value="Nao aplicavel" <?php if ($saude_1 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
                <img src="img/null.png" onclick="document.getElementById('radios-4').checked = true" id="radios-4" />
              </label>
              <label class="radio-inline" for="radios-1">
                <input type="radio" class="radio" class="radio" name="A" id="radios-5" value="Mau" <?php if ($saude_1 == 'Mau') echo 'checked="checked"'; ?>>
                <img src="img/sad.png" onclick="document.getElementById('radios-5').checked = true" />
              </label>
              <label class="radio-inline" for="radios-2">
                <input type="radio" class="radio" class="radio" name="A" id="radios-6" value="Razoavel" <?php if ($saude_1 == 'Razoavel') echo 'checked="checked"'; ?>>
                <img src="img/neutral.png" onclick="document.getElementById('radios-6').checked = true" />
              </label>
              <label class="radio-inline" for="radios-3">
                <input type="radio" class="radio" class="radio" name="A" id="radios-7" value="Bom" <?php if ($saude_1 == 'Bom') echo 'checked="checked"'; ?>>
                <img src="img/happy.png" onclick="document.getElementById('radios-7').checked = true" />
              </label>
            </div>

</td>

<td>
        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" class="radio" name="B" id="radios-8" value="Nao aplicavel" <?php if ($saude_2 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-8').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" class="radio" name="B" id="radios-9" value="Mau" <?php if ($saude_2 == 'Mau') echo 'checked="checked"'; ?>>
          <img src="img/sad.png" onclick="document.getElementById('radios-9').checked = true" />

        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" class="radio" name="B" id="radios-10" value="Razoavel" <?php if ($saude_2 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-10').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" class="radio" name="B" id="radios-11" value="Bom" <?php if ($saude_2 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-11').checked = true" />
        </label>
        </td>
        <td>

        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" class="radio" name="C" id="radios-12" value="Nao aplicavel" <?php if ($saude_3 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-12').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" class="radio" name="C" id="radios-13" value="Mau" <?php if ($saude_3 == 'Mau') echo 'checked="checked"'; ?>>
          <img src="img/sad.png" onclick="document.getElementById('radios-13').checked = true" />

        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" class="radio" name="C" id="radios-14" value="Razoavel" <?php if ($saude_3 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-14').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" class="radio" name="C" id="radios-15" value="Bom" <?php if ($saude_3 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-15').checked = true" />
        </label>
        </td>
        <td>
        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" class="radio" name="D" id="radios-16" value="Nao aplicavel" <?php if ($saude_4 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-16').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" class="radio" name="D" id="radios-17" value="Mau" <?php if ($saude_4 == 'Mau') echo 'checked="checked"'; ?>>
          <img src="img/sad.png" onclick="document.getElementById('radios-17').checked = true" />

        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" class="radio" name="D" id="radios-18" value="Razoavel" <?php if ($saude_4 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-18').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" class="radio" name="D" id="radios-19" value="Bom" <?php if ($saude_4 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-19').checked = true" />
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
        <input type="radio" class="radio" class="radio" name="E" id="radios-20" value="Nao aplicavel" <?php if ($saude_5 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
        <img src="img/null.png" onclick="document.getElementById('radios-20').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" class="radio" name="E" id="radios-21" value="Mau" <?php if ($saude_5 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-21').checked = true" />

      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" class="radio" name="E" id="radios-22" value="Razoavel" <?php if ($saude_5 == 'Razoavel') echo 'checked="checked"'; ?>>
        <img src="img/neutral.png" onclick="document.getElementById('radios-22').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" class="radio" name="E" id="radios-23" value="Bom" <?php if ($saude_5 == 'Bom') echo 'checked="checked"'; ?>>
        <img src="img/happy.png" onclick="document.getElementById('radios-23').checked = true" />
      </label>
      </td>
      <td>


      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" class="radio" name="F" id="radios-24" value="Nao aplicavel" <?php if ($saude_6 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
        <img src="img/null.png" onclick="document.getElementById('radios-24').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" class="radio" name="F" id="radios-25" value="Mau" <?php if ($saude_6 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-25').checked = true" />

      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" class="radio" name="F" id="radios-26" value="Razoavel" <?php if ($saude_6 == 'Razoavel') echo 'checked="checked"'; ?>>
        <img src="img/neutral.png" onclick="document.getElementById('radios-26').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" class="radio" name="F" id="radios-27" value="Bom" <?php if ($saude_6 == 'Bom') echo 'checked="checked"'; ?>>
        <img src="img/happy.png" onclick="document.getElementById('radios-27').checked = true" />
      </label>
      </td>
      <td>

      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" class="radio" name="G" id="radios-28" value="Nao aplicavel" <?php if ($saude_7 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
        <img src="img/null.png" onclick="document.getElementById('radios-28').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" class="radio" name="G" id="radios-29" value="Mau" <?php if ($saude_7 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-29').checked = true" />

      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" class="radio" name="G" id="radios-30" value="Razoavel" <?php if ($saude_7 == 'Razoavel') echo 'checked="checked"'; ?>>
        <img src="img/neutral.png" onclick="document.getElementById('radios-30').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" class="radio" name="G" id="radios-31" value="Bom" <?php if ($saude_7 == 'Bom') echo 'checked="checked"'; ?>>
        <img src="img/happy.png" onclick="document.getElementById('radios-31').checked = true" />
      </label>
      </td>
      <td>
      <label class="radio-inline" for="radios-0">
        <input type="radio" class="radio" class="radio" name="H" id="radios-32" value="Nao aplicavel" <?php if ($alimentacao_nutricao_8 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
        <img src="img/null.png" onclick="document.getElementById('radios-32').checked = true" />

      </label>
      <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" class="radio" name="H" id="radios-33" value="Mau" <?php if ($alimentacao_nutricao_8 == 'Mau') echo 'checked="checked"'; ?>>
       <img src="img/sad.png" onclick="document.getElementById('radios-33').checked = true" />

      </label>
      <label class="radio-inline" for="radios-2">
        <input type="radio" class="radio" class="radio" name="H" id="radios-34" value="Razoavel" <?php if ($alimentacao_nutricao_8 == 'Razoavel') echo 'checked="checked"'; ?>>
        <img src="img/neutral.png" onclick="document.getElementById('radios-34').checked = true" />
      </label>
      <label class="radio-inline" for="radios-3">
        <input type="radio" class="radio" class="radio" name="H" id="radios-35" value="Bom" <?php if ($alimentacao_nutricao_8 == 'Bom') echo 'checked="checked"'; ?>>
        <img src="img/happy.png" onclick="document.getElementById('radios-35').checked = true" />
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
      <input type="radio" class="radio" class="radio" name="I" id="radios-36" value="Nao aplicavel"<?php if ($alimentacao_nutricao_9 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-36').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" class="radio" name="I" id="radios-37" value="Mau" <?php if ($alimentacao_nutricao_9 == 'Mau') echo 'checked="checked"'; ?>>
       <img src="img/sad.png" onclick="document.getElementById('radios-37').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="I" id="radios-38" value="Razoavel" <?php if ($alimentacao_nutricao_9 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-38').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="I" id="radios-39" value="Bom" <?php if ($alimentacao_nutricao_9 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-39').checked = true" />
    </label>
    </td>
    <td>
    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="J" id="radios-40" value="Nao aplicavel" <?php if ($educacao_10 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-40').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="J" id="radios-41" value="Mau" <?php if ($educacao_10 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-41').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="J" id="radios-42" value="Razoavel" <?php if ($educacao_10 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-42').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="J" id="radios-43" value="Bom" <?php if ($educacao_10 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-43').checked = true" />
    </label>
    </td>
    <td>

    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="K" id="radios-44" value="Nao aplicavel" <?php if ($educacao_11 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-44').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="K" id="radios-45" value="Mau" <?php if ($educacao_11 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-45').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="K" id="radios-46" value="Razoavel" <?php if ($educacao_11 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-46').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="K" id="radios-47" value="Bom" <?php if ($educacao_11 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-47').checked = true" />
    </label>
    </td>
    <td>
    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="L" id="radios-48" value="Nao aplicavel" <?php if ($educacao_12 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-48').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="L" id="radios-49" value="Mau" <?php if ($educacao_12 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-49').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="L" id="radios-50" value="Razoavel" <?php if ($educacao_12 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-50').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="L" id="radios-51" value="Bom" <?php if ($educacao_12 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-51').checked = true" />
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
      <input type="radio" class="radio" name="M" id="radios-52" value="Nao aplicavel" <?php if ($educacao_13 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-52').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="M" id="radios-53" value="Mau" <?php if ($educacao_13 == 'Mau') echo 'checked="checked"'; ?>>
       <img src="img/sad.png" onclick="document.getElementById('radios-53').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="M" id="radios-54" value="Razoavel" <?php if ($educacao_13 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-54').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="M" id="radios-55" value="Bom" <?php if ($educacao_13 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-55').checked = true" />
    </label>
    </td>
    <td>

    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="N" id="radios-56" value="Nao aplicavel" <?php if ($educacao_14 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-56').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="N" id="radios-57" value="Mau" <?php if ($educacao_14 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-57').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="N" id="radios-58" value="Razoavel" <?php if ($educacao_14 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-58').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="N" id="radios-59" value="Bom" <?php if ($educacao_14 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-59').checked = true" />
    </label>
    </td>
    <td>

    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="O" id="radios-60" value="Nao aplicavel" <?php if ($educacao_15 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-60').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="O" id="radios-61" value="Mau" <?php if ($educacao_15 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-61').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="O" id="radios-62" value="Razoavel" <?php if ($educacao_15 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-62').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="O" id="radios-63" value="Bom" <?php if ($educacao_15 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-63').checked = true" />
    </label>
    </td>
    <td>
    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="P" id="radios-64" value="Nao aplicavel" <?php if ($educacao_16 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-64').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="P" id="radios-65" value="Mau" <?php if ($educacao_16 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-65').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="P" id="radios-66" value="Razoavel" <?php if ($educacao_16 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-66').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="P" id="radios-67" value="Bom" <?php if ($educacao_16 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-67').checked = true" />
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
      <input type="radio" class="radio" name="Q" id="radios-68" value="Nao aplicavel" <?php if ($educacao_17 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-68').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="Q" id="radios-69" value="Mau" <?php if ($educacao_17 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-69').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="Q" id="radios-70" value="Razoavel" <?php if ($educacao_17 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-70').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="Q" id="radios-71" value="Bom" <?php if ($educacao_17 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-71').checked = true" />
    </label>
    </td>
    <td>
    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="R" id="radios-72" value="Nao aplicavel" <?php if ($protecao_apoio_18 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-72').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="R" id="radios-73" value="Mau" <?php if ($protecao_apoio_18 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-73').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="R" id="radios-74" value="Razoavel" <?php if ($protecao_apoio_18 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-74').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="R" id="radios-75" value="Bom" <?php if ($protecao_apoio_18 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-75').checked = true" />
    </label>
    </td>
    <td>

    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="S" id="radios-76" value="Nao aplicavel" <?php if ($protecao_apoio_19 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-76').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
        <input type="radio" class="radio" name="S" id="radios-77" value="Mau" <?php if ($protecao_apoio_19 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-77').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="S" id="radios-78" value="Razoavel" <?php if ($protecao_apoio_19 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-78').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="S" id="radios-79" value="Bom" <?php if ($protecao_apoio_19 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-79').checked = true" />
    </label>
    </td>
    <td>
    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="T" id="radios-80" value="Nao aplicavel" <?php if ($protecao_apoio_20 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-80').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="T" id="radios-81" value="Mau" <?php if ($protecao_apoio_20 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-81').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="T" id="radios-82" value="Razoavel" <?php if ($protecao_apoio_20 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-82').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="T" id="radios-83" value="Bom" <?php if ($protecao_apoio_20 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-83').checked = true" />
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
      <input type="radio" class="radio" name="U" id="radios-84" value="Nao aplicavel"<?php if ($protecao_apoio_21 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-84').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="U" id="radios-85" value="Mau" <?php if ($protecao_apoio_21 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-85').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="U" id="radios-86" value="Razoavel" <?php if ($protecao_apoio_21 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-86').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="U" id="radios-87" value="Bom" <?php if ($protecao_apoio_21 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-87').checked = true" />
    </label>
    </td>
    <td>

    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="V" id="radios-88" value="Nao aplicavel" <?php if ($habitacao_22 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-88').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="V" id="radios-89" value="Mau" <?php if ($habitacao_22 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-89').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="V" id="radios-90" value="Razoavel" <?php if ($habitacao_22 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-90').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="V" id="radios-91" value="Bom" <?php if ($habitacao_22 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-91').checked = true" />
    </label>
    </td>
    <td>

    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="W" id="radios-92" value="Nao aplicavel"<?php if ($apoio_social_23 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-92').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="W" id="radios-93" value="Mau" <?php if ($apoio_social_23 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-93').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="W" id="radios-95" value="Razoavel" <?php if ($apoio_social_23 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-95').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="W" id="radios-97" value="Bom" <?php if ($apoio_social_23 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-97').checked = true" />
    </label>
    </td>
    <td>
    <label class="radio-inline" for="radios-0">
      <input type="radio" class="radio" name="Y" id="radios-98" value="Nao aplicavel" <?php if ($apoio_social_24 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
      <img src="img/null.png" onclick="document.getElementById('radios-98').checked = true" />

    </label>
    <label class="radio-inline" for="radios-1">
      <input type="radio" class="radio" name="Y" id="radios-99" value="Mau" <?php if ($apoio_social_24 == 'Mau') echo 'checked="checked"'; ?>>
        <img src="img/sad.png" onclick="document.getElementById('radios-99').checked = true" />
    </label>
    <label class="radio-inline" for="radios-2">
      <input type="radio" class="radio" name="Y" id="radios-100" value="Razoavel" <?php if ($apoio_social_24 == 'Razoavel') echo 'checked="checked"'; ?>>
      <img src="img/neutral.png" onclick="document.getElementById('radios-100').checked = true" />
    </label>
    <label class="radio-inline" for="radios-3">
      <input type="radio" class="radio" name="Y" id="radios-101" value="Bom" <?php if ($apoio_social_24 == 'Bom') echo 'checked="checked"'; ?>>
      <img src="img/happy.png" onclick="document.getElementById('radios-101').checked = true" />
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
          <input type="radio" class="radio" name="X" id="radios-102" value="Nao aplicavel" <?php if ($apoio_social_25 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-102').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="X" id="radios-103" value="Mau" <?php if ($apoio_social_25 == 'Mau') echo 'checked="checked"'; ?>>
            <img src="img/sad.png" onclick="document.getElementById('radios-103').checked = true" />
        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" name="X" id="radios-104" value="Razoavel" <?php if ($apoio_social_25 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-104').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" name="X" id="radios-105" value="Bom" <?php if ($apoio_social_25 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-105').checked = true" />
        </label>
        </td>
        <td>


        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" name="Z" id="radios-106" value="Nao aplicavel" <?php if ($apoio_social_26 == 'Nao aplicavel') echo 'checked="checked"'; ?> >
          <img src="img/null.png" onclick="document.getElementById('radios-106').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="Z" id="radios-107" value="Mau" <?php if ($apoio_social_26 == 'Mau') echo 'checked="checked"'; ?>>
            <img src="img/sad.png" onclick="document.getElementById('radios-107').checked = true" />
        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" name="Z" id="radios-108" value="Razoavel" <?php if ($apoio_social_26 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-108').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" name="Z" id="radios-109" value="Bom" <?php if ($apoio_social_26 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-109').checked = true" />
        </label>
        </td>
        <td>

        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" name="A1" id="radios-110" value="Nao aplicavel" <?php if ($apoio_social_27 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-110').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="A1" id="radios-111" value="Mau" <?php if ($apoio_social_27 == 'Mau') echo 'checked="checked"'; ?>>
            <img src="img/sad.png" onclick="document.getElementById('radios-111').checked = true" />
        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" name="A1" id="radios-112" value="Razoavel" <?php if ($apoio_social_27 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-112').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" name="A1" id="radios-137" value="Bom" <?php if ($apoio_social_27 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-137').checked = true" />
        </label>
        </td>
        <td>
        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" name="B1" id="radios-113" value="Nao aplicavel" <?php if ($apoio_social_28 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-113').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="B1" id="radios-114" value="Mau" <?php if ($apoio_social_28 == 'Mau') echo 'checked="checked"'; ?>>
            <img src="img/sad.png" onclick="document.getElementById('radios-114').checked = true" />
        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" name="B1" id="radios-115" value="Razoavel" <?php if ($apoio_social_28 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-115').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" name="B1" id="radios-116" value="Bom" <?php if ($apoio_social_28 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-116').checked = true" />
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
          <input type="radio" class="radio" name="C1" id="radios-117" value="Nao aplicavel" <?php if ($apoio_social_29 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-117').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="C1" id="radios-118" value="Mau" <?php if ($apoio_social_29 == 'Mau') echo 'checked="checked"'; ?>>
            <img src="img/sad.png" onclick="document.getElementById('radios-118').checked = true" />
        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" name="C1" id="radios-119" value="Razoavel" <?php if ($apoio_social_29 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-119').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" name="C1" id="radios-120" value="Bom" <?php if ($apoio_social_29 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-120').checked = true" />
        </label>
        </td>
        <td>


        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" name="D1" id="radios-121" value="Nao aplicavel" <?php if ($apoio_social_30 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-121').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="D1" id="radios-122" value="Mau" <?php if ($apoio_social_30 == 'Mau') echo 'checked="checked"'; ?>>
            <img src="img/sad.png" onclick="document.getElementById('radios-122').checked = true" />
        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" name="D1" id="radios-123" value="Razoavel" <?php if ($apoio_social_30 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-123').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" name="D1" id="radios-124" value="Bom" <?php if ($apoio_social_30 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-124').checked = true" />
        </label>
        </td>
        <td>

        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" name="E1" id="radios-125" value="Nao aplicavel" <?php if ($apoio_social_31 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-125').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="E1" id="radios-126" value="Mau" <?php if ($apoio_social_31 == 'Mau') echo 'checked="checked"'; ?>>
            <img src="img/sad.png" onclick="document.getElementById('radios-126').checked = true" />
        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" name="E1" id="radios-127" value="Razoavel" <?php if ($apoio_social_31 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-127').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" name="E1" id="radios-128" value="Bom" <?php if ($apoio_social_31 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-128').checked = true" />
        </label>
        </td>
        <td>
        <label class="radio-inline" for="radios-0">
          <input type="radio" class="radio" name="F1" id="radios-129" value="Nao aplicavel" <?php if ($fort_economico_32 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-129').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="F1" id="radios-130" value="Mau" <?php if ($fort_economico_32 == 'Mau') echo 'checked="checked"'; ?>>
            <img src="img/sad.png" onclick="document.getElementById('radios-130').checked = true" />
        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" name="F1" id="radios-131" value="Razoavel" <?php if ($fort_economico_32 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-131').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" name="F1" id="radios-132" value="Bom" <?php if ($fort_economico_32 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-132').checked = true" />
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
          <input type="radio" class="radio" name="G1" id="radios-133" value="Nao aplicavel"<?php if ($fort_economico_33 == 'Nao aplicavel') echo 'checked="checked"'; ?>>
          <img src="img/null.png" onclick="document.getElementById('radios-133').checked = true" />

        </label>
        <label class="radio-inline" for="radios-1">
          <input type="radio" class="radio" name="G1" id="radios-134" value="Mau" <?php if ($fort_economico_33 == 'Mau') echo 'checked="checked"'; ?>>
            <img src="img/sad.png" onclick="document.getElementById('radios-134').checked = true" />
        </label>
        <label class="radio-inline" for="radios-2">
          <input type="radio" class="radio" name="G1" id="radios-135" value="Razoavel" <?php if ($fort_economico_33 == 'Razoavel') echo 'checked="checked"'; ?>>
          <img src="img/neutral.png" onclick="document.getElementById('radios-135').checked = true" />
        </label>
        <label class="radio-inline" for="radios-3">
          <input type="radio" class="radio" name="G1" id="radios-136" value="Bom" <?php if ($fort_economico_33 == 'Bom') echo 'checked="checked"'; ?>>
          <img src="img/happy.png" onclick="document.getElementById('radios-136').checked = true" />
        </label>
        </td>
        <td>

  </tr>
  </table>
<center><h4>Resumo de Principais Constatacoes por area de Servico</h4></center>
<br>
  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-2 control-label" for="textarea">SAUDE</label>
    <div class="col-md-10">
      <textarea class="form-control" id="textarea" name="resumo_saude" placeholder="SAUDE" value="<?php echo $saude; ?>" ><?php echo $saude; ?></textarea>
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-2 control-label" for="textarea">ALIMENTACAO E NUTRICAO</label>
    <div class="col-md-10">
      <textarea class="form-control" id="textarea" name="resumo_aliment_nutricao" placeholder="ALIMENTACAO E NUTRICAO" value="<?php echo $aliment_nutricao; ?>" ><?php echo $aliment_nutricao; ?></textarea>
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-2 control-label" for="textarea">EDUCACAO</label>
    <div class="col-md-10">
      <textarea class="form-control" id="textarea" name="resumo_educacao" placeholder="EDUCACAO" value="<?php echo $educacao; ?>" ><?php echo $educacao; ?></textarea>
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-2 control-label" for="textarea">PROTECAO E APOIO LEGAL</label>
    <div class="col-md-10">
      <textarea class="form-control" id="textarea" name="resumo_protecao" placeholder="PROTECAO E APOIO LEGAL" value="<?php echo $protecao_legal; ?>" ><?php echo $protecao_legal; ?></textarea>
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-2 control-label" for="textarea">HABITCAO</label>
    <div class="col-md-10">
      <textarea class="form-control" id="textarea" name="resumo_habitcao" placeholder="HABITCAO" value="<?php echo $habitacao; ?>" ><?php echo $habitacao; ?></textarea>
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-2 control-label" for="textarea">APOIO PSIICOSOOCIAL</label>
    <div class="col-md-10">
      <textarea class="form-control" id="textarea" name="resumo_apoio" placeholder="APOIO PSIICOSOOCIAL" value="<?php echo $apoio_social; ?>" ><?php echo $apoio_social; ?></textarea>
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-2 control-label" for="textarea">FORTALECIMENTO</label>
    <div class="col-md-10">
      <textarea class="form-control" id="textarea" name="resumo_fortal" placeholder="FORTALECIMENTO" value="<?php echo $fort_economico; ?>" ><?php echo $fort_economico; ?></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-2">

    </div>
    <label class="col-md-4 control-label" for="textarea"><h5>Plano de Acao para cuidados desenvolvidos:</h5></label>

    <input type='radio' name='gender' value="nao aplicavel" class="hide" >

    <div class="col-md-4">
      <label class="radio-inline" for="radios-200">
    <input type="radio" name="rds" id="radios-200" value="Sim" <?php if ($rds == 'Sim') echo 'checked="checked"'; ?>>
    Sim
  </label>
  <label class="radio-inline" for="radios-201">
  <input type="radio" name="rds" id="radios-201" value="Nao" <?php if ($rds == 'Nao') echo 'checked="checked"'; ?>  >
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

<button type="submit" class="btn btn-primary" name="btn-update">
<span class="glyphicon glyphicon-plus"></span> Atualizar
</button>
<a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Retornar ao dashboard</a>





</form>




</div>
<br>
<br>


</div>
