<tr>
  <td style="border-top: none;">  <input type='hidden' name='codBen'class='form-control' value=' <?php print($row['benificiario_id']); ?>'   >  </td>


  </tr>

  <tr>
    <td style="border-top: none;">Provincia:</td>
    <td style="border-top: none;">    <select id="selectbasic" name='provincia' class="form-control">
      <option value=""></option>
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

      <td style="border-top: none;">Destrito:</td>
      <td style="border-top: none;">
        <select id="nivel" name='distrito' class="form-control">
        <option value="0"></option>
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
        </select>    </td>

      <td style="border-top: none;">Localidade:</td>
      <td style="border-top: none;">  <input type='text' name='localidade' class='form-control' >  </td>

  </tr>

  <tr>
      <td style="border-top: none;">Bairro:</td>
      <td style="border-top: none;">  <input type='text' name='bairro' class='form-control' >  </td>

      <td style="border-top: none;">Mes/Ano:</td>
      <td style="border-top: none;">  <input type='date' name='data' class='form-control' >  </td>

      <td style="border-top: none;">Nome do Activista:</td>
      <td style="border-top: none;">  <input type='text' name='actvista' class='form-control' >  </td>
  </tr>

<tr>

        <td style="border-top: none;">Verificacao e assinatura de supervisor:</td>
        <td style="border-top: none;">  <input type='text' name='supervisor' class='form-control' >  </td>

        <td style="border-top: none;">Nome da CBO:</td>
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


      <td style="border-top: none;">Nome Completo da Crianca:</td>
      <td style="border-top: none;">  <input type='text' name='nome' class='form-control' value=' <?php print($row['nome']); ?>' >  </td>

      <td style="border-top: none;">Entro neste Mes:</td>
      <td style="border-top: none;">

          <div class="form-group">
            <input type="radio" name="A" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >

            <label class="radio-inline" for="radios-1">
              <input type="radio"   class="radio" name="A" id="radios-1" value="Sim">
             Sim
            </label>
            <label class="radio-inline" for="radios-2">
              <input type="radio"  class="radio" name="A" id="radios-2" value="Nao">
              Nao
            </label>
          </div>


       </td>
       <td style="border-top: none;">Codigo de Agregado Familiar:</td>
       <td style="border-top: none;">  <input type='text' name='cd_agreg' class='form-control' value=' <?php print($row['cod_agregado']); ?>' >  </td>
  </tr>

  <tr>
    <td style="border-top: none;">Idade:</td>
    <td style="border-top: none;">  <input type='text' name='idade' class='form-control' value=' <?php print($row['idade']); ?>' >  </td>

    <td style="border-top: none;">Sexo:</td>
    <td style="border-top: none;">

        <div class="form-group">

            <input type="radio"  name="B" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


          <label class="radio-inline" for="radios-3">
            <input type="radio"  class="radio" name="B" id="radios-3" value="M">
           M
          </label>
          <label class="radio-inline" for="radios-21">
            <input type="radio"  class="radio" name="B" id="radios-21" value="F">
          F
          </label>
        </div>


     </td>
     <td style="border-top: none;">Alimentacao:</td>
     <td style="border-top: none;">

         <div class="form-group">

             <input type="radio"  name="C" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


           <label class="radio-inline" for="radios-5">
             <input type="radio" class="radio"  name="C" id="radios-5" value="N">
            N
           </label>
           <label class="radio-inline" for="radios-6">
             <input type="radio"  class="radio" name="C" id="radios-6" value="R">
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


          <label class="radio-inline" for="radios-7">
            <input type="radio"  class="radio" name="D" id="radios-7" value="N">
           N
          </label>
          <label class="radio-inline" for="radios-8">
            <input type="radio"  class="radio" name="D" id="radios-8" value="R">
           R
          </label>
        </div>


     </td>

    <td style="border-top: none;">AJuda Legal:</td>
    <td style="border-top: none;">

        <div class="form-group">

            <input type="radio"  name="E" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


          <label class="radio-inline" for="radios-20">
            <input type="radio" class="radio" name="E" id="radios-20" value="N">
           N
          </label>
          <label class="radio-inline" for="radios-9">
            <input type="radio" class="radio" name="E" id="radios-9" value="R">
           R
          </label>
        </div>


     </td>
     <td style="border-top: none;">Saude:</td>
     <td style="border-top: none;">

         <div class="form-group">

             <input type="radio" name="F" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


           <label class="radio-inline" for="radios-10">
             <input type="radio" class="radio" name="F" id="radios-10" value="N">
            N
           </label>
           <label class="radio-inline" for="radios-11">
             <input type="radio" class="radio" name="F" id="radios-11" value="R">
            R
           </label>
         </div>


      </td>
  </tr>
  <tr>
    <td style="border-top: none;">Apoio Psico-Social:</td>
    <td style="border-top: none;">

        <div class="form-group">

            <input type="radio" name="G" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


          <label class="radio-inline" for="radios-12">
            <input type="radio" class="radio" name="G" id="radios-12" value="N">
           N
          </label>
          <label class="radio-inline" for="radios-13">
            <input type="radio" class="radio" name="G" id="radios-13" value="R">
           R
          </label>
        </div>


     </td>

    <td style="border-top: none;">Apoio Financeiro:</td>
    <td style="border-top: none;">

        <div class="form-group">

            <input type="radio" name="H" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


          <label class="radio-inline" for="radios-14">
            <input type="radio" class="radio" name="H" id="radios-14" value="N">
           N
          </label>
          <label class="radio-inline" for="radios-15">
            <input type="radio" class="radio" name="H" id="radios-15" value="R">
           R
          </label>
        </div>


     </td>
     <td style="border-top: none;">Apoio Habitacional:</td>
     <td style="border-top: none;">

         <div class="form-group">

             <input type="radio"  name="I" id="radios-4" value="Nao aplicavel" checked="checked" class="hide" >


           <label class="radio-inline" for="radios-16">
             <input type="radio" class="radio"  class="radio" name="I" id="radios-16" value="N">
            N
           </label>
           <label class="radio-inline" for="radios-17">
             <input type="radio" class="radio"  class="radio" name="I" id="radios-17" value="R">
            R
           </label>
         </div>


      </td>
  </tr>
  <tr>
    <td style="border-top: none;">Data de Visita Para a crianca:</td>
    <td style="border-top: none;">  <input type='date' name='data1' class='form-control' >  </td>
  </tr>

  <tr>
      <td style="border-top: none;" colspan="2">
      <button type="submit" class="btn btn-primary" name="btn-save">
      <span class="glyphicon glyphicon-plus"></span> Submeter
      </button>
      <a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Retornar ao dashboard</a>
        </td>
  </tr>
