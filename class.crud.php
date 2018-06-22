<?php



class crud
{
	private $db;

	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}

public function macview($query)
{
	$stmt = $this->db->prepare($query);
	$stmt->execute();

	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>


							<tr>
							<td><?php print($row['saude']); ?></td>
							<td><?php print($row['aliment_nutricao']); ?></td>
							<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['educacao']); ?></a> </td>
							<td><?php print($row['protecao_legal']); ?></td>
							<td><?php print($row['habitacao']); ?></td>
							<td><?php print($row['apoio_social']); ?></td>
							<td><?php print($row['fort_economico']); ?></td>
						<td><?php print($row['fort_economico']); ?></td>

							<td align="center">

							<a href="edit-data.php?edit_id=<?php print($row['benificiario_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
							<td align="center">
							<a href="delete.php?delete_id=<?php print($row['benificiario_id']); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
							</td>
							</tr>
							<?php
		}
	}
	else
	{
		?>
					<tr>
					<td>Sem nenhum resultado...</td>
					</tr>
					<?php
	}

}


	public function createMAC($data_digitacao,$benificiario_id,$nome,$idade,$cd_ident,$nome_cuidador,$sexo,$provincia,$nome_voluntario,$nome_lider,$nome_ocb,$destrito,$hiv,$tarv,$situacao_crianca,$dataAval,
											$saude_1,$saude_2,$saude_3,$saude_4,$saude_5,$saude_6,$saude_7,$alimentacao_nutricao_8,$alimentacao_nutricao_9,$educacao_10,$educacao_11,$educacao_12,$educacao_13,$educacao_14,$educacao_15,$educacao_16,
											$educacao_17,$protecao_apoio_18,$protecao_apoio_19,$protecao_apoio_20,$protecao_apoio_21,$habitacao_22,$apoio_social_23,$apoio_social_24,$apoio_social_25,$apoio_social_26,
											$apoio_social_27,$apoio_social_28,$apoio_social_29,$apoio_social_30,$apoio_social_31,$fort_economico_32,$fort_economico_33,$saude,$aliment_nutricao,$educacao,$protecao_legal,
											$habitacao,$apoio_social,$fort_economico,$plano_acao)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO mac(data_digitacao,benificiario_id,nome,idade,cd_ident,nome_cuidador,sexo,provincia,nome_voluntario,nome_lider,nome_ocb,destrito,hiv,tarv,situacao_crianca,dataAval,
													saude_1,saude_2,saude_3,saude_4,saude_5,saude_6,saude_7,alimentacao_nutricao_8,alimentacao_nutricao_9,educacao_10,educacao_11,educacao_12,educacao_13,educacao_14,educacao_15,educacao_16,
													educacao_17,protecao_apoio_18,protecao_apoio_19,protecao_apoio_20,protecao_apoio_21,habitacao_22,apoio_social_23,apoio_social_24,apoio_social_25,apoio_social_26,
													apoio_social_27,apoio_social_28,apoio_social_29,apoio_social_30,apoio_social_31,fort_economico_32,fort_economico_33,saude,aliment_nutricao,educacao,protecao_legal,
													habitacao,apoio_social,fort_economico,plano_acao) VALUES(:data_digitacao,:benificiario_id,:nome,:idade,:cd_ident,:nome_cuidador,:sexo,:provincia,:nome_voluntario,:nome_lider,:nome_ocb,:destrito,:hiv,:tarv,:situacao_crianca,:dataAval,
																							:saude_1,:saude_2,:saude_3,:saude_4,:saude_5,:saude_6,:saude_7,:alimentacao_nutricao_8,:alimentacao_nutricao_9,:educacao_10,:educacao_11,:educacao_12,:educacao_13,:educacao_14,:educacao_15,:educacao_16,
																							:educacao_17,:protecao_apoio_18,:protecao_apoio_19,:protecao_apoio_20,:protecao_apoio_21,:habitacao_22,:apoio_social_23,:apoio_social_24,:apoio_social_25,:apoio_social_26,
																							:apoio_social_27,:apoio_social_28,:apoio_social_29,:apoio_social_30,:apoio_social_31,:fort_economico_32,:fort_economico_33,:saude,:aliment_nutricao,:educacao,:protecao_legal,
																							:habitacao,:apoio_social,:fort_economico,:plano_acao)");




			$stmt->bindparam(":data_digitacao",$data_digitacao);
			$stmt->bindparam(":benificiario_id",$benificiario_id);
			$stmt->bindparam(":nome",$nome);
			$stmt->bindparam(":idade",$idade);
			$stmt->bindparam(":cd_ident",$cd_ident);
			$stmt->bindparam(":nome_cuidador",$nome_cuidador);
			$stmt->bindparam(":sexo",$sexo);
			$stmt->bindparam(":provincia",$provincia);
			$stmt->bindparam(":nome_voluntario",$nome_voluntario);
			$stmt->bindparam(":nome_lider",$nome_lider);
			$stmt->bindparam(":nome_ocb",$nome_ocb);
			$stmt->bindparam(":destrito",$destrito);
			$stmt->bindparam(":hiv",$hiv);
			$stmt->bindparam(":tarv",$tarv);
			$stmt->bindparam(":situacao_crianca",$situacao_crianca);
			$stmt->bindparam(":dataAval",$dataAval);
			$stmt->bindparam(":saude_1",$saude_1);
			$stmt->bindparam(":saude_2",$saude_2);
			$stmt->bindparam(":saude_3",$saude_3);
			$stmt->bindparam(":saude_4",$saude_4);
			$stmt->bindparam(":saude_5",$saude_5);
			$stmt->bindparam(":saude_6",$saude_6);
			$stmt->bindparam(":saude_7",$saude_7);
			$stmt->bindparam(":alimentacao_nutricao_8",$alimentacao_nutricao_8);
			$stmt->bindparam(":alimentacao_nutricao_9",$alimentacao_nutricao_9);
			$stmt->bindparam(":educacao_10",$educacao_10);
			$stmt->bindparam(":educacao_11",$educacao_11);
			$stmt->bindparam(":educacao_12",$educacao_12);
			$stmt->bindparam(":educacao_13",$educacao_13);
			$stmt->bindparam(":educacao_14",$educacao_14);
			$stmt->bindparam(":educacao_15",$educacao_15);
			$stmt->bindparam(":educacao_16",$educacao_16);
			$stmt->bindparam(":educacao_17",$educacao_17);
			$stmt->bindparam(":protecao_apoio_18",$protecao_apoio_18);
			$stmt->bindparam(":protecao_apoio_19",$protecao_apoio_19);
			$stmt->bindparam(":protecao_apoio_20",$protecao_apoio_20);
			$stmt->bindparam(":protecao_apoio_21",$protecao_apoio_21);
			$stmt->bindparam(":habitacao_22",$habitacao_22);
			$stmt->bindparam(":apoio_social_23",$apoio_social_23);
			$stmt->bindparam(":apoio_social_24",$apoio_social_24);
			$stmt->bindparam(":apoio_social_25",$apoio_social_25);
			$stmt->bindparam(":apoio_social_26",$apoio_social_26);
			$stmt->bindparam(":apoio_social_27",$apoio_social_27);
			$stmt->bindparam(":apoio_social_28",$apoio_social_28);
			$stmt->bindparam(":apoio_social_29",$apoio_social_29);
			$stmt->bindparam(":apoio_social_30",$apoio_social_30);
			$stmt->bindparam(":apoio_social_31",$apoio_social_31);
			$stmt->bindparam(":fort_economico_32",$fort_economico_32);
			$stmt->bindparam(":fort_economico_33",$fort_economico_33);
			$stmt->bindparam(":saude",$saude);
			$stmt->bindparam(":aliment_nutricao",$aliment_nutricao);
			$stmt->bindparam(":educacao",$educacao);
			$stmt->bindparam(":protecao_legal",$protecao_legal);
			$stmt->bindparam(":habitacao",$habitacao);
			$stmt->bindparam(":apoio_social",$apoio_social);
			$stmt->bindparam(":fort_economico",$fort_economico);
			$stmt->bindparam(":plano_acao",$plano_acao);
			$stmt->execute();
			return true;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}

	}

	public function getID_mac($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM mac WHERE MAC_id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function getBenCount()
	{
			$stmt = $this->db->prepare("SELECT * FROM reg_ben");
			$stmt->execute();

			$count = $stmt->rowCount();
			echo $count;

			return $count;

	}

	public function getBenCountRegisto($ocb,$nivel)
	{
		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben");
			$stmt->execute();

			$count = $stmt->rowCount();
			echo $count;

			return $count;
		}
		else {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb");
			$stmt->execute(array(":ocb"=>$ocb));

			$count = $stmt->rowCount();
			echo $count;

			return $count;
		}

	}




	public function getBenWithServic1($ocb,$nivel)
	{
		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross");
			$stmt->execute();
			  $servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
					  $educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
						  $saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
							  $apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==1){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();
		$count1 = $stmt->rowCount();
		echo $count1;
		}
		else {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross  WHERE ocb=:ocb");
			$stmt->execute(array(":ocb"=>$ocb));
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==1){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
		$count1 = $stmt->rowCount();
		echo $count1;
		}


	}
	public function getBenWithServic2($ocb,$nivel)
	{
		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross");
			$stmt->execute();
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==2){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();
		$count1 = $stmt->rowCount();
		echo $count1;
		}
		else {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross  WHERE ocb=:ocb");
			$stmt->execute(array(":ocb"=>$ocb));
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==2){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
		$count1 = $stmt->rowCount();
		echo $count1;
		}
	}

	public function getBenWithServic3($ocb,$nivel)
	{
		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross");
			$stmt->execute();
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==3){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();
		$count1 = $stmt->rowCount();
		echo $count1;
		}
		else {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross  WHERE ocb=:ocb");
			$stmt->execute(array(":ocb"=>$ocb));
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==3){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
		$count1 = $stmt->rowCount();
		echo $count1;
	}
		}

	public function getBenWithServic4($ocb,$nivel)
	{
		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross");
			$stmt->execute();
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==4){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();
		$count1 = $stmt->rowCount();
		echo $count1;
		}
		else {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross  WHERE ocb=:ocb");
			$stmt->execute(array(":ocb"=>$ocb));
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==4){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
		$count1 = $stmt->rowCount();
		echo $count1;
		}

	}

	public function getBenWithServic5($ocb,$nivel)
	{
		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross");
			$stmt->execute();
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==5){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>
>
				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();
		$count1 = $stmt->rowCount();
		echo $count1;
		}
		else {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross  WHERE ocb=:ocb");
			$stmt->execute(array(":ocb"=>$ocb));
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==5){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
		$count1 = $stmt->rowCount();
		echo $count1;
		}

	}

	public function getBenWithServic6($ocb,$nivel)
	{
		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross");
			$stmt->execute();
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==6){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();
		$count1 = $stmt->rowCount();
		echo $count1;
		}
		else {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross  WHERE ocb=:ocb");
			$stmt->execute(array(":ocb"=>$ocb));
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==6){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
		$count1 = $stmt->rowCount();
		echo $count1;
		}

	}
	public function getBenWithServic7($ocb,$nivel)
	{
		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross");
			$stmt->execute();
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==7){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();
		$count1 = $stmt->rowCount();
		echo $count1;
		}
		else {
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross  WHERE ocb=:ocb");
			$stmt->execute(array(":ocb"=>$ocb));
				$servico_ID = array();



			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))


				{

					 $alimentacao=$row['alimentacao'];
						$educacao=$row['educacao'];
						 $ajuda_legal=$row['ajuda_legal'];
							$saude=$row['saude'];
							 $psico_social=$row['Psico_Social'];
								$apoio_financeiro=$row['apoio_financeiro'];
								 $apoio_habitacional=$row['apoio_habitacional'];


											$conta1=substr_count($alimentacao,"N");
											$conta2=substr_count($alimentacao,"R");
											$conta3=substr_count($saude,"N");
											$conta4=substr_count($saude,"R");
											$conta5=substr_count($educacao,"N");
											$conta6=substr_count($educacao,"R");
											$conta7=substr_count($ajuda_legal,"N");
											$conta8=substr_count($ajuda_legal,"R");
											$conta9=substr_count($psico_social,"N");
											$conta10=substr_count($psico_social,"R");
											$conta11=substr_count($apoio_financeiro,"N");
											$conta12=substr_count($apoio_financeiro,"R");
											$conta13=substr_count($apoio_habitacional,"N");
											$conta14=substr_count($apoio_habitacional,"R");



							if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==7){

		?>

		<?php $servico_ID[] = $row['benificiario_id'];
		}
		else
					{
						?>

									<?php
					}


		}
		}
		else
		{
		?>

				<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
		$count1 = $stmt->rowCount();
		echo $count1;
		}

	}





	public function update_mac($id,$nome,$idade,$cd_ident,$nome_cuidador,$sexo,$provincia,$nome_voluntario,$nome_lider,$nome_ocb,$destrito,$hiv,$tarv,$situacao_crianca,$dataAval,
											$saude_1,$saude_2,$saude_3,$saude_4,$saude_5,$saude_6,$saude_7,$alimentacao_nutricao_8,$alimentacao_nutricao_9,$educacao_10,$educacao_11,$educacao_12,$educacao_13,$educacao_14,$educacao_15,$educacao_16,
											$educacao_17,$protecao_apoio_18,$protecao_apoio_19,$protecao_apoio_20,$protecao_apoio_21,$habitacao_22,$apoio_social_23,$apoio_social_24,$apoio_social_25,$apoio_social_26,
											$apoio_social_27,$apoio_social_28,$apoio_social_29,$apoio_social_30,$apoio_social_31,$fort_economico_32,$fort_economico_33,$saude,$aliment_nutricao,$educacao,$protecao_legal,
											$habitacao,$apoio_social,$fort_economico,$plano_acao){
	try
	{

	$stmt=$this->db->prepare("UPDATE mac SET 		 nome=:nome, idade=:idade, cd_ident=:cd_ident,
																							 nome_cuidador=:nome_cuidador, sexo=:sexo,provincia=:provincia, nome_voluntario=:nome_voluntario, nome_lider=:nome_lider, nome_ocb=:nome_ocb, destrito=:destrito, hiv=:hiv,
																							 tarv=:tarv, situacao_crianca=:situacao_crianca,dataAval=:dataAval, saude_1=:saude_1, saude_2=:saude_2, saude_3=:saude_3, saude_4=:saude_4, saude_5=:saude_5,
																							 saude_6=:saude_6, saude_7=:saude_7, alimentacao_nutricao_8=:alimentacao_nutricao_8,alimentacao_nutricao_9=:alimentacao_nutricao_9, educacao_10=:educacao_10, educacao_11=:educacao_11, educacao_12=:educacao_12,
																							 educacao_13=:educacao_13, educacao_14=:educacao_14,educacao_15=:educacao_15, educacao_16=:educacao_16, educacao_17=:educacao_17, protecao_apoio_18=:protecao_apoio_18, protecao_apoio_19=:protecao_apoio_19,
																							 protecao_apoio_20=:protecao_apoio_20, protecao_apoio_21=:protecao_apoio_21, habitacao_22=:habitacao_22, apoio_social_23=:apoio_social_23, apoio_social_24=:apoio_social_24, apoio_social_25=:apoio_social_25, apoio_social_26=:apoio_social_26, apoio_social_27=:apoio_social_27,
																							 apoio_social_28=:apoio_social_28, apoio_social_29=:apoio_social_29, apoio_social_30=:apoio_social_30, apoio_social_31=:apoio_social_31, fort_economico_32=:fort_economico_32, fort_economico_33=:fort_economico_33, saude=:saude, aliment_nutricao=:aliment_nutricao, educacao=:educacao,
																							 protecao_legal=:protecao_legal, habitacao=:habitacao, apoio_social=:apoio_social, fort_economico=:fort_economico,plano_acao=:plano_acao

																							 WHERE MAC_id=:MAC_id");


																							$stmt->bindparam(":MAC_id",$id);

																							$stmt->bindparam(":nome",$nome);
																						 	$stmt->bindparam(":idade",$idade);
																						 	$stmt->bindparam(":cd_ident",$cd_ident);
																						 	$stmt->bindparam(":nome_cuidador",$nome_cuidador);
																						 	$stmt->bindparam(":sexo",$sexo);
																						 	$stmt->bindparam(":provincia",$provincia);
																						 	$stmt->bindparam(":nome_voluntario",$nome_voluntario);
																						 	$stmt->bindparam(":nome_lider",$nome_lider);
																						 	$stmt->bindparam(":nome_ocb",$nome_ocb);
																						 	$stmt->bindparam(":destrito",$destrito);
																						 	$stmt->bindparam(":hiv",$hiv);
																						 	$stmt->bindparam(":tarv",$tarv);
																						 	$stmt->bindparam(":situacao_crianca",$situacao_crianca);
																							$stmt->bindparam(":dataAval",$dataAval);
																						 	$stmt->bindparam(":saude_1",$saude_1);
																						 	$stmt->bindparam(":saude_2",$saude_2);
																						 	$stmt->bindparam(":saude_3",$saude_3);
																						 	$stmt->bindparam(":saude_4",$saude_4);
																						 	$stmt->bindparam(":saude_5",$saude_5);
																						 	$stmt->bindparam(":saude_6",$saude_6);
																						 	$stmt->bindparam(":saude_7",$saude_7);
																						 	$stmt->bindparam(":alimentacao_nutricao_8",$alimentacao_nutricao_8);
																						 	$stmt->bindparam(":alimentacao_nutricao_9",$alimentacao_nutricao_9);
																						 	$stmt->bindparam(":educacao_10",$educacao_10);
																						 	$stmt->bindparam(":educacao_11",$educacao_11);
																						 	$stmt->bindparam(":educacao_12",$educacao_12);
																						 	$stmt->bindparam(":educacao_13",$educacao_13);
																						 	$stmt->bindparam(":educacao_14",$educacao_14);
																						 	$stmt->bindparam(":educacao_15",$educacao_15);
																						 	$stmt->bindparam(":educacao_16",$educacao_16);
																						 	$stmt->bindparam(":educacao_17",$educacao_17);
																						 	$stmt->bindparam(":protecao_apoio_18",$protecao_apoio_18);
																						 	$stmt->bindparam(":protecao_apoio_19",$protecao_apoio_19);
																						 	$stmt->bindparam(":protecao_apoio_20",$protecao_apoio_20);
																						 	$stmt->bindparam(":protecao_apoio_21",$protecao_apoio_21);
																						 	$stmt->bindparam(":habitacao_22",$habitacao_22);
																						 	$stmt->bindparam(":apoio_social_23",$apoio_social_23);
																						 	$stmt->bindparam(":apoio_social_24",$apoio_social_24);
																						 	$stmt->bindparam(":apoio_social_25",$apoio_social_25);
																						 	$stmt->bindparam(":apoio_social_26",$apoio_social_26);
																						 	$stmt->bindparam(":apoio_social_27",$apoio_social_27);
																						 	$stmt->bindparam(":apoio_social_28",$apoio_social_28);
																						 	$stmt->bindparam(":apoio_social_29",$apoio_social_29);
																						 	$stmt->bindparam(":apoio_social_30",$apoio_social_30);
																						 	$stmt->bindparam(":apoio_social_31",$apoio_social_31);
																						 	$stmt->bindparam(":fort_economico_32",$fort_economico_32);
																						 	$stmt->bindparam(":fort_economico_33",$fort_economico_33);
																						 	$stmt->bindparam(":saude",$saude);
																						 	$stmt->bindparam(":aliment_nutricao",$aliment_nutricao);
																						 	$stmt->bindparam(":educacao",$educacao);
																						 	$stmt->bindparam(":protecao_legal",$protecao_legal);
																						 	$stmt->bindparam(":habitacao",$habitacao);
																						 	$stmt->bindparam(":apoio_social",$apoio_social);
																						 	$stmt->bindparam(":fort_economico",$fort_economico);
																						 	$stmt->bindparam(":plano_acao",$plano_acao);
																						 	$stmt->execute();
																						 	return true;

																						 }
																						 catch(PDOException $e)
																						 {
																						 	echo $e->getMessage();
																						 	return false;
																						 }


}
public function CreateListaCovs($data_digitacao,$provincia,$destrito,$localidade,$codigo_escola,$nome_escola,$tipo_escola,$nome_diretor,$contacto,$lip,$nomeOCB,$nome_aluno,
					$idade,$genero,$ano1,$classe_2016,$ano2,$classe_2017,$ano3,$classe_2018,$repitente,$I_matricula,$M_escolares,$U_escolar,$P_guarda,$P_cdc,$Estado_do_aluno)
{
					try {
						     $stmt=$this->db->prepare("INSERT INTO lista_covs(data_digitacao,provincia,destrito,localidade,codigo_escola,nome_escola,tipo_escola,nome_diretor,contacto,lip,nomeOCB,nome_aluno,
					 					idade,genero,ano1,classe_2016,ano2,classe_2017,ano3,classe_2018,repitente,I_matricula,M_escolares,U_escolar,P_guarda,P_cdc,Estado_do_aluno)VALUES(:data_digitacao,:provincia,:destrito,:localidade,:codigo_escola,:nome_escola,:tipo_escola,:nome_diretor,:contacto,:lip,:nomeOCB,:nome_aluno,
	 					 					:idade,:genero,:ano1,:classe_2016,:ano2,:classe_2017,:ano3,:classe_2018,:repitente,:I_matricula,:M_escolares,:U_escolar,:P_guarda,:P_cdc,:Estado_do_aluno)");

														$stmt->bindparam(":data_digitacao",$data_digitacao);
														$stmt->bindparam(":provincia",$provincia);
														$stmt->bindparam(":destrito",$destrito);
														$stmt->bindparam(":localidade",$localidade);
														$stmt->bindparam(":codigo_escola",$codigo_escola);
														$stmt->bindparam(":nome_escola",$nome_escola);
														$stmt->bindparam(":tipo_escola",$tipo_escola);
														$stmt->bindparam(":nome_diretor",$nome_diretor);
														$stmt->bindparam(":contacto",$contacto);
														$stmt->bindparam(":lip",$lip);
														$stmt->bindparam(":nomeOCB",$nomeOCB);
														$stmt->bindparam(":nome_aluno",$nome_aluno);
														$stmt->bindparam(":idade",$idade);
														$stmt->bindparam(":genero",$genero);
																$stmt->bindparam(":ano1",$ano1);
														$stmt->bindparam(":classe_2016",$classe_2016);
																$stmt->bindparam(":ano2",$ano2);
														$stmt->bindparam(":classe_2017",$classe_2017);
																$stmt->bindparam(":ano3",$ano3);
														$stmt->bindparam(":classe_2018",$classe_2018);
														$stmt->bindparam(":repitente",$repitente);
														$stmt->bindparam(":I_matricula",$I_matricula);
														$stmt->bindparam(":M_escolares",$M_escolares);
														$stmt->bindparam(":U_escolar",$U_escolar);
														$stmt->bindparam(":P_guarda",$P_guarda);
														$stmt->bindparam(":P_cdc",$P_cdc);
														$stmt->bindparam(":Estado_do_aluno",$Estado_do_aluno);
														$stmt->execute();
														return true;
}
									catch(PDOException $e)
								   		{
								 			 			echo $e->getMessage();
								 			 			return false;
								 			}

}
public function getID_ListaCovs($id)
{
	$stmt = $this->db->prepare("SELECT * FROM lista_covs WHERE listaCovs_id=:id");
	$stmt->execute(array(":id"=>$id));
	$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
	return $editRow;
}


public function update_ListaCovs($id,$provincia,$destrito,$localidade,$codigo_escola,$nome_escola,$tipo_escola,$nome_diretor,$contacto,$lip,$nomeOCB,$nome_aluno,
		$idade,$genero,$ano1,$classe_2016,$ano2,$classe_2017,$ano3,$classe_2018,$repitente,$I_matricula,$M_escolares,$U_escolar,$P_guarda,$P_cdc,$Estado_do_aluno){
try
{

$stmt=$this->db->prepare("UPDATE lista_covs SET listaCovs_id=:listaCovs_id, provincia=:provincia, destrito=:destrito,
																						 localidade=:localidade, codigo_escola=:codigo_escola, nome_escola=:nome_escola, tipo_escola=:tipo_escola, nome_diretor=:nome_diretor,
																						  contacto=:contacto, lip=:lip, nomeOCB=:nomeOCB,nome_aluno=:nome_aluno, idade=:idade, genero=:genero,ano1=:ano1, classe_2016=:classe_2016,ano2=:ano2,classe_2017=:classe_2017,ano3=:ano3,classe_2018=:classe_2018,
																							repitente=:repitente, I_matricula=:I_matricula, M_escolares=:M_escolares, U_escolar=:U_escolar, P_guarda=:P_guarda, P_cdc=:P_cdc, Estado_do_aluno=:Estado_do_aluno

																						 WHERE listaCovs_id=:listaCovs_id ");

																						 $stmt->bindparam(":listaCovs_id",$id);
																						 $stmt->bindparam(":provincia",$provincia);
																						 $stmt->bindparam(":destrito",$destrito);
																						 $stmt->bindparam(":localidade",$localidade);
																						 $stmt->bindparam(":codigo_escola",$codigo_escola);
																						 $stmt->bindparam(":nome_escola",$nome_escola);
																						 $stmt->bindparam(":tipo_escola",$tipo_escola);
																						 $stmt->bindparam(":nome_diretor",$nome_diretor);
																						 $stmt->bindparam(":contacto",$contacto);
																						 $stmt->bindparam(":lip",$lip);
																						 	 $stmt->bindparam(":nomeOCB",$nomeOCB);
																						 $stmt->bindparam(":nome_aluno",$nome_aluno);
																						 $stmt->bindparam(":idade",$idade);
																						 $stmt->bindparam(":genero",$genero);
																								 $stmt->bindparam(":ano1",$ano1);
																						 $stmt->bindparam(":classe_2016",$classe_2016);
																								 $stmt->bindparam(":ano2",$ano2);
																						 $stmt->bindparam(":classe_2017",$classe_2017);
																								 $stmt->bindparam(":ano3",$ano3);
																						 $stmt->bindparam(":classe_2018",$classe_2018);
																						 $stmt->bindparam(":repitente",$repitente);
																						 $stmt->bindparam(":I_matricula",$I_matricula);
																						 $stmt->bindparam(":M_escolares",$M_escolares);
																						 $stmt->bindparam(":U_escolar",$U_escolar);
																						 $stmt->bindparam(":P_guarda",$P_guarda);
																						 $stmt->bindparam(":P_cdc",$P_cdc);
																						 $stmt->bindparam(":Estado_do_aluno",$Estado_do_aluno);
																						 $stmt->execute();
																						 return true;
}
catch(PDOException $e)
{
echo $e->getMessage();
return false;
}
}


public function delete_listaCov($id)
{
	$stmt = $this->db->prepare("DELETE FROM lista_covs WHERE listaCovs_id=:id");
	$stmt->bindparam(":id",$id);
	$stmt->execute();
	return true;
}

	public function createReference($data_digitacao,$benificiario_id,$nome,$idade,$dataNasc,$sexo,$contacto,$bairo,$referido1,$data1,$contrRecebida,$data2,$referido2,$funcao,
  $contacto1,$ocb)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO gestao_crcr(data_digitacao,benificiario_id,nome,idade,dataNasc,sexo,contacto,bairo,referido1,data1,contrRecebida,data2,referido2,funcao,
		  contacto1,ocb) VALUES(:data_digitacao,:benificiario_id,:nome,:idade,:dataNasc,:sexo,:contacto,:bairo,:referido1,:data1,:contrRecebida,:data2,:referido2,:funcao,
			:contacto1,:ocb)");

			$stmt->bindparam(":data_digitacao",$data_digitacao);
			$stmt->bindparam(":benificiario_id",$benificiario_id);
			$stmt->bindparam(":nome",$nome);
			$stmt->bindparam(":idade",$idade);
			$stmt->bindparam(":dataNasc",$dataNasc);
			$stmt->bindparam(":sexo",$sexo);
			$stmt->bindparam(":contacto",$contacto);
			$stmt->bindparam(":bairo",$bairo);
			$stmt->bindparam(":referido1",$referido1);
			$stmt->bindparam(":data1",$data1);
			$stmt->bindparam(":contrRecebida",$contrRecebida);
			$stmt->bindparam(":data2",$data2);
			$stmt->bindparam(":referido2",$referido2);
			$stmt->bindparam(":funcao",$funcao);
			$stmt->bindparam(":contacto1",$contacto1);
			$stmt->bindparam(":ocb",$ocb);
			$stmt->execute();
			return true;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}

	}

	public function createPresenca($data_digitacao,$projecto,$data_inicio,$data_fim,$provincia,$distrito,$parceiro,$actividade,$nome,$organizacao,$proveniencia,$funcao,$sexo,
  $idade,$contacto,$numero)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO presenca(data_digitacao,projecto,data_inicio,data_fim,provincia,distrito,parceiro,actividade,nome,organizacao,proveniencia,funcao,sexo,
		  idade,contacto,numero) VALUES(:data_digitacao,:projecto,:data_inicio,:data_fim,:provincia,:distrito,:parceiro,:actividade,:nome,:organizacao,:proveniencia,:funcao,:sexo,
			:idade,:contacto,:numero)");

			$stmt->bindparam(":data_digitacao",$data_digitacao);
			$stmt->bindparam(":projecto",$projecto);
			$stmt->bindparam(":data_inicio",$data_inicio);
			$stmt->bindparam(":data_fim",$data_fim);
			$stmt->bindparam(":provincia",$provincia);
			$stmt->bindparam(":distrito",$distrito);
			$stmt->bindparam(":parceiro",$parceiro);
			$stmt->bindparam(":actividade",$actividade);
			$stmt->bindparam(":nome",$nome);
			$stmt->bindparam(":organizacao",$organizacao);
			$stmt->bindparam(":proveniencia",$proveniencia);
			$stmt->bindparam(":funcao",$funcao);
			$stmt->bindparam(":sexo",$sexo);
			$stmt->bindparam(":idade",$idade);
			$stmt->bindparam(":contacto",$contacto);
			$stmt->bindparam(":numero",$numero);
			$stmt->execute();
			return true;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}

	}

	public function createPresencaC($data_digitacao,$projecto,$data_inicio,$data_fim,$provincia,$distrito,$parceiro,$actividade,$organizacao,$proveniencia,$funcao,$contacto,$numero)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO presenca(data_digitacao,projecto,data_inicio,data_fim,provincia,distrito,parceiro,actividade,organizacao,proveniencia,funcao,contacto,numero) VALUES(:data_digitacao,:projecto,:data_inicio,:data_fim,:provincia,:distrito,:parceiro,:actividade,:organizacao,:proveniencia,:funcao,:contacto,:numero)");

			$stmt->bindparam(":data_digitacao",$data_digitacao);
			$stmt->bindparam(":projecto",$projecto);
			$stmt->bindparam(":data_inicio",$data_inicio);
			$stmt->bindparam(":data_fim",$data_fim);
			$stmt->bindparam(":provincia",$provincia);
			$stmt->bindparam(":distrito",$distrito);
			$stmt->bindparam(":parceiro",$parceiro);
			$stmt->bindparam(":actividade",$actividade);
			$stmt->bindparam(":organizacao",$organizacao);
			$stmt->bindparam(":proveniencia",$proveniencia);
			$stmt->bindparam(":funcao",$funcao);
			$stmt->bindparam(":contacto",$contacto);
			$stmt->bindparam(":numero",$numero);
			$stmt->execute();
			return true;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}

	}
	public function getID_presenca($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM presenca WHERE id_presenca=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	public function update_presensa($id,$projecto,$data_inicio,$data_fim,$provincia,$distrito,$parceiro,$actividade,$nome,$organizacao,$proveniencia,$funcao,$sexo,
  $idade,$contacto){
	try
	{

	$stmt=$this->db->prepare("UPDATE presenca SET projecto=:projecto, data_inicio=:data_inicio,
																							data_fim=:data_fim, provincia=:provincia, distrito=:distrito, parceiro=:parceiro, actividade=:actividade, nome=:nome,organizacao=:organizacao,
																							proveniencia=:proveniencia, funcao=:funcao, sexo=:sexo, idade=:idade, contacto=:contacto	WHERE id_presenca=:id_presenca ");

																							$stmt->bindparam(":id_presenca",$id);
																							$stmt->bindparam(":projecto",$projecto);
																							$stmt->bindparam(":data_inicio",$data_inicio);
																							$stmt->bindparam(":data_fim",$data_fim);
																							$stmt->bindparam(":provincia",$provincia);
																							$stmt->bindparam(":distrito",$distrito);
																							$stmt->bindparam(":parceiro",$parceiro);
																							$stmt->bindparam(":actividade",$actividade);
																							$stmt->bindparam(":nome",$nome);
																							$stmt->bindparam(":organizacao",$organizacao);
																							$stmt->bindparam(":proveniencia",$proveniencia);
																							$stmt->bindparam(":funcao",$funcao);
																							$stmt->bindparam(":sexo",$sexo);
																							$stmt->bindparam(":idade",$idade);
																							$stmt->bindparam(":contacto",$contacto);
																							$stmt->execute();
																							return true;
	}
	catch(PDOException $e)
	{
	echo $e->getMessage();
	return false;
	}
	}


	public function delete_presenca($id)
	{
		$stmt = $this->db->prepare("DELETE FROM presenca WHERE id_presenca=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}


	public function createPlanoAcao($data_digitacao,$nomeMembroCCPC,$nomeOCB,$distrito,$nomeCrianca,$codBen,$data,$idade,$sexo,$dataPeriodoSeg,$dataManutencao,$dataGraduacao,$areaServico,$necessidadePrioritarea,$pontuacao,
	$necessidadesResolvidas,$data_2,$apoioDireito,$realizado,$data_3,$apoioPorReferenc,$completou,$data_4,$acaoDaFamilia,$realizado_1,$data_5,$comentarios,$membroCCPC,$data_6,$gestorCaso,$data_7)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO planoacao(data_digitacao,nomeMembroCCPC,nomeOCB,distrito,nomeCrianca,codBen,data,idade,sexo,dataPeriodoSeg,dataManutencao,dataGraduacao,areaServico,necessidadePrioritarea,pontuacao,
			necessidadesResolvidas,data_2,apoioDireito,realizado,data_3,apoioPorReferenc,completou,data_4,acaoDaFamilia,realizado_1,data_5,comentarios,membroCCPC,data_6,gestorCaso,data_7)

			VALUES(:data_digitacao,:nomeMembroCCPC,:nomeOCB,:distrito,:nomeCrianca,:codBen,:data,:idade,:sexo,:dataPeriodoSeg,:dataManutencao,:dataGraduacao,:areaServico,:necessidadePrioritarea,:pontuacao,
			:necessidadesResolvidas,:data_2,:apoioDireito,:realizado,:data_3,:apoioPorReferenc,:completou,:data_4,:acaoDaFamilia,:realizado_1,:data_5,:comentarios,:membroCCPC,:data_6,:gestorCaso,:data_7)");

			$stmt->bindparam(":data_digitacao",$data_digitacao);
			$stmt->bindparam(":nomeMembroCCPC",$nomeMembroCCPC);
			$stmt->bindparam(":nomeOCB",$nomeOCB);
			$stmt->bindparam(":distrito",$distrito);
			$stmt->bindparam(":nomeCrianca",$nomeCrianca);
			$stmt->bindparam(":codBen",$codBen);
			$stmt->bindparam(":data",$data);
			$stmt->bindparam(":idade",$idade);
			$stmt->bindparam(":sexo",$sexo);
			$stmt->bindparam(":dataPeriodoSeg",$dataPeriodoSeg);
			$stmt->bindparam(":dataManutencao",$dataManutencao);
			$stmt->bindparam(":dataGraduacao",$dataGraduacao);
			$stmt->bindparam(":areaServico",$areaServico);
			$stmt->bindparam(":necessidadePrioritarea",$necessidadePrioritarea);
			$stmt->bindparam(":pontuacao",$pontuacao);
			$stmt->bindparam(":necessidadesResolvidas",$necessidadesResolvidas);
			$stmt->bindparam(":data_2",$data_2);
			$stmt->bindparam(":apoioDireito",$apoioDireito);
			$stmt->bindparam(":realizado",$realizado);
			$stmt->bindparam(":data_3",$data_3);
			$stmt->bindparam(":apoioPorReferenc",$apoioPorReferenc);
			$stmt->bindparam(":completou",$completou);
			$stmt->bindparam(":data_4",$data_4);
			$stmt->bindparam(":acaoDaFamilia",$acaoDaFamilia);
			$stmt->bindparam(":realizado_1",$realizado_1);
			$stmt->bindparam(":data_5",$data_5);
			$stmt->bindparam(":comentarios",$comentarios);
			$stmt->bindparam(":membroCCPC",$membroCCPC);
			$stmt->bindparam(":data_6",$data_6);
			$stmt->bindparam(":gestorCaso",$gestorCaso);
			$stmt->bindparam(":data_7",$data_7);


			$stmt->execute();
			return true;

		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}

	}
	public function getID_plano($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM planoacao WHERE planoAcao_id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}


	public function update_palno($id,$nomeMembroCCPC,$nomeOCB,$distrito,$nomeCrianca,$codBen,$data,$idade,$sexo,$dataPeriodoSeg,$dataManutencao,$dataGraduacao,$areaServico,$necessidadePrioritarea,$pontuacao,
	$necessidadesResolvidas,$data_2,$apoioDireito,$realizado,$data_3,$apoioPorReferenc,$completou,$data_4,$acaoDaFamilia,$realizado_1,$data_5,$comentarios,$membroCCPC,$data_6,$gestorCaso,$data_7){
	try
	{

	$stmt=$this->db->prepare("UPDATE planoacao SET nomeMembroCCPC=:nomeMembroCCPC, nomeOCB=:nomeOCB,
																							distrito=:distrito, nomeCrianca=:nomeCrianca, codBen=:codBen, data=:data,idade=:idade,sexo=:sexo, dataPeriodoSeg=:dataPeriodoSeg, dataManutencao=:dataManutencao,dataGraduacao=:dataGraduacao,
																							areaServico=:areaServico, necessidadePrioritarea=:necessidadePrioritarea, pontuacao=:pontuacao, necessidadesResolvidas=:necessidadesResolvidas, data_2=:data_2, apoioDireito=:apoioDireito, realizado=:realizado,
																							data_3=:data_3,apoioPorReferenc=:apoioPorReferenc,completou=:completou,data_4=:data_4,acaoDaFamilia=:acaoDaFamilia,realizado_1=:realizado_1,data_5=:data_5,comentarios=:comentarios,
																							membroCCPC=:membroCCPC,data_6=:data_6,gestorCaso=:gestorCaso,data_7=:data_7
																							WHERE planoAcao_id=:planoAcao_id ");

																								$stmt->bindparam(":planoAcao_id",$id);
																							$stmt->bindparam(":nomeMembroCCPC",$nomeMembroCCPC);
																							$stmt->bindparam(":nomeOCB",$nomeOCB);
																							$stmt->bindparam(":distrito",$distrito);
																							$stmt->bindparam(":nomeCrianca",$nomeCrianca);
																							$stmt->bindparam(":codBen",$codBen);
																							$stmt->bindparam(":data",$data);
																							$stmt->bindparam(":idade",$idade);
																								$stmt->bindparam(":sexo",$sexo);
																							$stmt->bindparam(":dataPeriodoSeg",$dataPeriodoSeg);
																							$stmt->bindparam(":dataManutencao",$dataManutencao);
																							$stmt->bindparam(":dataGraduacao",$dataGraduacao);
																							$stmt->bindparam(":areaServico",$areaServico);
																							$stmt->bindparam(":necessidadePrioritarea",$necessidadePrioritarea);
																							$stmt->bindparam(":pontuacao",$pontuacao);
																							$stmt->bindparam(":necessidadesResolvidas",$necessidadesResolvidas);
																							$stmt->bindparam(":data_2",$data_2);
																							$stmt->bindparam(":apoioDireito",$apoioDireito);
																							$stmt->bindparam(":realizado_1",$realizado_1);
																							$stmt->bindparam(":data_3",$data_3);
																							$stmt->bindparam(":apoioPorReferenc",$apoioPorReferenc);
																							$stmt->bindparam(":completou",$completou);
																							$stmt->bindparam(":data_4",$data_4);
																							$stmt->bindparam(":acaoDaFamilia",$acaoDaFamilia);
																							$stmt->bindparam(":realizado",$realizado);
																							$stmt->bindparam(":data_5",$data_5);
																							$stmt->bindparam(":comentarios",$comentarios);
																							$stmt->bindparam(":membroCCPC",$membroCCPC);
																							$stmt->bindparam(":data_6",$data_6);
																							$stmt->bindparam(":gestorCaso",$gestorCaso);
																							$stmt->bindparam(":data_7",$data_7);
																							$stmt->execute();
	return true;
	}
	catch(PDOException $e)
	{
	echo $e->getMessage();
	return false;
	}
	}


	public function delete_plano($id)
	{
		$stmt = $this->db->prepare("DELETE FROM planoacao WHERE planoAcao_id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}



	public function getID_reference($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM gestao_crcr WHERE reference_id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}


	public function update_reference($id,$nome,$idade,$dataNasc,$sexo,$contacto,$bairo,$referido1,$data1,$contrRecebida,$data2,$referido2,$funcao,
  $contacto1,$ocb){
	try
	{

	$stmt=$this->db->prepare("UPDATE gestao_crcr SET reference_id=:reference_id, nome=:nome, idade=:idade,
																							 dataNasc=:dataNasc, sexo=:sexo, contacto=:contacto, bairo=:bairo, referido1=:referido1, data1=:data1, contrRecebida=:contrRecebida,
																							 data2=:data2,referido2=:referido2,funcao=:funcao, contacto1=:contacto1, ocb=:ocb
																							 WHERE reference_id=:reference_id ");

																							$stmt->bindparam(":reference_id",$id);
 																							$stmt->bindparam(":nome",$nome);
 																							$stmt->bindparam(":idade",$idade);
 																							$stmt->bindparam(":dataNasc",$dataNasc);
 																							$stmt->bindparam(":sexo",$sexo);
 																							$stmt->bindparam(":contacto",$contacto);
 																							$stmt->bindparam(":bairo",$bairo);
 																							$stmt->bindparam(":referido1",$referido1);
 																							$stmt->bindparam(":data1",$data1);
 																							$stmt->bindparam(":contrRecebida",$contrRecebida);
 																							$stmt->bindparam(":data2",$data2);
 																							$stmt->bindparam(":referido2",$referido2);
 																							$stmt->bindparam(":funcao",$funcao);
 																							$stmt->bindparam(":contacto1",$contacto1);
 																							$stmt->bindparam(":ocb",$ocb);
 																							$stmt->execute();

	$stmt->execute();

	return true;
	}
	catch(PDOException $e)
	{
	echo $e->getMessage();
	return false;
	}
	}


	public function delete_reference($id)
	{
		$stmt = $this->db->prepare("DELETE FROM gestao_crcr WHERE reference_id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}

	public function delete_mac($id)
	{
		$stmt = $this->db->prepare("DELETE FROM mac WHERE MAC_id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}

	public function delete_servicos($id)
	{
		$stmt = $this->db->prepare("DELETE FROM servicos_bross WHERE servicosBross_id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}



	public function createUser($nome,$provincia,$distrito,$contacto,$nivel,$cod_digitador,$email,$senha1)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO user(nome,provincia,distrito,contacto,nivel,cod_digitador,email,senha) VALUES(:nome,:provincia,:distrito,:contacto,:nivel,:cod_digitador,:email,:senha1)");

			$stmt->bindparam(":nome",$nome);
			$stmt->bindparam(":provincia",$provincia);
			$stmt->bindparam(":distrito",$distrito);
			$stmt->bindparam(":contactos",$contacto);
			$stmt->bindparam(":nivel",$nivel);
			$stmt->bindparam(":cod_digitador",$cod_digitador);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":senha1",$senha1);

			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}

	}

	public function createServicos($data_digitacao,$modificado,$benificiario_id,$provincia,$destrito,$localidade,$bairro,$data,$actvista,$supervisor,$ocb,$nome,$mes,$cd_agreg,$idade,
$sexo,$alimentacao,$educacao,$ajuda_legal,$saude,$Psico_Social,$apoio_financeiro,$apoio_habitacional,$data1)
		{
			try
			{
				$stmt = $this->db->prepare("INSERT INTO servicos_bross(data_digitacao,modificado,benificiario_id,provincia,destrito,localidade,bairro,data,actvista,supervisor,ocb,nome,mes,cd_agreg,idade,sexo,alimentacao,educacao,ajuda_legal,saude,Psico_Social,apoio_financeiro,apoio_habitacional,data1)
	      VALUES(:data_digitacao,:modificado,:benificiario_id,:provincia,:destrito,:localidade,:bairro,:data,:actvista,:supervisor,:ocb,:nome,:mes,:cd_agreg,:idade,:sexo,:alimentacao,:educacao,:ajuda_legal,:saude,:Psico_Social,:apoio_financeiro,:apoio_habitacional,:data1)");

				$stmt->bindparam(":data_digitacao",$data_digitacao);
				$stmt->bindparam(":modificado",$modificado);
				$stmt->bindparam(":benificiario_id",$benificiario_id);
				$stmt->bindparam(":provincia",$provincia);
				$stmt->bindparam(":destrito",$destrito);
				$stmt->bindparam(":localidade",$localidade);
				$stmt->bindparam(":bairro",$bairro);
				$stmt->bindparam(":data",$data);
				$stmt->bindparam(":actvista",$actvista);
				$stmt->bindparam(":supervisor",$supervisor);
				$stmt->bindparam(":ocb",$ocb);
				$stmt->bindparam(":nome",$nome);
				$stmt->bindparam(":mes",$mes);
				$stmt->bindparam(":cd_agreg",$cd_agreg);
				$stmt->bindparam(":idade",$idade);
				$stmt->bindparam(":sexo",$sexo);
				$stmt->bindparam(":alimentacao",$alimentacao);
				$stmt->bindparam(":educacao",$educacao);
				$stmt->bindparam(":ajuda_legal",$ajuda_legal);
				$stmt->bindparam(":saude",$saude);
				$stmt->bindparam(":Psico_Social",$Psico_Social);
				$stmt->bindparam(":apoio_financeiro",$apoio_financeiro);
				$stmt->bindparam(":apoio_habitacional",$apoio_habitacional);
				$stmt->bindparam(":data1",$data1);


				$stmt->execute();
				return true;

			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
				return false;
			}

		}
		public function getID_servicos($id)
		{
			$stmt = $this->db->prepare("SELECT * FROM servicos_bross WHERE servicosBross_id=:id");
			$stmt->execute(array(":id"=>$id));
			$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
			return $editRow;
		}


		public function update_servicos($id,$modificado,$provincia,$destrito,$localidade,$bairro,$data,$actvista,$supervisor,$ocb,$nome,$mes,$cd_agreg,$idade,
$sexo,$alimentacao,$educacao,$ajuda_legal,$saude,$Psico_Social,$apoio_financeiro,$apoio_habitacional,$data1){
	try
	{

	$stmt=$this->db->prepare("UPDATE servicos_bross SET modificado=:modificado, provincia=:provincia, destrito=:destrito,
																							localidade=:localidade, bairro=:bairro, data=:data, actvista=:actvista, supervisor=:supervisor,ocb=:ocb, nome=:nome,mes=:mes,
																							cd_agreg=:cd_agreg, idade=:idade, sexo=:sexo, alimentacao=:alimentacao, educacao=:educacao, ajuda_legal=:ajuda_legal, saude=:saude,Psico_Social=:Psico_Social,apoio_financeiro=:apoio_financeiro,
																							apoio_habitacional=:apoio_habitacional,data1=:data1
																							WHERE servicosBross_id=:servicosBross_id ");

																							$stmt->bindparam(":servicosBross_id",$id);
																							$stmt->bindparam(":modificado",$modificado);
																							$stmt->bindparam(":provincia",$provincia);
																							$stmt->bindparam(":destrito",$destrito);
																							$stmt->bindparam(":localidade",$localidade);
																							$stmt->bindparam(":bairro",$bairro);
																							$stmt->bindparam(":data",$data);
																							$stmt->bindparam(":actvista",$actvista);
																							$stmt->bindparam(":supervisor",$supervisor);
																							$stmt->bindparam(":ocb",$ocb);
																							$stmt->bindparam(":nome",$nome);
																							$stmt->bindparam(":mes",$mes);
																							$stmt->bindparam(":cd_agreg",$cd_agreg);
																							$stmt->bindparam(":idade",$idade);
																							$stmt->bindparam(":sexo",$sexo);
																							$stmt->bindparam(":alimentacao",$alimentacao);
																							$stmt->bindparam(":educacao",$educacao);
																							$stmt->bindparam(":ajuda_legal",$ajuda_legal);
																							$stmt->bindparam(":saude",$saude);
																							$stmt->bindparam(":Psico_Social",$Psico_Social);
																							$stmt->bindparam(":apoio_financeiro",$apoio_financeiro);
																							$stmt->bindparam(":apoio_habitacional",$apoio_habitacional);
																							$stmt->bindparam(":data1",$data1);

																							$stmt->execute();
		return true;
		}
		catch(PDOException $e)
		{
		echo $e->getMessage();
		return false;
		}
		}


		public function delete_servico($id)
		{
			$stmt = $this->db->prepare("DELETE FROM gestao_crcr WHERE benificiario_id=:id");
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			return true;
		}



	public function create($data_digitacao,$cdInquiridor,$cdAgregado,$cdBeneficiario,$nome,$dataNasc,$sexo,$idade,$Naturalidade,$N_Ident,$T_Ident,
	$provinciaAtual,$destrito,$postAdmin,$localidade,$Bairro,$Quarterao,$pontReferencia,$Contacto,$Estudante,$nomEscola,
	$classe,$turma,$numero,$Senaoporque,$ultimoAno,$UltEscola,$texteHIV,$Compartilhar,$resultado,$dataTexte,$Tarv,$orfao,$chefe,$situacaoHabt,
	$tipoHabt,$latitude,$longitude,$historico,$observacao,$prenchido,$funcao,$cbo,$NomePogram,$outros,$Scontacto,$data,
	$NomeTecnico,$Posicao,$TContacto,$data_,$codigo_digitador)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO reg_ben(data_digitacao,cod_inquiridor,cod_agregado,cod_beneficiario,nome,data_Nasc,sexo,idade,naturalidade,
			num_Identificacao,tipo_Identificacao,provincia,destrito,posto_administrativo,localidade,bairro,quarterao,ponto_referencia,Contato,estudante,nome_da_escola,
		 classe,turma,n_identificacao_turma,se_nao_estudante_porque,ultimo_ano_escolar,nome_Escola,teste_HIV,compartilhar_resultado,resultado,data_Teste,
		 em_tratamento_tarv,orfao_de,chefe_familia,tipo_casa,tipo_habitacao,Latitude,Longitude,historial_familiar,observacao,prenchido_por,funcao,nome_da_cbo,nome_do_pograma,
	 outros,contacto_,data,nome_tecnico_cbo,posicao,contacto,data_,codigo_digitador) VALUES(:data_digitacao,:cdInquiridor, :cdAgregado, :cdBeneficiario, :nome,:dataNasc,:sexo,:idade,:Naturalidade,:N_Ident,
		 :T_Ident,:provinciaAtual,:destrito,:postAdmin,:localidade,:Bairro,:Quarterao,:pontReferencia,:Contacto,:Estudante,:nomEscola,:classe,:turma,:numero,:Senaoporque,:ultimoAno,
		 :UltEscola,:texteHIV,:Compartilhar,:resultado,:dataTexte,:Tarv,:orfao,:chefe,:situacaoHabt,:tipoHabt,:latitude,:longitude,:historico,:observacao,:prenchido,:funcao,:cbo,:NomePogram,
		 :outros,:Scontacto,:data,:NomeTecnico,:Posicao,:TContacto,:data_,:codigo_digitador)");

		 	$stmt->bindparam(":data_digitacao",$data_digitacao);
			$stmt->bindparam(":cdInquiridor",$cdInquiridor);
			$stmt->bindparam(":cdAgregado",$cdAgregado);
			$stmt->bindparam(":cdBeneficiario",$cdBeneficiario);
			$stmt->bindparam(":nome",$nome);
			$stmt->bindparam(":dataNasc",$dataNasc);
			$stmt->bindparam(":sexo",$sexo);
			$stmt->bindparam(":idade",$idade);
			$stmt->bindparam(":Naturalidade",$Naturalidade);
			$stmt->bindparam(":N_Ident",$N_Ident);
			$stmt->bindparam(":T_Ident",$T_Ident);
			$stmt->bindparam(":provinciaAtual",$provinciaAtual);
			$stmt->bindparam(":destrito",$destrito);
			$stmt->bindparam(":postAdmin",$postAdmin);
			$stmt->bindparam(":localidade",$localidade);
			$stmt->bindparam(":Bairro",$Bairro);
			$stmt->bindparam(":Quarterao",$Quarterao);
			$stmt->bindparam(":pontReferencia",$pontReferencia);
			$stmt->bindparam(":Contacto",$Contacto);
			$stmt->bindparam(":Estudante",$Estudante);
			$stmt->bindparam(":nomEscola",$nomEscola);
			$stmt->bindparam(":classe",$classe);
			$stmt->bindparam(":turma",$turma);
			$stmt->bindparam(":numero",$numero);
			$stmt->bindparam(":Senaoporque",$Senaoporque);
			$stmt->bindparam(":ultimoAno",$ultimoAno);
			$stmt->bindparam(":UltEscola",$UltEscola);
			$stmt->bindparam(":texteHIV",$texteHIV);
			$stmt->bindparam(":Compartilhar",$Compartilhar);
			$stmt->bindparam(":resultado",$resultado);
			$stmt->bindparam(":dataTexte",$dataTexte);
			$stmt->bindparam(":Tarv",$Tarv);
			$stmt->bindparam(":orfao",$orfao);
			$stmt->bindparam(":chefe",$chefe);
			$stmt->bindparam(":situacaoHabt",$situacaoHabt);
			$stmt->bindparam(":tipoHabt",$tipoHabt);
			$stmt->bindparam(":latitude",$latitude);
			$stmt->bindparam(":longitude",$longitude);
			$stmt->bindparam(":historico",$historico);
			$stmt->bindparam(":observacao",$observacao);
			$stmt->bindparam(":prenchido",$prenchido);
			$stmt->bindparam(":funcao",$funcao);
			$stmt->bindparam(":cbo",$cbo);
			$stmt->bindparam(":NomePogram",$NomePogram);
			$stmt->bindparam(":outros",$outros);
			$stmt->bindparam(":Scontacto",$Scontacto);
			$stmt->bindparam(":data",$data);
			$stmt->bindparam(":NomeTecnico",$NomeTecnico);
			$stmt->bindparam(":Posicao",$Posicao);
			$stmt->bindparam(":TContacto",$TContacto);
			$stmt->bindparam(":data_",$data_);
			$stmt->bindparam(":codigo_digitador",$codigo_digitador);
			$stmt->execute();
			return true;


		}
		catch(PDOException $e)
		{
			echo $e;
			return false;
		}

	}

	public function getID($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}



	public function update($id,$cdInquiridor,$cdAgregado,$cdBeneficiario,$nome,$dataNasc,$sexo,$idade,$Naturalidade,$N_Ident,$T_Ident,
	$provinciaAtual,$destrito,$postAdmin,$localidade,$Bairro,$Quarterao,$pontReferencia,$Contacto,$Estudante,$nomEscola,
	$classe,$turma,$numero,$Senaoporque,$ultimoAno,$UltEscola,$texteHIV,$Compartilhar,$resultado,$dataTexte,$Tarv,$orfao,$chefe,$situacaoHabt,
	$tipoHabt,$latitude,$longitude,$historico,$observacao,$prenchido,$funcao,$nome_da_cbo,$NomePogram,$outros,$Scontacto,$data,
	$NomeTecnico,$Posicao,$TContacto,$data_){
 try
 {

	$stmt=$this->db->prepare("UPDATE reg_ben SET benificiario_id=:benificiario_id, cod_inquiridor=:cod_inquiridor, cod_agregado=:cod_agregado, cod_beneficiario=:cod_beneficiario,
																							 nome=:nome, data_Nasc=:data_Nasc, sexo=:sexo, idade=:idade, naturalidade=:naturalidade, num_Identificacao=:num_Identificacao, tipo_Identificacao=:tipo_Identificacao,
																							 provincia=:provincia, destrito=:destrito, posto_administrativo=:posto_administrativo, localidade=:localidade, bairro=:bairro, quarterao=:quarterao, ponto_referencia=:ponto_referencia,
																							 Contato=:Contato, estudante=:estudante, nome_da_escola=:nome_da_escola,classe=:classe, turma=:turma, n_identificacao_turma=:n_identificacao_turma, se_nao_estudante_porque=:se_nao_estudante_porque,
																							 ultimo_ano_escolar=:ultimo_ano_escolar, nome_Escola=:nome_Escola,teste_HIV=:teste_HIV, compartilhar_resultado=:compartilhar_resultado, resultado=:resultado, data_Teste=:data_Teste, em_tratamento_tarv=:em_tratamento_tarv,
																							 orfao_de=:orfao_de, chefe_familia=:chefe_familia, tipo_casa=:tipo_casa, tipo_habitacao=:tipo_habitacao, Latitude=:Latitude, Longitude=:Longitude, historial_familiar=:historial_familiar, observacao=:observacao,
																							 prenchido_por=:prenchido_por, funcao=:funcao, nome_da_cbo=:nome_da_cbo, nome_do_pograma=:nome_do_pograma, outros=:outros, contacto_=:contacto_, data=:data, nome_tecnico_cbo=:nome_tecnico_cbo, posicao=:posicao,
																							 contacto=:contacto, data_=:data_

																							 WHERE benificiario_id=:benificiario_id ");

																							$stmt->bindparam(":benificiario_id",$id);
																							$stmt->bindparam(":cod_inquiridor",$cdInquiridor);
																			 				$stmt->bindparam(":cod_agregado",$cdAgregado);
																			 				$stmt->bindparam(":cod_beneficiario",$cdBeneficiario);
																			 				$stmt->bindparam(":nome",$nome);
																			 				$stmt->bindparam(":data_Nasc",$dataNasc);
																			 				$stmt->bindparam(":sexo",$sexo);
																			 				$stmt->bindparam(":idade",$idade);
																			 				$stmt->bindparam(":naturalidade",$Naturalidade);
																			 				$stmt->bindparam(":num_Identificacao",$N_Ident);
																			 		 		$stmt->bindparam(":tipo_Identificacao",$T_Ident);
																			 		 		$stmt->bindparam(":provincia",$provinciaAtual);
																			 				$stmt->bindparam(":destrito",$destrito);
																			 				$stmt->bindparam(":posto_administrativo",$postAdmin);
																			 				$stmt->bindparam(":localidade",$localidade);
																			 				$stmt->bindparam(":bairro",$Bairro);
																			 				$stmt->bindparam(":quarterao",$Quarterao);
																			 				$stmt->bindparam(":ponto_referencia",$pontReferencia);
																			 				$stmt->bindparam(":Contato",$Contacto);
																			 				$stmt->bindparam(":estudante",$Estudante);
																			 				$stmt->bindparam(":nome_da_escola",$nomEscola);
																			 				$stmt->bindparam(":classe",$classe);
																			 				$stmt->bindparam(":turma",$turma);
																			 				$stmt->bindparam(":n_identificacao_turma",$numero);
																			 				$stmt->bindparam(":se_nao_estudante_porque",$Senaoporque);
																			 				$stmt->bindparam(":ultimo_ano_escolar",$ultimoAno);
																			 				$stmt->bindparam(":nome_Escola",$UltEscola);
																			 				$stmt->bindparam(":teste_HIV",$texteHIV);
																			 				$stmt->bindparam(":compartilhar_resultado",$Compartilhar);
																			 				$stmt->bindparam(":resultado",$resultado);
																			 				$stmt->bindparam(":data_Teste",$dataTexte);
																			 				$stmt->bindparam(":em_tratamento_tarv",$Tarv);
																			 				$stmt->bindparam(":orfao_de",$orfao);
																			 				$stmt->bindparam(":chefe_familia",$chefe);
																			 				$stmt->bindparam(":tipo_casa",$situacaoHabt);
																			 				$stmt->bindparam(":tipo_habitacao",$tipoHabt);
																			 				$stmt->bindparam(":Latitude",$latitude);
																			 				$stmt->bindparam(":Longitude",$longitude);
																			 				$stmt->bindparam(":historial_familiar",$historico);
																			 				$stmt->bindparam(":observacao",$observacao);
																			 				$stmt->bindparam(":prenchido_por",$prenchido);
																			 				$stmt->bindparam(":funcao",$funcao);
																			 				$stmt->bindparam(":nome_da_cbo",$nome_da_cbo);
																			 				$stmt->bindparam(":nome_do_pograma",$NomePogram);
																			 				$stmt->bindparam(":outros",$outros);
																			 				$stmt->bindparam(":contacto_",$Scontacto);
																			 				$stmt->bindparam(":data",$data);
																			 				$stmt->bindparam(":nome_tecnico_cbo",$NomeTecnico);
																			 				$stmt->bindparam(":posicao",$Posicao);
																			 				$stmt->bindparam(":contacto",$TContacto);
																			 				$stmt->bindparam(":data_",$data_);


	$stmt->execute();

	return true;
 }
 catch(PDOException $e)
 {
	echo $e->getMessage();
	return false;
 }
}

	public function delete($id)
	{
		$stmt = $this->db->prepare("DELETE FROM reg_ben WHERE benificiario_id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}


	/* paging */


public function dataview($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


                <tr>
                <td><?php print($row['benificiario_id']); ?></td>
								<td><?php print($row['cod_beneficiario']); ?></td>
                <td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
                <td><?php print($row['data_Nasc']); ?></td>
                <td><?php print($row['sexo']); ?></td>
                <td><?php print($row['idade']); ?></td>
								<td><?php print($row['data_digitacao']); ?></td>
								<td><?php print($row['codigo_digitador']); ?></td>

                <td align="center">

	              <a href="edit-data.php?edit_id=<?php print($row['benificiario_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </td>
                <td align="center">
                <a href="delete.php?delete_id=<?php print($row['benificiario_id']); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Sem nenhum resultado...</td>
            </tr>
            <?php
		}

}

public function dataviewDG($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


                <tr>
									<td><?php print($row['benificiario_id']); ?></td>
									<td><?php print($row['cod_beneficiario']); ?></td>
									<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
									<td><?php print($row['data_Nasc']); ?></td>
									<td><?php print($row['sexo']); ?></td>
									<td><?php print($row['idade']); ?></td>
									<td><?php print($row['data_digitacao']); ?></td>
									<td><?php print($row['codigo_digitador']); ?></td>

                <td align="center">

	              <a href="edit-data.php?edit_id=<?php print($row['benificiario_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </td>
								<td align="center">
								<a href=""><i class="" aria-hidden="true"></i></a>
								</td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Sem nenhum resultado...</td>
            </tr>
            <?php
		}

}



	public function dataview_presenca($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


								<tr>
								<td><?php print($row['id_presenca']); ?></td>
								<td><?php print($row['nome']); ?></td>
								<td><?php print($row['provincia']); ?></td>
								<td><?php print($row['distrito']); ?></td>
								<td><?php print($row['contacto']); ?></td>
								<td><?php print($row['parceiro']); ?></td>
								<td><?php print($row['data_digitacao']); ?></td>


								<td align="center">

								<a href="edit-presensa.php?edit_id=<?php print($row['id_presenca']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</td>
								<td align="center">
								<a href="delete_presensa.php?delete_id=<?php print($row['id_presenca']); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
								</td>
								</tr>
								<?php
			}
		}
		else
		{
			?>
							<tr>
						<td>Sem nenhum resultado...</td>
					  	</tr>

						<?php
		}

	}
	public function dataview_presencaDG($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


								<tr>
								<td><?php print($row['id_presenca']); ?></td>
								<td><?php print($row['nome']); ?></td>
								<td><?php print($row['provincia']); ?></td>
								<td><?php print($row['distrito']); ?></td>
								<td><?php print($row['contacto']); ?></td>
								<td><?php print($row['parceiro']); ?></td>
								<td><?php print($row['data_digitacao']); ?></td>


								<td align="center">

								<a href="edit-presensa.php?edit_id=<?php print($row['id_presenca']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</td>
								<td align="center">
								<a href=""><i class="" aria-hidden="true"></i></a>
								</td>
								</tr>
								<?php
			}
		}
		else
		{
			?>
							<tr>
						<td>Sem nenhum resultado...</td>
							</tr>

						<?php
		}

	}



	public function dataview_planoAcao($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


								<tr>
								<td><?php print($row['planoAcao_id']); ?></td>
								<td><?php print($row['nomeCrianca']); ?></td>
								<td><?php print($row['distrito']); ?></td>
								<td><?php print($row['areaServico']); ?></td>
								<td><?php print($row['nomeOCB']); ?></td>
								<td><?php print($row['codBen']); ?></td>
								<td><?php print($row['data_digitacao']); ?></td>


								<td align="center">

								<a href="edit_planoAcao.php?edit_id=<?php print($row['planoAcao_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</td>
								<td align="center">
								<a href="delete_Plano.php?delete_id=<?php print($row['planoAcao_id']); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
								</td>
								</tr>
								<?php
			}
		}
		else
		{
			?>
						<tr>
						<td>Sem nenhum resultado...</td>
						</tr>
						<?php
		}

	}
	public function dataview_planoAcaoDG($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


								<tr>
								<td><?php print($row['planoAcao_id']); ?></td>
								<td><?php print($row['nomeCrianca']); ?></td>
								<td><?php print($row['distrito']); ?></td>
								<td><?php print($row['areaServico']); ?></td>
								<td><?php print($row['nomeOCB']); ?></td>
								<td><?php print($row['codBen']); ?></td>
								<td><?php print($row['data_digitacao']); ?></td>


								<td align="center">

								<a href="edit_planoAcao.php?edit_id=<?php print($row['planoAcao_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</td>
								<td align="center">
								<a href=""><i class="" aria-hidden="true"></i></a>
								</td>
								</tr>
								<?php
			}
		}
		else
		{
			?>
						<tr>
						<td>Sem nenhum resultado...</td>
						</tr>
						<?php
		}

	}

	public function dataview_val1($query,$ocb,$nivel){

		$stmt = $this->db->prepare($query);
	  $stmt->execute();
	  $servico_ID = array();


	  if($stmt->rowCount()>0)
	  {
	    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	    {

				$alimentacao=$row['alimentacao'];
				 $educacao=$row['educacao'];
					$ajuda_legal=$row['ajuda_legal'];
					 $saude=$row['saude'];
						$psico_social=$row['Psico_Social'];
						 $apoio_financeiro=$row['apoio_financeiro'];
							$apoio_habitacional=$row['apoio_habitacional'];


									 $conta1=substr_count($alimentacao,"N");
									 $conta2=substr_count($alimentacao,"R");
									 $conta3=substr_count($saude,"N");
									 $conta4=substr_count($saude,"R");
									 $conta5=substr_count($educacao,"N");
									 $conta6=substr_count($educacao,"R");
									 $conta7=substr_count($ajuda_legal,"N");
									 $conta8=substr_count($ajuda_legal,"R");
									 $conta9=substr_count($psico_social,"N");
									 $conta10=substr_count($psico_social,"R");
									 $conta11=substr_count($apoio_financeiro,"N");
									 $conta12=substr_count($apoio_financeiro,"R");
									 $conta13=substr_count($apoio_habitacional,"N");
									 $conta14=substr_count($apoio_habitacional,"R");



					 if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==0 || $conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==1
				 ||	$conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==2 || $conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==3
				 ||	$conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==4 || $conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==5
			 ||		$conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==6){

 ?>


	      <?php $servico_ID[] = $row['benificiario_id'];
			}
				else
					 		{
					 			?>

					 						<?php
					 		}


	    }
	  }
	  else
	  {
	    ?>

	          <?php
	  }
	  $final_result = implode("' , '" ,$servico_ID);

		if ($nivel==1 || $nivel==2 ) {
 	 	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
 	 	$stmt->execute();
 	 	if($stmt->rowCount()>0)
 	 	{
 	 	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 	 	{
 	 	?>


 	 	<tr>
 	 		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
 	 		<td><?php print($row['cod_agregado']); ?></td>
 	 		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
 	 		<td><?php print($row['idade']); ?></td>
 	 		<td><?php print($row['sexo']); ?></td>
 	 		<td><?php print($row['provincia']); ?></td>
 	 		<td><?php print($row['localidade']); ?></td>
 	 		<td><?php print($row['bairro']); ?></td>
 	 		<td><?php print($row['Contato']); ?></td>

 	 	</tr>

 	 	</tr>
 	 					<?php
 	 	}

 	 	}
 	 	else
 	 	{
 	 	?>
 	 			<tr>
 	 			<td>Sem nenhum resultado...</td>
 	 			</tr>
 	 			<?php
 	 	}

 	 }
 	 else {
 	 	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
 	 	$stmt->execute(array(":ocb"=>$ocb));
	 	if($stmt->rowCount()>0)
 	 	{
 	 	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 	 	{
 	 	?>


 	 	<tr>
 	 		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
 	 		<td><?php print($row['cod_agregado']); ?></td>
 	 		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
 	 		<td><?php print($row['idade']); ?></td>
 	 		<td><?php print($row['sexo']); ?></td>
 	 		<td><?php print($row['provincia']); ?></td>
 	 		<td><?php print($row['localidade']); ?></td>
 	 		<td><?php print($row['bairro']); ?></td>
 	 		<td><?php print($row['Contato']); ?></td>

 	 	</tr>

 	 	</tr>
 	 					<?php
 	 	}

 	 	}
 	 	else
 	 	{
 	 	?>
 	 			<tr>
 	 			<td>Sem nenhum resultado...</td>

 	 			</tr>
 	 				<?php
 	 	}

 	 }


	}

	public function dataview_val2(){

		$stmt = $this->db->prepare("SELECT * FROM servicos_bross WHERE data < NOW() - INTERVAL 90 DAY AND alimentacao = 'N' AND educacao = 'N' AND ajuda_legal = 'N' AND saude = 'N' AND Psico_Social = 'N' AND apoio_financeiro = 'N' AND apoio_habitacional = 'N' ");
		$stmt->execute();
		$servico_ID = array();


		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
				<?php $servico_ID[] = $row['benificiario_id'];

			}
		}
		else
		{
			?>

						<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


				<tr>
				<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
				<td><?php print($row['cod_agregado']); ?></td>
				<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
				<td><?php print($row['idade']); ?></td>
				<td><?php print($row['sexo']); ?></td>
				<td><?php print($row['provincia']); ?></td>
				<td><?php print($row['localidade']); ?></td>
				<td><?php print($row['bairro']); ?></td>
				<td><?php print($row['Contato']); ?></td>
				</tr>
								<?php
			}

		}
		else
		{
			?>
						<tr>
						<td>Sem nenhum resultado...</td>
						</tr>
						<?php
		}

	}

	public function dataview_val3($query,$nivel,$ocb){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		$servico_ID = array();


		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
				<?php $servico_ID[] = $row['benificiario_id'];

			}
		}
		else
		{
			?>

						<?php
		}
		$final_result = implode("' , '" ,$servico_ID);

		if ($nivel==1 || $nivel==2 ) {
 	 	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
 	 	$stmt->execute();
 	 	if($stmt->rowCount()>0)
 	 	{
 	 	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 	 	{
 	 	?>


 	 	<tr>
 	 		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
 	 		<td><?php print($row['cod_agregado']); ?></td>
 	 		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
 	 		<td><?php print($row['idade']); ?></td>
 	 		<td><?php print($row['sexo']); ?></td>
 	 		<td><?php print($row['provincia']); ?></td>
 	 		<td><?php print($row['localidade']); ?></td>
 	 		<td><?php print($row['bairro']); ?></td>
 	 		<td><?php print($row['Contato']); ?></td>

 	 	</tr>

 	 	</tr>
 	 					<?php
 	 	}

 	 	}
 	 	else
 	 	{
 	 	?>
 	 			<tr>
 	 			<td>Sem nenhum resultado...</td>
 	 			</tr>
 	 			<?php
 	 	}

 	 }
 	 else {
 	 	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
 	 	$stmt->execute(array(":ocb"=>$ocb));
	 	if($stmt->rowCount()>0)
 	 	{
 	 	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 	 	{
 	 	?>


 	 	<tr>
 	 		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
 	 		<td><?php print($row['cod_agregado']); ?></td>
 	 		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
 	 		<td><?php print($row['idade']); ?></td>
 	 		<td><?php print($row['sexo']); ?></td>
 	 		<td><?php print($row['provincia']); ?></td>
 	 		<td><?php print($row['localidade']); ?></td>
 	 		<td><?php print($row['bairro']); ?></td>
 	 		<td><?php print($row['Contato']); ?></td>

 	 	</tr>

 	 	</tr>
 	 					<?php
 	 	}

 	 	}
 	 	else
 	 	{
 	 	?>
 	 			<tr>
 	 			<td>Sem nenhum resultado...</td>

 	 			</tr>
 	 				<?php
 	 	}

 	 }

	}

	public function dataview_val4($query,$ocb,$nivel){

		$stmt = $this->db->prepare($query);
	  $stmt->execute();
	  $servico_ID = array();


	  if($stmt->rowCount()>0)
	  {
	    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	    {

				$alimentacao=$row['alimentacao'];
				 $educacao=$row['educacao'];
					$ajuda_legal=$row['ajuda_legal'];
					 $saude=$row['saude'];
						$psico_social=$row['Psico_Social'];
						 $apoio_financeiro=$row['apoio_financeiro'];
							$apoio_habitacional=$row['apoio_habitacional'];


									 $conta1=substr_count($alimentacao,"N");
									 $conta2=substr_count($alimentacao,"R");
									 $conta3=substr_count($saude,"N");
									 $conta4=substr_count($saude,"R");
									 $conta5=substr_count($educacao,"N");
									 $conta6=substr_count($educacao,"R");
									 $conta7=substr_count($ajuda_legal,"N");
									 $conta8=substr_count($ajuda_legal,"R");
									 $conta9=substr_count($psico_social,"N");
									 $conta10=substr_count($psico_social,"R");
									 $conta11=substr_count($apoio_financeiro,"N");
									 $conta12=substr_count($apoio_financeiro,"R");
									 $conta13=substr_count($apoio_habitacional,"N");
									 $conta14=substr_count($apoio_habitacional,"R");



					 if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==0 || $conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==1
				 ||	$conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==2 || $conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==3
				 ||	$conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==4 || $conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==5
			 ||		$conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==6){

 ?>


	      <?php $servico_ID[] = $row['benificiario_id'];
			}
				else
					 		{
					 			?>

					 						<?php
					 		}


	    }
	  }
	  else
	  {
	    ?>

	          <?php
	  }
	  $final_result = implode("' , '" ,$servico_ID);

		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
			$stmt->execute();
			if($stmt->rowCount()>0)
			{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>


			<tr>
				<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
				<td><?php print($row['cod_agregado']); ?></td>
				<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
				<td><?php print($row['idade']); ?></td>
				<td><?php print($row['sexo']); ?></td>
				<td><?php print($row['provincia']); ?></td>
				<td><?php print($row['localidade']); ?></td>
				<td><?php print($row['bairro']); ?></td>
				<td><?php print($row['Contato']); ?></td>

			</tr>

			</tr>
							<?php
			}

			}
			else
			{
			?>
					<tr>
					<td>Sem nenhum resultado...</td>
					</tr>
					<?php
			}

		 }
		 else {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
			if($stmt->rowCount()>0)
			{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>


			<tr>
				<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
				<td><?php print($row['cod_agregado']); ?></td>
				<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
				<td><?php print($row['idade']); ?></td>
				<td><?php print($row['sexo']); ?></td>
				<td><?php print($row['provincia']); ?></td>
				<td><?php print($row['localidade']); ?></td>
				<td><?php print($row['bairro']); ?></td>
				<td><?php print($row['Contato']); ?></td>

			</tr>

			</tr>
							<?php
			}

			}
			else
			{
			?>
					<tr>
					<td>Sem nenhum resultado...</td>

					</tr>
						<?php
			}

		 }
	}



		public function dataview_val5($query){

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>
					<tr>
					<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
					<td><?php print($row['cod_agregado']); ?></td>
					<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
					<td><?php print($row['idade']); ?></td>
					<td><?php print($row['sexo']); ?></td>
					<td><?php print($row['provincia']); ?></td>
					<td><?php print($row['localidade']); ?></td>
					<td><?php print($row['bairro']); ?></td>
					<td><?php print($row['Contato']); ?></td>
					</tr>
									<?php
				}
			}
			else
			{
				?>
							<tr>
							<td>Sem nenhum resultado...</td>
							</tr>
							<?php
			}

		}

		public function dataview_val6($query){

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>
					<tr>
					<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
					<td><?php print($row['cod_agregado']); ?></td>
					<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
					<td><?php print($row['idade']); ?></td>
					<td><?php print($row['sexo']); ?></td>
					<td><?php print($row['provincia']); ?></td>
					<td><?php print($row['localidade']); ?></td>
					<td><?php print($row['bairro']); ?></td>
					<td><?php print($row['Contato']); ?></td>
					</tr>
									<?php
				}
			}
			else
			{
				?>
							<tr>
							<td>Sem nenhum resultado...</td>
							</tr>
							<?php
			}

		}

		public function dataview_val7($query){

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>
					<tr>
					<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
					<td><?php print($row['cod_agregado']); ?></td>
					<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>

					<td><?php print($row['idade']); ?></td>
					<td><?php print($row['sexo']); ?></td>
					<td><?php print($row['provincia']); ?></td>
					<td><?php print($row['localidade']); ?></td>
					<td><?php print($row['bairro']); ?></td>
					<td><?php print($row['Contato']); ?></td>
					</tr>
									<?php
				}
			}
			else
			{
				?>
							<tr>
							<td>Sem nenhum resultado...</td>
							</tr>
							<?php
			}

		}


		public function dataview_val8(){

			$stmt = $this->db->prepare("SELECT * FROM servicos_bross");
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>
					<tr>
					<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
					<td> <?php print($row['cod_agregado']); ?></td>
					<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>

					<td><?php print($row['idade']); ?></td>
					<td><?php print($row['sexo']); ?></td>
					<td><?php print($row['provincia']); ?></td>
					<td><?php print($row['localidade']); ?></td>
					<td><?php print($row['bairro']); ?></td>
					<td><?php print($row['Contato']); ?></td>
					</tr>
									<?php
				}
			}
			else
			{
				?>
							<tr>
							<td>Sem nenhum resultado...</td>
							</tr>
							<?php
			}

		}


		public function dataview_val9B($query,$nivel,$ocb){

			$stmt = $this->db->prepare($query);
			$stmt->execute();
				$mac_ID = array();

			if($stmt->rowCount()>0)
			{
				$ben_ID = array();
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>
					<?php $ben_ID[] = $row['benificiario_id'];


					?>

									<?php
				}

			}
			else
			{
				?>

							<?php
			}



			$stmt = $this->db->prepare("SELECT * FROM mac WHERE nome_ocb=:ocb");
			$stmt->execute(array(":ocb"=>$ocb));

			if($stmt->rowCount()>0)
			{
				$mac_ID = array();
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>
					<?php $mac_ID[] = $row['benificiario_id'];
					?>

									<?php
				}

			}
			else
			{
				?>

							<?php
			}

			$result = array_diff($ben_ID, $mac_ID);
			$final_result = implode("' , '" ,$result);

			if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
			$stmt->execute();
			if($stmt->rowCount()>0)
			{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>


			<tr>
				<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
				<td><?php print($row['cod_agregado']); ?></td>
				<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
				<td><?php print($row['idade']); ?></td>
				<td><?php print($row['sexo']); ?></td>
				<td><?php print($row['provincia']); ?></td>
				<td><?php print($row['localidade']); ?></td>
				<td><?php print($row['bairro']); ?></td>
				<td><?php print($row['Contato']); ?></td>

			</tr>

			</tr>
							<?php
			}

			}
			else
			{
			?>
					<tr>
					<td>Sem nenhum resultado...</td>
					</tr>
					<?php
			}

		 }
		 else {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
			if($stmt->rowCount()>0)
			{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>


			<tr>
				<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
				<td><?php print($row['cod_agregado']); ?></td>
				<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
				<td><?php print($row['idade']); ?></td>
				<td><?php print($row['sexo']); ?></td>
				<td><?php print($row['provincia']); ?></td>
				<td><?php print($row['localidade']); ?></td>
				<td><?php print($row['bairro']); ?></td>
				<td><?php print($row['Contato']); ?></td>

			</tr>

			</tr>
							<?php
			}

			}
			else
			{
			?>
					<tr>
					<td>Sem nenhum resultado...</td>

					</tr>
						<?php
			}

		 }

		}

		public function dataview_val10(){

			$stmt = $this->db->prepare("SELECT * FROM mac");
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>



					<?php

					$dataAval = $row['dataAval'];
					$data1 = new DateTime($dataAval);
					$dataAtual = new DateTime();


					 echo $data1->diff($dataAtual)->format("%a");

					if ($data1->diff($dataAtual)->format("%a")>"90") {

						echo "Maior";


					}




					 ?>


									<?php
				}
			}
			else
			{
				?>
							<tr>
							<td>Sem nenhum resultado...</td>
							</tr>
							<?php
			}

		}
	public function dataview_val10_teste($query,$nivel,$ocb){

	  $stmt = $this->db->prepare($query);
		$stmt->execute();
	 	$mac_ID = array();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
				<?php $mac_ID[] = $row['benificiario_id'];


				?>


                <?php
			}
		}
		else
		{
			?>

            <!-- <td>Verifica o codigo de benificiario...</td> -->

            <?php
		}

		$final_result = implode("' , '" ,$mac_ID);

		if ($nivel==1 || $nivel==2 ) {
		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();
		if($stmt->rowCount()>0)
		{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>


		<tr>
			<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
			<td><?php print($row['cod_agregado']); ?></td>
			<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
			<td><?php print($row['idade']); ?></td>
			<td><?php print($row['sexo']); ?></td>
			<td><?php print($row['provincia']); ?></td>
			<td><?php print($row['localidade']); ?></td>
			<td><?php print($row['bairro']); ?></td>
			<td><?php print($row['Contato']); ?></td>

		</tr>

		</tr>
						<?php
		}

		}
		else
		{
		?>
				<tr>
				<td>Sem nenhum resultado...</td>
				</tr>
				<?php
		}

	 }
	 else {
		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
		$stmt->execute(array(":ocb"=>$ocb));
		if($stmt->rowCount()>0)
		{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>


		<tr>
			<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
			<td><?php print($row['cod_agregado']); ?></td>
			<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
			<td><?php print($row['idade']); ?></td>
			<td><?php print($row['sexo']); ?></td>
			<td><?php print($row['provincia']); ?></td>
			<td><?php print($row['localidade']); ?></td>
			<td><?php print($row['bairro']); ?></td>
			<td><?php print($row['Contato']); ?></td>

		</tr>

		</tr>
						<?php
		}

		}
		else
		{
		?>
				<tr>
				<td>Sem nenhum resultado...</td>

				</tr>
					<?php
		}

	 }
	}


	public function dataview_val11($query,$nivel,$ocb){

		$stmt = $this->db->prepare($query);
	  $stmt->execute();
		$mac_ID = array();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
				<?php $mac_ID[] = $row['benificiario_id'];


				?>


                <?php
			}
		}
		else
		{
			?>

            <!-- <td>Verifica o codigo de benificiario...</td> -->

            <?php
		}

		$final_result = implode("' , '" ,$mac_ID);

		if ($nivel==1 || $nivel==2 ) {
		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
		$stmt->execute();
		if($stmt->rowCount()>0)
		{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>


		<tr>
			<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
			<td><?php print($row['cod_agregado']); ?></td>
			<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
			<td><?php print($row['idade']); ?></td>
			<td><?php print($row['sexo']); ?></td>
			<td><?php print($row['provincia']); ?></td>
			<td><?php print($row['localidade']); ?></td>
			<td><?php print($row['bairro']); ?></td>
			<td><?php print($row['Contato']); ?></td>

		</tr>

		</tr>
						<?php
		}

		}
		else
		{
		?>
				<tr>
				<td>Sem nenhum resultado...</td>
				</tr>
				<?php
		}

	 }
	 else {
		$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
		$stmt->execute(array(":ocb"=>$ocb));
		if($stmt->rowCount()>0)
		{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>


		<tr>
			<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
			<td><?php print($row['cod_agregado']); ?></td>
			<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
			<td><?php print($row['idade']); ?></td>
			<td><?php print($row['sexo']); ?></td>
			<td><?php print($row['provincia']); ?></td>
			<td><?php print($row['localidade']); ?></td>
			<td><?php print($row['bairro']); ?></td>
			<td><?php print($row['Contato']); ?></td>

		</tr>

		</tr>
						<?php
		}

		}
		else
		{
		?>
				<tr>
				<td>Sem nenhum resultado...</td>

				</tr>
					<?php
		}

	 }
	}

	public function dataview_val12($query,$nivel,$ocb){

		$stmt = $this->db->prepare($query);
	  $stmt->execute();
	  $servico_ID = array();


	  if($stmt->rowCount()>0)
	  {
	    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	    {

				$alimentacao=$row['alimentacao'];
				 $educacao=$row['educacao'];
					$ajuda_legal=$row['ajuda_legal'];
					 $saude=$row['saude'];
						$psico_social=$row['Psico_Social'];
						 $apoio_financeiro=$row['apoio_financeiro'];
							$apoio_habitacional=$row['apoio_habitacional'];


									 $conta1=substr_count($alimentacao,"N");
									 $conta2=substr_count($alimentacao,"R");
									 $conta3=substr_count($saude,"N");
									 $conta4=substr_count($saude,"R");
									 $conta5=substr_count($educacao,"N");
									 $conta6=substr_count($educacao,"R");
									 $conta7=substr_count($ajuda_legal,"N");
									 $conta8=substr_count($ajuda_legal,"R");
									 $conta9=substr_count($psico_social,"N");
									 $conta10=substr_count($psico_social,"R");
									 $conta11=substr_count($apoio_financeiro,"N");
									 $conta12=substr_count($apoio_financeiro,"R");
									 $conta13=substr_count($apoio_habitacional,"N");
									 $conta14=substr_count($apoio_habitacional,"R");



					 if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==7){

 ?>


	      <?php $servico_ID[] = $row['benificiario_id'];
			}
				else
					 		{
					 			?>

					 						<?php
					 		}


	    }
	  }
	  else
	  {
	    ?>

	          <?php
	  }
	  $final_result = implode("' , '" ,$servico_ID);

		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
			$stmt->execute();
			if($stmt->rowCount()>0)
			{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>


			<tr>
				<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
				<td><?php print($row['cod_agregado']); ?></td>
				<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
				<td><?php print($row['idade']); ?></td>
				<td><?php print($row['sexo']); ?></td>
				<td><?php print($row['provincia']); ?></td>
				<td><?php print($row['localidade']); ?></td>
				<td><?php print($row['bairro']); ?></td>
				<td><?php print($row['Contato']); ?></td>

			</tr>

			</tr>
							<?php
			}

			}
			else
			{
			?>
					<tr>
					<td>Sem nenhum resultado...</td>
					</tr>
					<?php
			}

		 }
		 else {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
			if($stmt->rowCount()>0)
			{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>


			<tr>
				<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
				<td><?php print($row['cod_agregado']); ?></td>
				<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
				<td><?php print($row['idade']); ?></td>
				<td><?php print($row['sexo']); ?></td>
				<td><?php print($row['provincia']); ?></td>
				<td><?php print($row['localidade']); ?></td>
				<td><?php print($row['bairro']); ?></td>
				<td><?php print($row['Contato']); ?></td>

			</tr>

			</tr>
							<?php
			}

			}
			else
			{
			?>
					<tr>
					<td>Sem nenhum resultado...</td>

					</tr>
						<?php
			}

		 }
	}
	public function dataview_MAC_verify($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


						<?php				include_once 'includes/mac_verify_form.php';?>


								<?php
			}
		}
		else
		{
			?>

						<!-- <td>Verifica o codigo de benificiario...</td> -->

						<?php
		}

	}


	public function dataview_reference_verify($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


						<?php				include_once 'includes/reference_verify_form.php';?>


                <?php
			}
		}
		else
		{
			?>

            <!-- <td>Verifica o codigo de benificiario...</td> -->

            <?php
		}

	}

	public function dataview_plano_verify($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


						<?php				include_once 'includes/plano_verify_Form.php';?>


								<?php
			}
		}
		else
		{
			?>

						<!-- <td>Verifica o codigo de benificiario...</td> -->

						<?php
		}

	}
	public function dataview_presenca_verify($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


						<?php				include_once 'includes/presenca_verify_form.php';?>


								<?php
			}
		}
		else
		{
			?>

						<!-- <td>Verifica o codigo de benificiario...</td> -->

						<?php
		}

	}



	public function dataview_servicos_verify($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


						<?php				include_once 'includes/servicos_verify.php';?>


								<?php
			}
		}
		else
		{
			?>

						<!-- <td>Verifica o codigo de benificiario...</td> -->

						<?php
		}

	}
	public function dataview_MAC($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


								<tr>
								<td><?php print($row['MAC_id']); ?></td>
								<td><?php print($row['nome']); ?></a> </td>
								<td><?php print($row['sexo']); ?></td>
								<td><?php print($row['idade']); ?></td>
								<td><?php print($row['provincia']); ?></td>
								<td><?php print($row['destrito']); ?></td>
								<td><?php print($row['nome_ocb']); ?></td>
								<td><?php print($row['hiv']); ?></td>

									<td><?php print($row['data_digitacao']); ?></td>


								<?php
								$id = $row['MAC_id'];
								$plano_acao = $row['plano_acao'];


								$url_string = 'edit_id=' . urlencode($id) . '&rds=' . urlencode($plano_acao);

								?>

								<td align="center">
								<?php echo '<a href="edite_Mac.php?' . htmlentities($url_string) . '">'; ?><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</td>
								<td align="center">
								<a href="delete_mac.php?delete_id=<?php print($row['MAC_id']); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
								</td>
								</tr>
								<?php
			}
		}
		else
		{
			?>
						<tr>
						<td>Tabela vazia...</td>
						</tr>
						<?php
		}
}
public function dataview_MACDG($query){

	$stmt = $this->db->prepare($query);
	$stmt->execute();

	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>


							<tr>
							<td><?php print($row['MAC_id']); ?></td>
							<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
							<td><?php print($row['sexo']); ?></td>
							<td><?php print($row['idade']); ?></td>
							<td><?php print($row['provincia']); ?></td>
							<td><?php print($row['destrito']); ?></td>
							<td><?php print($row['nome_ocb']); ?></td>
							<td><?php print($row['hiv']); ?></td>

								<td><?php print($row['data_digitacao']); ?></td>


							<?php
							$id = $row['MAC_id'];
							$plano_acao = $row['plano_acao'];


							$url_string = 'edit_id=' . urlencode($id) . '&rds=' . urlencode($plano_acao);

							?>

							<td align="center">
							<?php echo '<a href="edite_Mac.php?' . htmlentities($url_string) . '">'; ?><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
							<td align="center">
							<a href=""><i class="" aria-hidden="true"></i></a>
							</td>
							</tr>
							<?php
		}
	}
	else
	{
		?>
					<tr>
					<td>Tabela vazia...</td>
					</tr>
					<?php
	}
}
		public function dataview_reference($query){

			$stmt = $this->db->prepare($query);
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>


									<tr>
									<td><?php print($row['reference_id']); ?></td>
									<td><?php print($row['nome']); ?></a> </td>
									<td><?php print($row['idade']); ?></td>
									<td><?php print($row['dataNasc']); ?></td>
									<td><?php print($row['sexo']); ?></td>
									<td><?php print($row['contacto1']); ?></td>
									<td><?php print($row['bairo']); ?></td>
									<td><?php print($row['referido1']); ?></td>
									<td><?php print($row['ocb']); ?></td>
									<td><?php print($row['data_digitacao']); ?></td>




									<td align="center">

									<a href="edit_reference.php?edit_id=<?php print($row['reference_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									</td>
									<td align="center">
									<a href="delete_Reference.php?delete_id=<?php print($row['reference_id']); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
									</td>
									</tr>
									<?php
				}
			}
			else
			{
				?>
							<tr>
							<td>Sem nenhum resultado...</td>
							</tr>
							<?php
			}

	}
	public function dataview_referenceDG($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


								<tr>
								<td><?php print($row['reference_id']); ?></td>
								<td><?php print($row['nome']); ?></a> </td>
								<td><?php print($row['idade']); ?></td>
								<td><?php print($row['dataNasc']); ?></td>
								<td><?php print($row['sexo']); ?></td>
								<td><?php print($row['contacto1']); ?></td>
								<td><?php print($row['bairo']); ?></td>
								<td><?php print($row['referido1']); ?></td>

								<td><?php print($row['ocb']); ?></td>
								<td><?php print($row['data_digitacao']); ?></td>



								<td align="center">

								<a href="edit_reference.php?edit_id=<?php print($row['reference_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</td>
								<td align="center">
								<a href=""><i class="" aria-hidden="true"></i></a>
								</td>
								</tr>
								<?php
			}
		}
		else
		{
			?>
						<tr>
						<td>Sem nenhum resultado...</td>
						</tr>
						<?php
		}

	}

	public function dataview_ListaCovs($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


								<tr>
								<td><?php print($row['listaCovs_id']); ?></td>
								<td><?php print($row['provincia']); ?></a> </td>
								<td><?php print($row['destrito']); ?></td>
								<td><?php print($row['nome_aluno']); ?></td>
								<td><?php print($row['idade']); ?></td>
								<td><?php print($row['genero']); ?></td>
								<td><?php print($row['nome_escola']); ?></td>
								<td><?php print($row['nomeOCB']); ?></td>
								<td><?php print($row['data_digitacao']); ?></td>

								<td align="center">

								<a href="edit_ListaCovs.php?edit_id=<?php print($row['listaCovs_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</td>
								<td align="center">
								<a href="deleteListaCov.php?delete_id=<?php print($row['listaCovs_id']); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
								</td>
								</tr>
								<?php
			}
		}
		else
		{
			?>
						<tr>
						<td>Sem nenhum resultado...</td>
						</tr>
						<?php
		}

}
public function dataview_ListaCovsDG($query){

	$stmt = $this->db->prepare($query);
	$stmt->execute();

	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>


							<tr>
							<td><?php print($row['listaCovs_id']); ?></td>
							<td><?php print($row['provincia']); ?></a> </td>
							<td><?php print($row['destrito']); ?></td>
							<td><?php print($row['nome_aluno']); ?></td>
							<td><?php print($row['idade']); ?></td>
							<td><?php print($row['genero']); ?></td>
							<td><?php print($row['nome_escola']); ?></td>
							<td><?php print($row['nomeOCB']); ?></td>
							<td><?php print($row['data_digitacao']); ?></td>

							<td align="center">

							<a href="edit_ListaCovs.php?edit_id=<?php print($row['listaCovs_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
							<td align="center">
							<a href=""><i class="" aria-hidden="true"></i></a>
							</td>
							</tr>
							<?php
		}
	}
	else
	{
		?>
					<tr>
					<td>Sem nenhum resultado...</td>
					</tr>
					<?php
	}

}
	public function dataview_servicos($query){

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>


								<tr>
								<td><?php print($row['servicosBross_id']); ?></td>
								<td><?php print($row['nome']); ?></a> </td>
								<td><?php print($row['provincia']); ?></td>
								<td><?php print($row['destrito']); ?></td>
								<td><?php print($row['bairro']); ?></td>
								<td><?php print($row['ocb']); ?></td>
								<td><?php print($row['actvista']); ?></td>
								<td><?php print($row['modificado']); ?></td>
								<td><?php print($row['data_digitacao']); ?></td>



								<td align="center">

								<a href="edit_servico.php?edit_id=<?php print($row['servicosBross_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</td>
								<td align="center">
								<a href="delete_servicos.php?delete_id=<?php print($row['servicosBross_id']); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
								</td>
								</tr>
								<?php
			}
		}
		else
		{
			?>
						<tr>
						<td>Sem nenhum resultado...</td>
						</tr>
						<?php
		}

}
public function dataview_servicosDG($query){

	$stmt = $this->db->prepare($query);
	$stmt->execute();

	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>


							<tr>
								<td><?php print($row['servicosBross_id']); ?></td>
								<td><?php print($row['nome']); ?></a> </td>
								<td><?php print($row['provincia']); ?></td>
								<td><?php print($row['destrito']); ?></td>
								<td><?php print($row['bairro']); ?></td>
								<td><?php print($row['ocb']); ?></td>
								<td><?php print($row['actvista']); ?></td>
								<td><?php print($row['modificado']); ?></td>
								<td><?php print($row['data_digitacao']); ?></td>

								<td align="center">

							<a href="edit_servico.php?edit_id=<?php print($row['servicosBross_id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							</td>
							<td align="center">
							<a href=""><i class="" aria-hidden="true"></i></a>
							</td>
							</tr>
							<?php
		}
	}
	else
	{
		?>
					<tr>
					<td>Sem nenhum resultado...</td>
					</tr>
					<?php
	}

}
	public function paging($query,$records_per_page)
	{
		$starting_position=0;

		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}

	public function paginglink($query,$records_per_page)
	{

		$self = $_SERVER['PHP_SELF'];

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		$total_no_of_records = $stmt->rowCount();

		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?page_no=1'>First</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>Proximo</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Ultimo</a></li>";
			}
			?></ul><?php
		}
	}

	public function serv1($query,$ocb,$nivel){

		$stmt = $this->db->prepare($query);
		$stmt->execute();
		$servico_ID = array();



		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))


			{


	 $servico_ID[] = $row['benificiario_id'];



		}
		}
		else
		{
		?>

			<?php
		}
		$final_result = implode("' , '" ,$servico_ID);


		if ($nivel==1 || $nivel==2 ) {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
			$stmt->execute();
			if($stmt->rowCount()>0)
			{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>


			<tr>
				<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
				<td><?php print($row['cod_agregado']); ?></td>
				<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
				<td><?php print($row['idade']); ?></td>
				<td><?php print($row['sexo']); ?></td>
				<td><?php print($row['provincia']); ?></td>
				<td><?php print($row['localidade']); ?></td>
				<td><?php print($row['bairro']); ?></td>
				<td><?php print($row['Contato']); ?></td>

			</tr>

			</tr>
							<?php
			}

			}
			else
			{
			?>

					<?php
			}

		}
		else {
			$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
			$stmt->execute(array(":ocb"=>$ocb));
			if($stmt->rowCount()>0)
			{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>


			<tr>
				<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
				<td><?php print($row['cod_agregado']); ?></td>
				<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
				<td><?php print($row['idade']); ?></td>
				<td><?php print($row['sexo']); ?></td>
				<td><?php print($row['provincia']); ?></td>
				<td><?php print($row['localidade']); ?></td>
				<td><?php print($row['bairro']); ?></td>
				<td><?php print($row['Contato']); ?></td>

			</tr>

			</tr>
							<?php
			}

			}
			else
			{
			?>
					<tr>
					<td>Sem nenhum resultado...</td>

					</tr>
						<?php
			}

		}
		}


public function Data_serv1($query,$ocb,$nivel){

	$stmt = $this->db->prepare($query);
	$stmt->execute();
	  $servico_ID = array();



	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))


		{

			 $alimentacao=$row['alimentacao'];
			  $educacao=$row['educacao'];
				 $ajuda_legal=$row['ajuda_legal'];
				  $saude=$row['saude'];
					 $psico_social=$row['Psico_Social'];
					  $apoio_financeiro=$row['apoio_financeiro'];
						 $apoio_habitacional=$row['apoio_habitacional'];


									$conta1=substr_count($alimentacao,"N");
									$conta2=substr_count($alimentacao,"R");
									$conta3=substr_count($saude,"N");
									$conta4=substr_count($saude,"R");
									$conta5=substr_count($educacao,"N");
									$conta6=substr_count($educacao,"R");
									$conta7=substr_count($ajuda_legal,"N");
									$conta8=substr_count($ajuda_legal,"R");
									$conta9=substr_count($psico_social,"N");
									$conta10=substr_count($psico_social,"R");
									$conta11=substr_count($apoio_financeiro,"N");
									$conta12=substr_count($apoio_financeiro,"R");
									$conta13=substr_count($apoio_habitacional,"N");
									$conta14=substr_count($apoio_habitacional,"R");



					if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==1){

?>

<?php $servico_ID[] = $row['benificiario_id'];
}
else
			{
				?>

							<?php
			}


}
}
else
{
?>

		<?php
}
$final_result = implode("' , '" ,$servico_ID);

if ($nivel==1 || $nivel==2 ) {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>
			</tr>
			<?php
	}

}
else {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
	$stmt->execute(array(":ocb"=>$ocb));
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>

			</tr>
				<?php
	}

}





}




public function Data_serv2($query,$ocb,$nivel){

	$stmt = $this->db->prepare($query);
	$stmt->execute();
	  $servico_ID = array();



	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))


		{

			 $alimentacao=$row['alimentacao'];
			  $educacao=$row['educacao'];
				 $ajuda_legal=$row['ajuda_legal'];
				  $saude=$row['saude'];
					 $psico_social=$row['Psico_Social'];
					  $apoio_financeiro=$row['apoio_financeiro'];
						 $apoio_habitacional=$row['apoio_habitacional'];


									$conta1=substr_count($alimentacao,"N");
									$conta2=substr_count($alimentacao,"R");
									$conta3=substr_count($saude,"N");
									$conta4=substr_count($saude,"R");
									$conta5=substr_count($educacao,"N");
									$conta6=substr_count($educacao,"R");
									$conta7=substr_count($ajuda_legal,"N");
									$conta8=substr_count($ajuda_legal,"R");
									$conta9=substr_count($psico_social,"N");
									$conta10=substr_count($psico_social,"R");
									$conta11=substr_count($apoio_financeiro,"N");
									$conta12=substr_count($apoio_financeiro,"R");
									$conta13=substr_count($apoio_habitacional,"N");
									$conta14=substr_count($apoio_habitacional,"R");



					if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==2){

?>

<?php $servico_ID[] = $row['benificiario_id'];
}
else
			{
				?>

							<?php
			}


}
}
else
{
?>

		<?php
}
$final_result = implode("' , '" ,$servico_ID);

if ($nivel==1 || $nivel==2 ) {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>
			</tr>
			<?php
	}

}
else {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
	$stmt->execute(array(":ocb"=>$ocb));
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>

			</tr>
				<?php
	}

}





}
public function Data_serv3($query,$ocb,$nivel){

	$stmt = $this->db->prepare($query);
	$stmt->execute();
	  $servico_ID = array();



	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))


		{

			 $alimentacao=$row['alimentacao'];
			  $educacao=$row['educacao'];
				 $ajuda_legal=$row['ajuda_legal'];
				  $saude=$row['saude'];
					 $psico_social=$row['Psico_Social'];
					  $apoio_financeiro=$row['apoio_financeiro'];
						 $apoio_habitacional=$row['apoio_habitacional'];


									$conta1=substr_count($alimentacao,"N");
									$conta2=substr_count($alimentacao,"R");
									$conta3=substr_count($saude,"N");
									$conta4=substr_count($saude,"R");
									$conta5=substr_count($educacao,"N");
									$conta6=substr_count($educacao,"R");
									$conta7=substr_count($ajuda_legal,"N");
									$conta8=substr_count($ajuda_legal,"R");
									$conta9=substr_count($psico_social,"N");
									$conta10=substr_count($psico_social,"R");
									$conta11=substr_count($apoio_financeiro,"N");
									$conta12=substr_count($apoio_financeiro,"R");
									$conta13=substr_count($apoio_habitacional,"N");
									$conta14=substr_count($apoio_habitacional,"R");



					if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==3){

?>

<?php $servico_ID[] = $row['benificiario_id'];
}
else
			{
				?>

							<?php
			}


}
}
else
{
?>

		<?php
}
$final_result = implode("' , '" ,$servico_ID);

if ($nivel==1 || $nivel==2 ) {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>
			</tr>
			<?php
	}

}
else {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
	$stmt->execute(array(":ocb"=>$ocb));
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>

			</tr>
				<?php
	}

}





	}


public function Data_serv4($query,$ocb,$nivel){

	$stmt = $this->db->prepare($query);
	$stmt->execute();
	  $servico_ID = array();



	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))


		{

			 $alimentacao=$row['alimentacao'];
			  $educacao=$row['educacao'];
				 $ajuda_legal=$row['ajuda_legal'];
				  $saude=$row['saude'];
					 $psico_social=$row['Psico_Social'];
					  $apoio_financeiro=$row['apoio_financeiro'];
						 $apoio_habitacional=$row['apoio_habitacional'];


									$conta1=substr_count($alimentacao,"N");
									$conta2=substr_count($alimentacao,"R");
									$conta3=substr_count($saude,"N");
									$conta4=substr_count($saude,"R");
									$conta5=substr_count($educacao,"N");
									$conta6=substr_count($educacao,"R");
									$conta7=substr_count($ajuda_legal,"N");
									$conta8=substr_count($ajuda_legal,"R");
									$conta9=substr_count($psico_social,"N");
									$conta10=substr_count($psico_social,"R");
									$conta11=substr_count($apoio_financeiro,"N");
									$conta12=substr_count($apoio_financeiro,"R");
									$conta13=substr_count($apoio_habitacional,"N");
									$conta14=substr_count($apoio_habitacional,"R");



					if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==4){

?>

<?php $servico_ID[] = $row['benificiario_id'];
}
else
			{
				?>

							<?php
			}


}
}
else
{
?>

		<?php
}
$final_result = implode("' , '" ,$servico_ID);

if ($nivel==1 || $nivel==2 ) {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>
			</tr>
			<?php
	}

}
else {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
	$stmt->execute(array(":ocb"=>$ocb));
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>

			</tr>
				<?php
	}

}





	}



public function Data_serv5($query,$ocb,$nivel){

	$stmt = $this->db->prepare($query);
	$stmt->execute();
	  $servico_ID = array();



	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))


		{

			 $alimentacao=$row['alimentacao'];
			  $educacao=$row['educacao'];
				 $ajuda_legal=$row['ajuda_legal'];
				  $saude=$row['saude'];
					 $psico_social=$row['Psico_Social'];
					  $apoio_financeiro=$row['apoio_financeiro'];
						 $apoio_habitacional=$row['apoio_habitacional'];


									$conta1=substr_count($alimentacao,"N");
									$conta2=substr_count($alimentacao,"R");
									$conta3=substr_count($saude,"N");
									$conta4=substr_count($saude,"R");
									$conta5=substr_count($educacao,"N");
									$conta6=substr_count($educacao,"R");
									$conta7=substr_count($ajuda_legal,"N");
									$conta8=substr_count($ajuda_legal,"R");
									$conta9=substr_count($psico_social,"N");
									$conta10=substr_count($psico_social,"R");
									$conta11=substr_count($apoio_financeiro,"N");
									$conta12=substr_count($apoio_financeiro,"R");
									$conta13=substr_count($apoio_habitacional,"N");
									$conta14=substr_count($apoio_habitacional,"R");



					if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==5){

?>

<?php $servico_ID[] = $row['benificiario_id'];
}
else
			{
				?>

							<?php
			}


}
}
else
{
?>

		<?php
}
$final_result = implode("' , '" ,$servico_ID);

if ($nivel==1 || $nivel==2 ) {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>
			</tr>
			<?php
	}

}
else {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
	$stmt->execute(array(":ocb"=>$ocb));
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>

			</tr>
				<?php
	}

}





	}


public function Data_serv6($query,$ocb,$nivel){

	$stmt = $this->db->prepare($query);
	$stmt->execute();
	  $servico_ID = array();



	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))


		{

			 $alimentacao=$row['alimentacao'];
			  $educacao=$row['educacao'];
				 $ajuda_legal=$row['ajuda_legal'];
				  $saude=$row['saude'];
					 $psico_social=$row['Psico_Social'];
					  $apoio_financeiro=$row['apoio_financeiro'];
						 $apoio_habitacional=$row['apoio_habitacional'];


									$conta1=substr_count($alimentacao,"N");
									$conta2=substr_count($alimentacao,"R");
									$conta3=substr_count($saude,"N");
									$conta4=substr_count($saude,"R");
									$conta5=substr_count($educacao,"N");
									$conta6=substr_count($educacao,"R");
									$conta7=substr_count($ajuda_legal,"N");
									$conta8=substr_count($ajuda_legal,"R");
									$conta9=substr_count($psico_social,"N");
									$conta10=substr_count($psico_social,"R");
									$conta11=substr_count($apoio_financeiro,"N");
									$conta12=substr_count($apoio_financeiro,"R");
									$conta13=substr_count($apoio_habitacional,"N");
									$conta14=substr_count($apoio_habitacional,"R");



					if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==6){

?>

<?php $servico_ID[] = $row['benificiario_id'];
}
else
			{
				?>

							<?php
			}


}
}
else
{
?>

		<?php
}
$final_result = implode("' , '" ,$servico_ID);

if ($nivel==1 || $nivel==2 ) {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>
			</tr>
			<?php
	}

}
else {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
	$stmt->execute(array(":ocb"=>$ocb));
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>

			</tr>
				<?php
	}

}





	}


public function Data_serv7($query,$ocb,$nivel){

	$stmt = $this->db->prepare($query);
	$stmt->execute();
	  $servico_ID = array();



	if($stmt->rowCount()>0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))


		{

			 $alimentacao=$row['alimentacao'];
			  $educacao=$row['educacao'];
				 $ajuda_legal=$row['ajuda_legal'];
				  $saude=$row['saude'];
					 $psico_social=$row['Psico_Social'];
					  $apoio_financeiro=$row['apoio_financeiro'];
						 $apoio_habitacional=$row['apoio_habitacional'];


									$conta1=substr_count($alimentacao,"N");
									$conta2=substr_count($alimentacao,"R");
									$conta3=substr_count($saude,"N");
									$conta4=substr_count($saude,"R");
									$conta5=substr_count($educacao,"N");
									$conta6=substr_count($educacao,"R");
									$conta7=substr_count($ajuda_legal,"N");
									$conta8=substr_count($ajuda_legal,"R");
									$conta9=substr_count($psico_social,"N");
									$conta10=substr_count($psico_social,"R");
									$conta11=substr_count($apoio_financeiro,"N");
									$conta12=substr_count($apoio_financeiro,"R");
									$conta13=substr_count($apoio_habitacional,"N");
									$conta14=substr_count($apoio_habitacional,"R");



					if($conta1+$conta2+$conta3+$conta4+$conta5+$conta6+$conta7+$conta8+$conta9+$conta10+$conta11+$conta12+$conta13+$conta14==7){

?>

<?php $servico_ID[] = $row['benificiario_id'];
}
else
			{
				?>

							<?php
			}


}
}
else
{
?>

		<?php
}
$final_result = implode("' , '" ,$servico_ID);

if ($nivel==1 || $nivel==2 ) {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE benificiario_id IN ('$final_result') ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>
			</tr>
			<?php
	}

}
else {
	$stmt = $this->db->prepare("SELECT * FROM reg_ben WHERE nome_da_cbo=:ocb AND benificiario_id IN ('$final_result') ");
	$stmt->execute(array(":ocb"=>$ocb));
	if($stmt->rowCount()>0)
	{
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
	?>


	<tr>
		<td> <a href="#"><?php print($row['cod_beneficiario']); ?></a> </td>
		<td><?php print($row['cod_agregado']); ?></td>
		<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['nome']); ?></a> </td>
		<td><?php print($row['idade']); ?></td>
		<td><?php print($row['sexo']); ?></td>
		<td><?php print($row['provincia']); ?></td>
		<td><?php print($row['localidade']); ?></td>
		<td><?php print($row['bairro']); ?></td>
		<td><?php print($row['Contato']); ?></td>

	</tr>

	</tr>
					<?php
	}

	}
	else
	{
	?>
			<tr>
			<td>Sem nenhum resultado...</td>

			</tr>
				<?php
	}

}




	}



}
