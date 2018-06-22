  <div class="container">
    <br><br>
    <a href="referenc_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>

  <br>
    <br>

	 <form method='post'>

    <table class='table table-bordered'>

      <tr>
        <td style="border-top: none;">  <input type='text' name='codBen'class='form-control' value="<?php echo $benificiario_id; ?>">  </td>

          <td style="border-top: none;">Codigo de Beneficiario:</td>
          <td style="border-top: none;"></td>

      </tr>

<tr>

    <td style="border-top: none;">Nome Completo:</td>
    <td style="border-top: none;">  <input type='text' name='nome'class='form-control' value="<?php echo $nome; ?>" >  </td>

    <td style="border-top: none;">Idade:</td>
    <td style="border-top: none;">  <input type='number' name='idade' class='form-control' value="<?php echo $idade; ?>"  >  </td>

    <td style="border-top: none;">Data de Nascimento:</td>
    <td style="border-top: none;">  <input type='date' name='dtaNasc' class='form-control' value="<?php echo $dataNasc; ?>" >  </td>

</tr>

<tr>
    <td style="border-top: none;">Genero:</td>
    <td style="border-top: none;"><select id="selectbasic" name='sexo' class="form-control">
        <option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
      </select>
     </td>
     <td style="border-top: none;">Contacto:</td>
     <td style="border-top: none;">  <input type='text' name='contacto' class='form-control' value="<?php echo $contacto; ?>" >   </td>


     <td style="border-top: none;">Bairro:</td>
     <td style="border-top: none;">  <input type='text' name='bairro' class='form-control' value="<?php echo $bairo; ?>" >  </td>

</tr>

<tr>

      <td style="border-top: none;">Referido para:</td>
        <td style="border-top: none;">  <input type='text' name='referido1' class='form-control' value="<?php echo $referido1; ?>"  >  </td>

    <td style="border-top: none;">Data:</td>
    <td style="border-top: none;">  <input type='date' name='data1' class='form-control' value="<?php echo $data1; ?>"  >  </td>


    <td style="border-top: none;">Contra-referencia Recebida:</td>
    <td style="border-top: none;">  <input type='text' name='contrRecebida' class='form-control' value="<?php echo $contrRecebida; ?>"  >  </td>
</tr>

<tr>
    <td style="border-top: none;">Data:</td>
    <td style="border-top: none;">  <input type='date' name='data2' class='form-control' value="<?php echo $data2; ?>" >  </td>


    <td style="border-top: none;">Referido Por:</td>
    <td style="border-top: none;">  <input type='text' name='referido2' class='form-control' value="<?php echo $referido2; ?>"  >  </td>

    <td style="border-top: none;">Funcao:</td>
    <td style="border-top: none;">  <input type='text' name='funcao' class='form-control' value="<?php echo $funcao; ?>" >  </td>
</tr>

<tr>
  <td style="border-top: none;">Contacto:</td>
  <td style="border-top: none;">  <input type='text' name='contacto1' class='form-control' value="<?php echo $contacto1; ?>">  </td>

  <td style="border-top: none;">Nome da OCB:</td>
  <td style="border-top: none;">  <input type='text' name='ocb' class='form-control' value="<?php echo $ocb; ?>"  >  </td>
</tr>
<tr>
  <tr>
      <td style="border-top: none;" colspan="2">
      <button type="submit" class="btn btn-primary" name="btn-update">
      <span class="glyphicon glyphicon-edit"></span> Atualizar
      </button>
      <a href="dashboard.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Retornar ao dashboard</a>
        </td>
  </tr>

</tr>


    </table>
</form>


</div>
