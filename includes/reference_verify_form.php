
              <tr>
                <td style="border-top: none;">  <input type='hidden' name='codBen'class='form-control' value=' <?php print($row['benificiario_id']); ?>'   >  </td>

                  <td style="border-top: none;">Codigo de Beneficiario:</td>
                  <td style="border-top: none;"> <h4><?php print($row['cod_beneficiario']); ?> </h4></td>

              </tr>

        <tr>

            <td style="border-top: none;">Nome Completo:</td>
            <td style="border-top: none;">  <input type='text' name='nome'class='form-control' value='<?php print($row['nome']); ?>' >  </td>

            <td style="border-top: none;">Idade:</td>
            <td style="border-top: none;">  <input type='number' name='idade' class='form-control' value='<?php print($row['idade']); ?>' >  </td>

            <td style="border-top: none;">Data de Nascimento:</td>
            <td style="border-top: none;">  <input type='date' name='dtaNasc' class='form-control' value='<?php print($row['data_Nasc']); ?>' >  </td>

        </tr>

        <tr>
            <td style="border-top: none;">Genero:</td>
            <td style="border-top: none;"><select id="selectbasic" name='sexo' class="form-control">
               <option value='<?php print($row['sexo']); ?>'><?php print($row['sexo']); ?></option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
             </td>
             <td style="border-top: none;">Contacto:</td>
             <td style="border-top: none;">  <input type='text' name='contacto' class='form-control' value='<?php print($row['Contato']); ?>' >  </td>


             <td style="border-top: none;">Bairro:</td>
             <td style="border-top: none;">  <input type='text' name='bairro' class='form-control' value='<?php print($row['bairro']); ?>' >  </td>

        </tr>

  <tr>

              <td style="border-top: none;">Referido para:</td>
                <td style="border-top: none;">  <input type='text' name='referido1' class='form-control' >  </td>

            <td style="border-top: none;">Data:</td>
            <td style="border-top: none;">  <input type='date' name='data1' class='form-control' >  </td>


            <td style="border-top: none;">Contra-referencia Recebida:</td>
            <td style="border-top: none;">  <input type='text' name='contrRecebida' class='form-control' >  </td>
  </tr>

        <tr>
            <td style="border-top: none;">Data:</td>
            <td style="border-top: none;">  <input type='date' name='data2' class='form-control' >  </td>


            <td style="border-top: none;">Referido Por:</td>
            <td style="border-top: none;">  <input type='text' name='referido2' class='form-control' >  </td>

            <td style="border-top: none;">Funcao:</td>
            <td style="border-top: none;">  <input type='text' name='funcao' class='form-control' >  </td>
        </tr>

        <tr>
          <td style="border-top: none;">Contacto:</td>
          <td style="border-top: none;">  <input type='text' name='contacto1' class='form-control' >  </td>

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
        <tr>
          <tr>
              <td style="border-top: none;" colspan="2">
              <button type="submit" class="btn btn-primary" name="btn-save">
              <span class="glyphicon glyphicon-plus"></span> Submeter
              </button>
              <a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Retornar ao dashboard</a>
                </td>
          </tr>

        </tr>
