
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Passneger Transportation</title>
<link rel="stylesheet" href="css/registr.css">
<link rel="stylesheet" href="table.css">
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
  session_start();
    if($_SESSION['Login']){ 
		echo '<h style="margin-left:15px;">';
        echo $_SESSION["Login"];
			echo '</h>';
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
<table>
<tr>
	<th>User</th>
	<th>Last Name</th>
	<th>First Name</th>
	<th>Telephone number</th>
    <th>Delete</th>	
</tr>
 <?php 
$mysqli = new mysqli("localhost", "root", "", "db_transport");
$res=$mysqli->query("select * from accounts") ;
$data = array();

while($row = $res->fetch_assoc()){
	
	$data[] = $row;
	
}
foreach($data as $row){
echo "<tr><td>$row[Login]</td>";
echo "<td>$row[Last_Name]</td>";
echo "<td>$row[First_Name]</td>";
echo "<td>$row[Telephone_number]</td>";
echo "<td><a href='del_acc.php?id=$row[Login]'>Delete</a></td></tr>";
} 


?> 
</table>
</div>
<?php include 'footer.php'; ?>