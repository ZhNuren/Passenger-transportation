<?php
$mysqli = new mysqli("localhost", "root", "", "db_transport");

$id=$_GET['id'];
$strSQL ="delete from travelplace WHERE Travel_ID = '$id'";
$result=$mysqli->query($strSQL);


IF($result){
	echo "<script>alert('Data succesfully deleted!!!');</script>";


} ELSE {

	echo "<script>alert('Destination cannot be deleted until there is order with that destination!!!');</script>"; 
	
}

?>

<?php include 'addestinations.php'; ?>
