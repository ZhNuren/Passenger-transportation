<?php
 
session_start();

$link = mysqli_connect('localhost', 'root', '', 'db_transport');
$Place=mysqli_real_escape_string($link, $_POST['place']);
$Seat=mysqli_real_escape_string($link,$_POST['seat']);
$Date=mysqli_real_escape_string($link, $_POST['date']);
$mysqli = new mysqli("localhost", "root", "", "db_transport");
$qq="INSERT INTO orders (User, Place_ID, Seats, Date) VALUES ('".$_SESSION['Login']."','".$Place."','".$Seat."','".$Date."')";
$result=$mysqli->query($qq);
mysqli_close($mysqli);
IF(!$result){
	echo "<script>alert('Data insert failed!!!');</script>";
	echo mysql_error();
	
} ELSE {

echo "<script>alert('Seats succeffully ordered!!!');</script>";

	
}

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Passneger Transportation</title>
<link rel="stylesheet" href="css/registr.css">
<link rel="stylesheet" href="table.css">
<link rel="stylesheet" href="modal.css">
<link rel="stylesheet" href="animate.min.css">

<style>
#demotext {
    padding: 14px 16px;
font-size: 35px;
color: rgb(0, 89, 0);
text-shadow: rgb(255, 252, 168) 2px 2px 0px, rgb(156, 156, 156) 4px 4px 0px;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr{background-color: #f2f2f2}

th {
    background-color: #65c0bb;
    color: white;

}
.still {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #65c0bb;
}

.still li {
    float: left;
}

.still li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.still li a:hover:not(.active) {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
</style>
</head>
<body background="https://wallpapertag.com/wallpaper/full/0/a/4/418324-most-popular-hd-wood-background-1920x1080-desktop.jpg" bgcolor="beige" >
<body>
<div id="menu">
<ul class="still">
  <li class="animated bounce"><a href="index.php"><img src="http://www.iconarchive.com/download/i87036/graphicloads/colorful-long-shadow/Bus.ico" width="50" height="50" align="Minibus"> </img></a></li>
<font size="4"> 
  <li class="animated zoomInUp"><div id="demotext">Passenger Transportation</div></li>
  <li style="float:right"><?php 

    if($_SESSION['Login']){ 
        echo $_SESSION["Login"];
        echo '<a href="logout.php"><span>Logout</span></a></li>';
        }
    elseif(!$_SESSION['Login'])
	header ("Location: index2.php");
        
    ?>
  </font>
</ul>
</div>
<?php include 'menu.php'; ?>
<?php include 'sidebar.php'; ?>
<div id="content">

<table>
<tr>
	<th>Order №</th>
	<th>Customer</th>
	<th>Destination</th>
	<th>Seats</th>
	<th>Date</th>	
		<th>Edit</th>	

	<th>Delete</th>
	</tr>
 <?php 

$sql = "SELECT * FROM accounts INNER JOIN orders ON accounts.Login=orders.User INNER JOIN travelplace on travelplace.Travel_ID=orders.Place_ID WHERE Login="."'".$_SESSION['Login']."'";


$db = new mysqli('localhost', 'root', '', 'db_transport');

$res = $db->query($sql);

$data = array();

while($row = $res->fetch_assoc()){
	
	$data[] = $row;
	
}


foreach($data as $row){
	
	echo "<tr>";
	
	echo "<td>".$row['Order_ID']."</td>";
	echo "<td>".$row['Last_Name']."</td>";
	echo "<td>".$row['Place']."</td>";
	echo "<td>".$row['Seats']."</td>";	
	echo "<td>".$row['Date']."</td>";
	echo "<td><a href='edit.php?id=$row[Order_ID]'>Edit</a></td>";
	echo "<td><a href='dell_data.php?id=$row[Order_ID]'>Delete</a></td></tr>";
	
}

?> 

</table>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "db_transport"; 
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `travelplace`";
$result1 = mysqli_query($connect, $query);
?>
<ul class="still">
<li style="float: right;"><a href='#openModal'>Book</a></li>
<div id="openModal" class="modalDialog">
 <div>

        <a href="#close" title="Закрыть" class="close">X</a>

        <form action="addbook.php" method="post">
 <label>Destination: <select name="place">
 <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>
</select><br>
 <label>Seats: <input type="number" name="seat" placeholder= "2" min="1" max="7" title="Number of seats which going to order, no more than 7 seats" required /></label><br>
 <label>Date: <input type="date" name="date" title="Date of the trip" required /></label>
 <br><input type="submit" name="add" value="Add" />
</form>

    </div>
</div>

</div>
<?php include 'footer.php'; ?>