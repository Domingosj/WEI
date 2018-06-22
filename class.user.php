<?php

require_once('dbconfig.php');

class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function delete_user($id)
	{
		$stmt = $this->conn->prepare("DELETE FROM users WHERE user_id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}

	public function register($uname,$sexo,$umail,$ocb,$upass,$provincia,$distrito,$contacto,$nivel,$cod_digitador,$area_actuacao)
	{
		try
		{


			$new_password = password_hash($upass, PASSWORD_DEFAULT);

			$stmt = $this->conn->prepare( "INSERT INTO users(user_name,sexo,user_email,ocb,user_pass,provincia,distrito,contacto,nivel,cod_digitador,area_actuacao)
		                                          VALUES(:uname,:sexo,:umail,:ocb,:upass,:provincia,:distrito,:contacto,:nivel,:cod_digitador,:area_actuacao) ");

			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":sexo", $sexo);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":ocb", $ocb);
			$stmt->bindparam(":upass", $new_password);
			$stmt->bindparam(":provincia", $provincia);
			$stmt->bindparam(":distrito", $distrito);
			$stmt->bindparam(":contacto", $contacto);
			$stmt->bindparam(":nivel", $nivel);
			$stmt->bindparam(":cod_digitador", $cod_digitador);
			$stmt->bindparam(":area_actuacao", $area_actuacao);

			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function update($id,$uname,$sexo,$umail,$ocb,$upass,$provincia,$distrito,$contacto,$nivel,$cod_digitador,$area_actuacao)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);

			$stmt = $this->conn->prepare( "UPDATE users SET user_name=:uname,sexo=:sexo,user_email=:umail,ocb=:ocb,user_pass=:upass,provincia=:provincia,distrito=:distrito,contacto=:contacto,nivel=:nivel,cod_digitador=:cod_digitador,area_actuacao=:area_actuacao
																							WHERE user_id=:id ");

			$stmt->bindparam(":id", $id);
			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":sexo", $sexo);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":ocb", $ocb);
			$stmt->bindparam(":upass", $new_password);
			$stmt->bindparam(":provincia", $provincia);
			$stmt->bindparam(":distrito", $distrito);
			$stmt->bindparam(":contacto", $contacto);
			$stmt->bindparam(":nivel", $nivel);
			$stmt->bindparam(":cod_digitador", $cod_digitador);
			$stmt->bindparam(":area_actuacao", $area_actuacao);

			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function updatePass($id,$upass)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);

			$stmt = $this->conn->prepare( "UPDATE users SET user_pass=:upass WHERE user_id=:id ");

			$stmt->bindparam(":id", $id);
			$stmt->bindparam(":upass", $new_password);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


		public function dataview_user($query){

			$stmt = $this->conn->prepare($query);
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>


					<tr>
					<td><?php print($row['user_name']); ?></td>
					<td><?php print($row['user_email']); ?></td>


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


		public function doLogin($uname,$umail,$upass)
		{
			try
			{
				$stmt = $this->conn->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail ");
				$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if($stmt->rowCount() == 1)
				{
					if(password_verify($upass, $userRow['user_pass']) and $upass != '1234' )
					{
						$_SESSION['user_session'] = $userRow['user_id'];
						return true;
					}
					elseif (password_verify('1234', $userRow['user_pass'])) {
						$_SESSION['user_session'] = $userRow['user_id'];
						header("Location: changePass.php");


					}
					else
					{
						return false;
					}
				}
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}




	// public function doLogin($uname,$umail,$upass)
	// {
	// 	try
	// 	{
	//
	// 		$stmt = $this->conn->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail ");
	// 		$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
	// 		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	//
	// 		$unashedPass =
	//
	//
	// 		if ($upass== "1234") {
	//
	//
	//
	// 			if($stmt->rowCount() == 1)
	// 			{
	// 				$_SESSION['user_session'] = $userRow['user_id'];
	//
	// 			}
	//
	// 			header("Location: changePass.php");
	// 		}
	// 		elseif ($upass != $userRow['user_id']) {
	// 			header("Location: dashboard.php");
	// 		}
	//
	//
	//
	// 	}
	// 	catch(PDOException $e)
	// 	{
	// 		echo $e->getMessage();
	// 	}
	// }

	public function userDataView($query)
	{
		try
		{
			$stmt = $this->db->prepare($query);

			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['user_pass']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>
