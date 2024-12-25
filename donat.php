<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','donat');
	$query = mysqli_query($connect, "SELECT * FROM projects WHERE id = '{$_GET["id"]}'");
	$stroka = $query -> fetch_assoc();
	$donate = $stroka["donated"]+10;
	mysqli_query($connect,"UPDATE projects SET donated = $donate WHERE id ='{$_GET["id"]}'");
	header("Location:index.php")
?>
