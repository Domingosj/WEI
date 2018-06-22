<?php

	require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

	$nivel = $userRow['nivel'];

?>

<?php



require_once("class.user.php");
$auth_user = new USER();

if(isset($_GET['delete_id']))
{$id =$_GET['delete_id'];}


$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id= $id");
$stmt->execute();

?>

<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$auth_user->delete_user($id);
	header("Location: userTable.php");
}
elseif(isset($_POST['btn-del'])) {
	$auth_user->delete_user($id);
	header("Location: userTable.php");
}

?>

<?php include_once 'includes/header.php'; ?>

<div class="clearfix"></div>

<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
    <div class="alert alert-success">
    	<strong>Sucesso!</strong> dado removido ...
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
    	pretende remover ?
		</div>
        <?php
	}
	?>
</div>

<div class="clearfix"></div>

<div class="container">

<?php

	?>
			<table class='table table-bordered'>
			<tr>
				<th>Username</th>
				<th>User email</th>
				<th>Provincia</th>
				<th>distrito</th>
				<th>contacto</th>
				<th>nivel</th>
				<th>Cod digitador</th>
			</tr>
			<?php


			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					?>


					<tr>
						<td> <a href="#"><?php print($row['user_name']); ?></a> </td>
						<td><?php print($row['user_email']); ?></td>
						<td> <a href="userDet.php?edit_id=<?php print($row['benificiario_id']); ?>"><?php print($row['provincia']); ?></a> </td>
						<td><?php print($row['distrito']); ?></td>
						<td><?php print($row['contacto']); ?></td>
						<td><?php print($row['nivel']); ?></td>
						<td><?php print($row['cod_digitador']); ?></td>

					</tr>
					<?php
			}
			?>
			</table>
			<?php
}

?>
</div>

<div class="container">
<p>
<?php
if(isset($_GET['delete_id']))
{
?>
 <form method="post">
 <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>" />
 <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; SIM</button>
 <a href="userTable.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NAO</a>
 </form>
<?php
}
else
{
?>
 <a href="servicos_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>
 <?php
}
?>

</p>
</div>
