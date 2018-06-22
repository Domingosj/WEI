<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->delete_mac($id);
	header("Location: delete_mac.php?deleted");
}
elseif(isset($_POST['btn-del-mac'])) {
	$id = $_GET['delete_id'];
	$crud->delete($id);
	header("Location: delete_mac.php?deleted");
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
    	<strong>Sucesso!</strong> dado removido...
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
if(isset($_GET['delete_id']))
{
	?>
			<table class='table table-bordered'>
			<tr>
			<th>#</th>
			<th>Nome Completo</th>
			<th>Idade</th>
			<th>provincia</th>
			<th>Genero</th>
			</tr>
			<?php
			$stmt = $DB_con->prepare("SELECT * FROM mac WHERE MAC_id=:id");
			$stmt->execute(array(":id"=>$_GET['delete_id']));
			while($row=$stmt->fetch(PDO::FETCH_BOTH))
			{
					?>
					<tr>
					 <td><?php print($row['MAC_id']); ?></td>
					 <td><?php print($row['nome']); ?></td>
					 <td><?php print($row['idade']); ?></td>
					 <td><?php print($row['provincia']); ?></td>
					 <td><?php print($row['sexo']); ?></td>
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
 <input type="hidden" name="id" value="<?php echo $row['MAC_id']; ?>" />
 <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; SIM</button>
 <a href="mac_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NAO</a>
 </form>
<?php
}
else
{
?>
 <a href="mac_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>
 <?php
}
?>

</p>
</div>
