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


	$originalDate = $dataNasc;
	$newDate = date("mm/dd/yyyy", strtotime($originalDate));
	$newDate = explode("/", $newDate);
	$idade = (date("md", date("U", mktime(0, 0, 0, $newDate[0], $newDate[1], $newDate[2]))) > date("md")
	? ((date("Y") - $newDate[2]) - 1)
	: (date("Y") - $newDate[2]));




	$Naturalidade = $_POST['Naturalidade'];
	$N_Ident = $_POST['N_Ident'];
	$T_Ident= $_POST['T_Ident'];
	$provinciaAtual = $_POST['provincia'];
	$destrito = $_POST['distrito'];
	$postAdmin = $_POST['postAdmin'];
	$localidade = $_POST['localidade'];
	$Bairro = $_POST['Bairro'];
	$Quarterao = $_POST['Quarterao'];
	$pontReferencia = $_POST['pontReferencia'];
	$Contacto = $_POST['Contacto'];

	$Estudante;
        if($_POST['Estudante'] == "Sim"){$Estudante = 1;}
        if($_POST['Estudante'] == "Nao"){$Estudante = 0;}

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
		header("Location: reg_ben.php?inserted");
	}

	else

	{
		header("Location: reg_ben.php?failure");


	}

}


?>
