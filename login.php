    <?php
session_start();
$conn = mysqli_connect("localhost","root","","library"); 
		if(isset($_POST['Sign']))
		{
			$firstname = $_POST['Username'];
			$pass = $_POST['Password'];
			$query = "select * from student_info where username ='$firstname' AND password ='$pass'";
			$result = mysqli_query($conn, $query);
			$p = mysqli_num_rows($result); 
			if($firstname == "Admin" && $pass == "Admin") {
				echo "<script> alert('Admin login Successfull'); window.location.href= 'admin.php' </script> ";
			} 
			if($p == 1)
			{
				$_SESSION['nuser'] = $firstname;
				echo "<script> alert('Login SuccessFull !!!!'); window.location.href = 'user.php'; </script> ";	
			}
			else
			{
				echo "<script> alert('Login Failed !!!!'); </script>";
			}
		}
		
?>