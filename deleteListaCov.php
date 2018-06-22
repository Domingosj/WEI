<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->delete_listaCov($id);
	header("Location: deleteListaCov.php?deleted");
}
elseif(isset($_POST['btn-del-mac'])) {
	$id = $_GET['delete_id'];
	$crud->delete($id);
	header("Location: deleteListaCov.php?deleted");
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
      <th>Provincia</th>
      <th>Destrito</th>
      <th>Localidade</th>
      <th>Nome Completo</th>
      <th>Idade</th>
      <th>Genero</th>
      <th>Escola</th>
			</tr>
			<?php
			$stmt = $DB_con->prepare("SELECT * FROM lista_covs WHERE listaCovs_id=:id");
			$stmt->execute(array(":id"=>$_GET['delete_id']));
			while($row=$stmt->fetch(PDO::FETCH_BOTH))
			{
					?>
					<tr>
            <td><?php print($row['listaCovs_id']); ?></td>
            <td><?php print($row['provincia']); ?></a> </td>
            <td><?php print($row['destrito']); ?></td>
            <td><?php print($row['localidade']); ?></td>
            <td><?php print($row['nome_aluno']); ?></td>
            <td><?php print($row['idade']); ?></td>
            <td><?php print($row['genero']); ?></td>
            <td><?php print($row['nome_escola']); ?></td>
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
 <input type="hidden" name="id" value="<?php echo $row['listaCovs_id']; ?>" />
 <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; SIM</button>
 <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NAO</a>
 </form>
<?php
}
else
{
?>
 <a href="listaCovsTable.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Voltar</a>
 <?php
}
?>

</p>
</div>
