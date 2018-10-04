<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$link = mysqli_connect('localhost', 'root', '', 'db_transport');
$mysqli = new mysqli("localhost", "root", "", "db_transport");
$qq="truncate chat";
$result=$mysqli->query($qq);
mysqli_close($mysqli);
IF(!$result){
	echo "<script>alert('Data insert failed!!!');</script>";
	echo mysql_error();
	
} 
?>
<?php include 'index3.php'?>