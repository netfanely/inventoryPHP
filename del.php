<?php
  include("db.php");

	$id =$_REQUEST['DVDID'];


	// sending query
	$sql = "DELETE FROM dvds WHERE DVDID = '$id'";
	$result = $conn->query($sql);

	header("Location: index.php");
?>
