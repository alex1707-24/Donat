<?php 
	$connect = mysqli_connect('MySQL-8.2','root','','donat');
	$query = mysqli_query($connect,"INSERT INTO projects(title,text,goal,donated,img,user) VALUES ('{$_GET["title"]}', '{$_GET["text"]}','{$_GET["goal"]}','{$_GET["donated"]}','{$_GET["img"]}','{$_GET["user"]}')");
	header("Location:add.php");	
?>