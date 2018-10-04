<?php 
$mysqli = mysqli_connect("localhost","root","", "db_transport")or die(mysqli_error());
$Order=$_POST['order']; 
$Place=$_POST['place']; 
$Seat=$_POST['seat']; 
$Date=$_POST['date']; 
$result=$mysqli->query("update orders set Place_ID='$Place', Seats='$Seat', 
Date='$Date' where Order_ID='$Order'"); 
IF(!$result){ 
echo "<script>alert('Something has gone wrong!!!');</script>";
include 'edit.php';
} ELSE { 
echo "<script>alert('The data of order has been updated!!!');</script>"; 
} 
?>
<?php include 'booking.php' ?>