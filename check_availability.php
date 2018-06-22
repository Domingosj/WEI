<?php
require_once("DBController.php");
$db_handle = new DBController();


if(!empty($_POST["cdBeneficiario"])) {
  $query = "SELECT * FROM reg_ben WHERE cod_beneficiario='" . $_POST["cdBeneficiario"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<span class='text-danger'> O codigo ja existe. Por favor Verifique o codigo do beneficiario.</span>";
  }else{
      echo "<span class='text-success'>Codigo valido <i class='glyphicon fa-check Success'></i>.</span>  ";
  }
}
?>
