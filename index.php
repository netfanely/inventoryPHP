<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Books</title>
</head>
<body class="text-center">
<form method="post">
<table>

	<tr>
		<td>Categoria : </td>
		<td><input class="form-control" type="text" name="CATEGORIA" /></td>
	</tr>
	<tr>
		<td>Tema : </td>
		<td><input class="form-control" type="text" name="TEMA" /></td>
	</tr>
	<tr>
		<td>Fecha : </td>
		<td><input class="form-control" type="text" name="FECHA" /></td>
	</tr>
	<tr>
		<td>Discos : </td>
		<td><input  class="form-control" type="text" name="DISCOS" /></td>
	</tr>
	<tr>
		<td>Packs : </td>
		<td><input  class="form-control" type="text" name="PACKS" /></td>
	</tr>
	<tr>
		<tr>
			<td>Caja : </td>
			<td><input  class="form-control" type="text" name="CAJA" value="0"/></td>
		</tr>
		<td>&nbsp;</td>
		<td><input type="submit" class="btn btn-primary" name="submit" value="add" /></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{
	include 'db.php';

			 		$categoria=$_POST['CATEGORIA'] ;
					$tema= $_POST['TEMA'] ;
					$fecha=$_POST['FECHA'] ;
					$discos=$_POST['DISCOS'] ;
					$packs=$_POST['PACKS'] ;
					$caja=$_POST['CAJA'] ;

		$sql = "INSERT INTO `dvds`(CATEGORIA,TEMA,FECHA,DISCOS,PACKS,CAJA)
		VALUES ('$categoria','$tema','$fecha','$discos','$packs','$caja')";
		$result = $conn->query($sql);


	        }
?>
</form>
<table border="1" class="table">

			<?php
			include("db.php");


			$sql = "SELECT * FROM dvds";
			$result = $conn->query($sql);
			/*INSERTAR ENCABEZADO*/

			while($row = $result->fetch_assoc())
			{
				$id = $row['DVDID'];
				echo "<tr align='center'>";
				echo"<td><font color='black'>" .$row['DVDID']."</font></td>";
				echo"<td><font color='black'>" .$row['CATEGORIA']."</font></td>";
				echo"<td><font color='black'>". $row['TEMA']. "</font></td>";
				echo"<td><font color='black'>". $row['FECHA']. "</font></td>";
				echo"<td><font color='black'>". $row['DISCOS']. "</font></td>";
				echo"<td><font color='black'>". $row['PACKS']. "</font></td>";
				echo"<td><font color='black'>". $row['CAJA']. "</font></td>";
				echo"<td> <a href ='view.php?DVDID=$id'>Edit</a>";
				echo"<td> <a href ='del.php?DVDID=$id'><center>Delete</center></a>";

				echo "</tr>";
			}
			?>
</table>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
</body>
</html>
