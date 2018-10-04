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
input[type=integer], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
box-sizing: border-box;}
input[type=submit] {
    width: 100%;
    background-color: #65c0bb;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #65c0bb;
}


</style>
</head>
<body background="https://wallpapertag.com/wallpaper/full/0/a/4/418324-most-popular-hd-wood-background-1920x1080-desktop.jpg" bgcolor="beige" >
<body>
<div id="menu">
<ul class="still">
  <li class="animated bounce"><a href="index3.php"><img src="http://www.iconarchive.com/download/i87036/graphicloads/colorful-long-shadow/Bus.ico" width="50" height="50" align="Minibus"> </img></a></li>
<font size="4"> 
  <li class="animated zoomInUp"><div id="demotext">Passenger Transportation</div></li>
  <li style="float:right"><?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if($_SESSION['Login']){ 
        echo $_SESSION["Login"];
        echo '<a href="logout.php"><span>Logout</span></a></li>';
        }
    elseif(!$_SESSION['Login']){
	header ("Location: index2.php");}
        
    ?>
  </font>
</ul>
</div>
<?php include 'menu2.php'; ?>
<?php include 'sidebar.php'; ?>
<div id="content">
<?php 
$mysqli = mysqli_connect("localhost","root","", "db_transport")or die(mysqli_error()); 
$UserID=$_GET['id']; 
$result=$mysqli->query("select * from travelplace WHERE Travel_ID='$UserID'"); 
IF (!$result){ 
echo "No Destination found"; 
exit; 
} 
$row=mysqli_fetch_array($result); 
?> 
<html> 
<form method="post" action="adediting.php"> 
<input type="hidden" name="travel" value="<?=$row['Travel_ID']?>" required> 
<br> 
Place: <input type="text" method="text" name="place" value="<?=$row['Place']?>" required> 
<br> <br> 
Distance: <input type="integer" method="text" name="distance" value="<?=$row['Distance']?>" required> 
<br> <br> 
Seat Price: <input type="integer" method="text" name="cost" value="<?=$row['Seat_Price']?>" required> 
<br> <br> 
<input type="submit" value="Edit"> </form><form method="post" action="addestinations.php"> <input type="submit" value="Back"> 
<br> <br> 
</form></div>
<?php include 'footer.php'; ?>