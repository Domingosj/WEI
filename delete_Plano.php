<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->delete_plano($id);
	header("Location: delete_Plano.php?deleted");
}
elseif(isset($_POST['btn-del-mac'])) {
	$id = $_GET['delete_id'];
	$crud->delete($id);
	header("Location: delete_Plano.php?deleted");
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
			<th>Destrito</th>
			<th>Area de Servico</th>
			<th>Nome da OCB</th>
			<th>Codigo Beneficiario</th>
			</tr>
			<?php
			$stmt = $DB_con->prepare("SELECT * FROM planoacao WHERE id_plano=:id");
			$stmt->execute(array(":id"=>$_GET['delete_id']));
			while($row=$stmt->fetch(PDO::FETCH_BOTH))
			{
					?>
					<tr>
						<td><?php print($row['nomeCrianca']); ?></td>
						<td><?php print($row['distrito']); ?></td>
						<td><?php print($row['areaServico']); ?></td>
						<td><?php print($row['nomeOCB']); ?></td>
						<td><?php print($row['codBen']); ?></td>

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
 <input type="hidden" name="id" value="<?php echo $row['servicosBross_id']; ?>" />
 <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; SIM</button>
 <a href="planoAcao_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NAO</a>
 </form>
<?php
}
else
{
?>
 <a href="planoAcao_table.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>
 <?php
}
?>

</p>
</div>
