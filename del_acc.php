<?php
$mysqli = new mysqli("localhost", "root", "", "db_transport");

$id=$_GET['id'];
$strSQL ="delete from accounts WHERE Login = '$id'";
$result=$mysqli->query($strSQL);


IF($result){
	echo "<script>alert('User succesfully deleted!!!');</script>";


} ELSE {

	echo "<script>alert('You cannot delete this account because he has incompleted orders!!!');</script>";
	echo mysql_error();
	
}

?>

<?php include 'accounts.php'; ?>