
<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$link = mysqli_connect('localhost', 'root', '', 'db_transport');
$message= mysqli_real_escape_string($link, $_POST['message']);
$mysqli = new mysqli("localhost", "root", "", "db_transport");
$qq="INSERT INTO chat (user, comments) VALUES ('".$_SESSION['Login']."','".$message."')";
$result=$mysqli->query($qq);
mysqli_close($mysqli);
IF(!$result){
	echo "<script>alert('Data insert failed!!!');</script>";
	echo mysql_error();
	
} 
?>
<?php include 'index3.php'?>