<?php
session_start();
	$p=$_SESSION['nuser'];
	$conn = mysqli_connect("localhost","root","","library"); 	
	$query = "select username from student_info where username = '$p' ";
	$result = mysqli_query($conn, $query);
	while ($res = mysqli_fetch_array($result)) 
	{
		$a = $res['username'];
	}
	if(!isset($a))
	{
		mysqli_close($conn);		
		header('Location: loginPage.php');
	}
	if(!isset($p))
	{
		mysqli_close($conn);		
		header('Location: loginPage.php');
	}
	?>