<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))

{

$benificiario_id = $_POST['codBen'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cd_ident = $_POST['N_Ident'];
$nome_cuidador = $_POST['cuidador'];
$sexo = $_POST['sexo'];
$provincia = $_POST['provincia'];
$nome_voluntario = $_POST['vuluntario'];
$nome_lider = $_POST['lider'];
$nome_ocb = $_POST['ocb'];
$destrito	 = $_POST['destrito'];
$hiv = $_POST['hiv'];
$tarv = $_POST['tarv'];
$situacao_crianca = $_POST['situacao_crianca'];


$saude_1 = $_POST['A'];
$saude_2 = $_POST['B'];
$saude_3 = $_POST['C'];
$saude_4 = $_POST['D'];
$saude_5 = $_POST['E'];
$saude_6 = $_POST['F'];
$saude_7 = $_POST['G'];

$alimentacao_nutricao_8 = $_POST['H'];
$alimentacao_nutricao_9 = $_POST['I'];

$educacao_10 = $_POST['J'];
$educacao_11 = $_POST['K'];
$educacao_12	 = $_POST['L'];
$educacao_13 = $_POST['M'];
$educacao_14 = $_POST['N'];
$educacao_15 = $_POST['O'];
$educacao_16 = $_POST['P'];
$educacao_17 = $_POST['Q'];

$protecao_apoio_18 = $_POST['R'];
$protecao_apoio_19 = $_POST['S'];
$protecao_apoio_20 = $_POST['T'];
$protecao_apoio_21 = $_POST['U'];

$habitacao_22 = $_POST['V'];

$apoio_social_23 = $_POST['W'];
$apoio_social_24 = $_POST['Y'];
$apoio_social_25 = $_POST['X'];
$apoio_social_26 = $_POST['Z'];
$apoio_social_27 = $_POST['A1'];
$apoio_social_28 = $_POST['B1'];
$apoio_social_29 = $_POST['C1'];
$apoio_social_30 = $_POST['D1'];
$apoio_social_31 = $_POST['E1'];

$fort_economico_32 = $_POST['F1'];
$fort_economico_33 = $_POST['G1'];

$saude = $_POST['resumo_saude'];
$aliment_nutricao = $_POST['resumo_aliment_nutricao'];
$educacao = $_POST['resumo_educacao'];
$protecao_legal = $_POST['resumo_protecao'];
$habitacao = $_POST['resumo_habitcao'];
$apoio_social = $_POST['resumo_apoio'];
$fort_economico = $_POST['resumo_fortal'];
$rds = $_POST['rds'];



// $plano_acao = $_POST['resumo_plano'];







	if($crud->createMAC($benificiario_id,$nome,$idade,$cd_ident,$nome_cuidador,$sexo,$provincia,$nome_voluntario,$nome_lider,$nome_ocb,$destrito,$hiv,$tarv,$situacao_crianca,
											$saude_1,$saude_2,$saude_3,$saude_4,$saude_5,$saude_6,$saude_7,$alimentacao_nutricao_8,$alimentacao_nutricao_9,$educacao_10,$educacao_11,$educacao_12,$educacao_13,$educacao_14,$educacao_15,$educacao_16,
											$educacao_17,$protecao_apoio_18,$protecao_apoio_19,$protecao_apoio_20,$protecao_apoio_21,$habitacao_22,$apoio_social_23,$apoio_social_24,$apoio_social_25,$apoio_social_26,
											$apoio_social_27,$apoio_social_28,$apoio_social_29,$apoio_social_30,$apoio_social_31,$fort_economico_32,$fort_economico_33,$saude,$aliment_nutricao,$educacao,$protecao_legal,
											$habitacao,$apoio_social,$fort_economico,$rds))


	{
		header("Location: MAC.php?inserted");
	}

	else

	{
		header("Location: MAC.php?failure");
	}

}


 ?>
