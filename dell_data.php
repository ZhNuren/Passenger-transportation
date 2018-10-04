<?php
$mysqli = new mysqli("localhost", "root", "", "db_transport");

$id=$_GET['id'];
$strSQL ="delete from orders WHERE Order_ID = '$id'";
$result=$mysqli->query($strSQL);


IF($result){
	echo "<script>alert('Data succesfully deleted!!!');</script>";

} ELSE {

	echo "Something went wrong";
	echo mysql_error();
	
}

?>
<?php include 'booking.php'; ?>
