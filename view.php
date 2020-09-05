<?php
require("db.php");
$id =$_REQUEST['DVDID'];


$sql = "SELECT * FROM dvds WHERE DVDID  = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if (!$sql)
		{
		die("Error: Data not found..");
		}
		$categoria=$row['CATEGORIA'] ;
		$tema= $row['TEMA'] ;
		$fecha=$row['FECHA'] ;
		$discos=$row['DISCOS'] ;
		$packs=$row['PACKS'] ;
		$caja=$row['CAJA'] ;

if(isset($_POST['save']))
{
	$categoria_save=$_POST['CATEGORIA'] ;
	$tema_save= $_POST['TEMA'] ;
	$fecha_save=$_POST['FECHA'] ;
	$discos_save=$_POST['DISCOS'] ;
	$packs_save=$_POST['PACKS'] ;
	$caja_save=$_POST['CAJA'] ;

	$stmt = $conn->prepare("UPDATE dvds SET CATEGORIA ='$categoria_save', TEMA ='$tema_save',
	FECHA ='$fecha_save',DISCOS ='$discos_save',PACKS ='$packs_save',CAJA ='$caja_save' WHERE DVDID = '$id'");
	$stmt->execute();

	echo "Saved!";

	header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<table>
	<tr>
		<td>Categoria : </td>
		<td><input type="text" name="title" value="<?php echo $categoria ?>"/></td>
	</tr>
	<tr>
		<td>Tema : </td>
		<td><input type="text" name="author" value="<?php echo $tema ?>"/></td>
	</tr>
	<tr>
		<td>Fecha : </td>
		<td><input type="text" name="name" value="<?php echo $fecha ?>"/></td>
	</tr>
	<tr>
		<td>Discos : </td>
		<td><input type="text" name="copy" value="<?php echo $discos ?>"/></td>
	</tr>
	<tr>
		<td>Packs : </td>
		<td><input type="text" name="copy" value="<?php echo $packs ?>"/></td>
	</tr>
	<tr>
			<td>Caja : </td>
			<td><input type="text" name="copy" value="<?php echo $caja ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
