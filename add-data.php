<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{


	$cdInquiridor = $_POST['cdInquiridor'];
	$cdAgregado = $_POST['cdAgregado'];
	$cdBeneficiario = $_POST['cdBeneficiario'];
	$nome = $_POST['nome'];
	$dataNasc = $_POST['dataNasc'];
	$sexo = $_POST['sexo'];
	$idade = $_POST['idade'];
	$Naturalidade = $_POST['Naturalidade'];
	$N_Ident = $_POST['N_Ident'];
	$T_Ident= $_POST['T_Ident'];
	$provinciaAtual = $_POST['provincia'];
	$destrito = $_POST['destrito'];
	$postAdmin = $_POST['postAdmin'];
	$localidade = $_POST['localidade'];
	$Bairro = $_POST['Bairro'];
	$Quarterao = $_POST['Quarterao'];
	$pontReferencia = $_POST['pontReferencia'];
	$Contacto = $_POST['Contacto'];
	$Estudante = $_POST['Estudante'];
	$nomEscola = $_POST['nomEscola'];
	$classe = $_POST['classe'];
	$turma = $_POST['turma'];
	$numero = $_POST['numero'];
	$Senaoporque = $_POST['Senaoporque'];
	$ultimoAno = $_POST['ultimoAno'];
	$UltEscola = $_POST['UltEscola'];
	$texteHIV = $_POST['texteHIV'];
	$Compartilhar = $_POST['Compartilhar'];
	$resultado = $_POST['resultado'];
	$dataTexte = $_POST['dataTexte'];
	$Tarv = $_POST['Tarv'];
	$orfao =  $_POST['orfao'];
	$chefe = $_POST['chefe'];
	$situacaoHabt = $_POST['situacaoHabt'];
	$tipoHabt = $_POST['tipoHabt'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$historico = $_POST['historico'];
	$observacao = $_POST['observacao'];
	$prenchido = $_POST['prenchido'];
	$funcao = $_POST['funcao'];
	$cbo = $_POST['cbo'];
	$NomePogram = $_POST['NomePogram'];
	$outros = $_POST['outros'];
	$Scontacto = $_POST['Scontacto'];
	$Sdata = $_POST['Sdata'];
	$NomeTecnico = $_POST['NomeTecnico'];
	$Posicao = $_POST['Posicao'];
	$TContacto = $_POST['TContacto'];
	$DataV = $_POST['DataV'];



	if($crud->create($cdInquiridor,$cdAgregado,$cdBeneficiario,$nome,$dataNasc,$sexo,$idade,$Naturalidade,$N_Ident,$T_Ident,
	$provinciaAtual,$destrito,$postAdmin,$localidade,$Bairro,$Quarterao,$pontReferencia,$Contacto,$Estudante,$nomEscola,
	$classe,$turma,$numero,$Senaoporque,$ultimoAno,$UltEscola,$texteHIV,$Compartilhar,$resultado,$dataTexte,$Tarv,$orfao,$chefe,$situacaoHabt,
	$tipoHabt,$latitude,$longitude,$historico,$observacao,$prenchido,$funcao,$cbo,$NomePogram,$outros,$Scontacto,$Sdata,
	$NomeTecnico,$Posicao,$TContacto,$DataV))
	{
		header("Location: add-data.php?inserted");
	}
	else
	{
		header("Location: add-data.php?failure");
	}
}
?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>



<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>WOW!</strong> Record was inserted successfully <a href="index.php">HOME</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
	</div>
	</div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">


	 <form method='post'>

    <table class='table table-bordered'>

        <tr>
            <td>First Name</td>
            <td><input type='text' name='first_name' class='form-control' required></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td><input type='text' name='last_name' class='form-control' required></td>
        </tr>

        <tr>
            <td>Your E-mail ID</td>
            <td><input type='text' name='email_id' class='form-control' required></td>
        </tr>

        <tr>
            <td>Contact No</td>
            <td><input type='text' name='contact_no' class='form-control' required></td>
        </tr>

        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Create New Record
			</button>
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
            </td>
        </tr>

    </table>
</form>


</div>

<?php include_once 'footer.php'; ?>
