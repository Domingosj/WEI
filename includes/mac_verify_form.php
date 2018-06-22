
<tr>
    <td style="border-top: none;">  <input type='hidden' name='codBen'class='form-control' value=' <?php print($row['benificiario_id']); ?>'   >  </td>
</tr>

<tr>


    <td style="border-top: none;">Nome Completo:</td>
    <td style="border-top: none;">  <input type='text' name='nome'class='form-control' value=' <?php print($row['nome']); ?>'   >  </td>

    <td style="border-top: none;">Idade:</td>
    <td style="border-top: none;">  <input type='number' name='idade' class='form-control' value='<?php print($row['idade']); ?>'  >  </td>

    <td style="border-top: none;">Numero de Identificacao:</td>
    <td style="border-top: none;">  <input type='text' name='N_Ident' class='form-control' value='<?php print($row['num_Identificacao']); ?>' </td>

</tr>

<tr>
    <td style="border-top: none;">Nome Cuidador:</td>
    <td style="border-top: none;">  <input type='text' name='cuidador' class='form-control'  >  </td>

    <td style="border-top: none;">Sexo:</td>
    <td style="border-top: none;"><select id="selectbasic" name='sexo' class="form-control">
       <option value='<?php print($row['sexo']); ?>'><?php print($row['sexo']); ?></option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
      </select>
     </td>

     <td style="border-top: none;">Provincia Atual:</td>
     <td style="border-top: none;">    <select id="selectbasic" name='provincia' class="form-control">
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
       </select>  </td>
</tr>

<tr>

      <td style="border-top: none;">Nome do Vuluntario:</td>
        <td style="border-top: none;">  <input type='text' name='vuluntario' class='form-control' >  </td>

    <td style="border-top: none;">Nome Lider Comunitario:</td>
    <td style="border-top: none;">  <input type='text' name='lider' class='form-control' >  </td>


    <td style="border-top: none;">Nome da OCB:</td>
    <td style="border-top: none;">
    <select name='ocb' class="form-control">
     <option value="0"></option>
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
   </td>
</tr>

    <td style="border-top: none;">Destrito:</td>
    <td style="border-top: none;">  <input type='text' name='destrito' class='form-control' value='<?php print($row['destrito']); ?>' >  </td>

    <td style="border-top: none;">A crianca tem HIV:</td>
    <td style="border-top: none;"><select id="selectbasic" name='hiv' class="form-control">

       <option value='<?php print($row['resultado']); ?>'><?php print($row['resultado']); ?></option>
        <option value="Posetivo">Posetivo</option>
        <option value="Negativo">Negativo</option>
        <option value="desconhecido">Desconhecido</option>
      </select>
     </td>
     <td style="border-top: none;">Se sim, em tratamento tarv:</td>
    <td style="border-top: none;"><select id="selectbasic" name='tarv' class="form-control">
       <option value='<?php print($row['em_tratamento_tarv']); ?>'><?php print($row['em_tratamento_tarv']); ?></option>
        <option value="Sim">Sim</option>
        <option value="Nao">Nao</option>

      </select>
     </td>
</tr>



<tr>
  <td style="border-top: none;">Orfao de:</td>
 <td style="border-top: none;"><select id="selectbasic" name='situacao_crianca' class="form-control">
    <option value='<?php print($row['orfao_de']);?>'><?php print($row['orfao_de']);?></option>
     <option value="0">Pai</option>
     <option value="1">Mae</option>
        <option value="2">Ambos</option>
   </select>
  </td>

</tr>
