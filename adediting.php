<?php 
$mysqli = mysqli_connect("localhost","root","", "db_transport")or die(mysqli_error());
$Id=$_POST['travel']; 
$Place=$_POST['place']; 
$Distance=$_POST['distance']; 
$Seat=$_POST['cost']; 
$result=$mysqli->query("update travelplace set Place='$Place', Distance='$Distance', 
Seat_Price='$Seat' where Travel_ID='$Id'"); 
IF(!$result){ 
echo "<script>alert('This destination already exists!!!');</script>"; 
} ELSE { 
echo "<script>alert('The data of destination has been updated!!!');</script>"; 
} 
?>
<?php include 'addestinations.php' ?>