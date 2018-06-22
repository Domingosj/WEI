
<div class="container">
<br>
<br>
<a href="servicos_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>
<br><br>
 <form method='post'>

  <table class='table table-bordered'>



<tr>
  <td style="border-top: none;">  <input type='hidden' name='codBen'class='form-control'  >  </td>


  </tr>

    <td style="border-top: none;">Provincia:</td>
    <td style="border-top: none;">    <select id="selectbasic" name='provincia' class="form-control">
      <option value="<?php echo $provincia; ?>"><?php echo $provincia; ?></option>
        <option value="Maputo">Maputo</option>
        <option value="Maputo">Maputo (cidade)</option>
        <option value="Gaza">Gaza</option>
        <option value="Inhambane">Inhambane</option>
        <option value="Manica">Manica</option>
        <option value="Sofala">Sofala</option>
        <option value="Tete">Tete</option>
        <option value="Zambezia">Zambezia</option>
        <option value="Niassa">Niassa</option>
        <option value="Nampula">Nampula</option>
        <option value="Cabo Delgado">Cabo Delgado</option>
      </select>  </td>

      <td style="border-top: none;">Destrito         :</td>
      <td style="border-top: none;">  <input type='text' name='destrito' class='form-control' value="<?php echo $destrito; ?>" >  </td>

      <td style="border-top: none;">Localidade:</td>
      <td style="border-top: none;">  <input type='text' name='localidade' class='form-control' value="<?php echo $localidade; ?>" >  </td>

  </tr>

  <tr>
      <td style="border-top: none;">Bairro:</td>
      <td style="border-top: none;">  <input type='text' name='bairro' class='form-control' value="<?php echo $bairro; ?>" >  </td>

      <td style="border-top: none;">Mes/Ano:</td>
      <td style="border-top: none;">  <input type='date' name='data' class='form-control' value="<?php echo $data; ?>" >  </td>

      <td style="border-top: none;">Nome do Activista:</td>
      <td style="border-top: none;">  <input type='text' name='actvista' class='form-control' value="<?php echo $actvista; ?>">  </td>
  </tr>

<tr>

        <td style="border-top: none;">Verificacao e assinatura de supervisor:</td>
          <td style="border-top: none;">  <input type='text' name='supervisor' class='form-control'value="<?php echo $supervisor; ?>">  </td>

</tr>
      <td style="border-top: none;">Nome Completo da Crianca:</td>
      <td style="border-top: none;">  <input type='text' name='nome' class='form-control' value="<?php echo $nome; ?>">  </td>

      <td style="border-top: none;">Entro neste Mes:</td>
      <td style="border-top: none;">

          <div class="form-group">


            <label class="radio-inline" for="radios-1">
              <input type="radio" class="radio"  name="A" id="radios-5" value="Sim" <?php if ($mes=='Sim') echo 'checked="checked"'; ?>>
             Sim
            </label>
            <label class="radio-inline" for="radios-2">
              <input type="radio"  class="radio" name="A" id="radios-6" value="Nao" <?php if ($mes=='Nao') echo 'checked="checked"'; ?>>
             Nao
            </label>
          </div>


       </td>
       <td style="border-top: none;">Codigo de Agregado Familiar:</td>
       <td style="border-top: none;">  <input type='text' name='cd_agreg' class='form-control' value="<?php echo $cd_agreg; ?>" >  </td>
  </tr>

  <tr>
    <td style="border-top: none;">Idade:</td>
    <td style="border-top: none;">  <input type='text' name='idade' class='form-control' value="<?php echo $idade; ?>" >  </td>

    <td style="border-top: none;">Sexo:</td>
    <td style="border-top: none;">

        <div class="form-group">

            <input type="radio"  name="B" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >

          <label class="radio-inline" for="radios-1">
            <input type="radio"  class="radio" name="B" id="radios-5" value="M" <?php if ($sexo=='M') echo 'checked="checked"'; ?> >
           M
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio"  class="radio" name="B" id="radios-6" value="F" <?php if ($sexo=='F') echo 'checked="checked"'; ?>>
          F
          </label>
        </div>


     </td>
     <td style="border-top: none;">Alimentacao:</td>
     <td style="border-top: none;">

         <div class="form-group">

             <input type="radio"  name="C" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


           <label class="radio-inline" for="radios-1">
             <input type="radio" class="radio"  name="C" id="radios-5" value="N" <?php if ($alimentacao == 'N') echo 'checked="checked"'; ?>>
            N
           </label>
           <label class="radio-inline" for="radios-2">
             <input type="radio"  class="radio" name="C" id="radios-6" value="R" <?php if ($alimentacao == 'R') echo 'checked="checked"'; ?>>
            R
           </label>
         </div>


      </td>
  </tr>
  <tr>
    <td style="border-top: none;">Educacao:</td>
    <td style="border-top: none;">

        <div class="form-group">

            <input type="radio"  name="D" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


          <label class="radio-inline" for="radios-1">
            <input type="radio"  class="radio" name="D" id="radios-5" value="N" <?php if ($educacao == 'N') echo 'checked="checked"'; ?>>
           N
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio"  class="radio" name="D" id="radios-6" value="R" <?php if ($educacao == 'R') echo 'checked="checked"'; ?>>
           R
          </label>
        </div>


     </td>

    <td style="border-top: none;">AJuda Legal:</td>
    <td style="border-top: none;">

        <div class="form-group">

            <input type="radio"  name="E" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="E" id="radios-5" value="N" <?php if ($ajuda_legal == 'N') echo 'checked="checked"'; ?>>
           N
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="E" id="radios-6" value="R" <?php if ($ajuda_legal == 'R') echo 'checked="checked"'; ?>>
           R
          </label>
        </div>


     </td>
     <td style="border-top: none;">Saude:</td>
     <td style="border-top: none;">

         <div class="form-group">

             <input type="radio" name="F" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


           <label class="radio-inline" for="radios-1">
             <input type="radio" class="radio" name="F" id="radios-5" value="N" <?php if ($saude == 'N') echo 'checked="checked"'; ?>>
            N
           </label>
           <label class="radio-inline" for="radios-2">
             <input type="radio" class="radio" name="F" id="radios-6" value="R" <?php if ($saude == 'R') echo 'checked="checked"'; ?>>
            R
           </label>
         </div>


      </td>
  </tr>
  <tr>
    <td style="border-top: none;">Apoio Psico-Social:</td>
    <td style="border-top: none;">

        <div class="form-group">

            <input type="radio" name="G" id="radios-4" value="Nao aplicavel" checked="checked" class="hide"  >

          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="G" id="radios-5" value="N" <?php if ($Psico_Social == 'N') echo 'checked="checked"'; ?>>
           N
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="G" id="radios-6" value="R" <?php if ($Psico_Social == 'R') echo 'checked="checked"'; ?>>
           R
          </label>
        </div>


     </td>

    <td style="border-top: none;">Apoio Financeiro:</td>
    <td style="border-top: none;">

        <div class="form-group">

            <input type="radio" name="H" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


          <label class="radio-inline" for="radios-1">
            <input type="radio" class="radio" name="H" id="radios-5" value="N" <?php if ($apoio_financeiro == 'N') echo 'checked="checked"'; ?>>
           N
          </label>
          <label class="radio-inline" for="radios-2">
            <input type="radio" class="radio" name="H" id="radios-6" value="R" <?php if ($apoio_financeiro == 'R') echo 'checked="checked"'; ?>>
           R
          </label>
        </div>


     </td>
     <td style="border-top: none;">Apoio Habitacional:</td>
     <td style="border-top: none;">

         <div class="form-group">

             <input type="radio"  name="I" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


           <label class="radio-inline" for="radios-1">
             <input type="radio" class="radio"  class="radio" name="I" id="radios-5" value="N" <?php if ($apoio_habitacional == 'N') echo 'checked="checked"'; ?>>
            N
           </label>
           <label class="radio-inline" for="radios-2">
             <input type="radio" class="radio"  class="radio" name="I" id="radios-6" value="R" <?php if ($apoio_habitacional == 'R') echo 'checked="checked"'; ?>>
            R
           </label>
         </div>


      </td>
  </tr>
  <tr>
    <td style="border-top: none;">Data de Visita Para a crianca:</td>
    <td style="border-top: none;">  <input type='date' name='data1' class='form-control' value="<?php echo $data1; ?>"  >  </td>
  </tr>

  <tr>
      <td style="border-top: none;" colspan="2">
      <button type="submit" class="btn btn-primary" name="btn-update">
      <span class="glyphicon glyphicon-edit"></span> Atualizar
      </button>
      <a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Retornar ao dashboard</a>
        </td>
  </tr>

</table>

</form>
</div>
