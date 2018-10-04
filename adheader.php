<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<title>Passneger Transportation</title>
<link rel="stylesheet" href="css/registr.css">
 <link rel="stylesheet" href="animate.min.css">

<style>
.fb8 {
	border: 2px solid #777;
	border-radius: 10px;
	outline: none;
}
.tb5 {
	border:2px solid #456879;
	border-radius:10px;
	height: 22px;
	width: 430px;
}
.enlarge:hover {
	transform:scale(2,2);
	transform-origin:0 0;
}
#demotext {
    padding: 14px 16px;
font-size: 35px;
color: rgb(0, 89, 0);
text-shadow: rgb(255, 252, 168) 2px 2px 0px, rgb(156, 156, 156) 4px 4px 0px;
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
<body background="https://i4.imaiges.com/wallpaper/893/599/785/texture-boards-wood-background-1920x1080.jpg" bgcolor="beige" >
<body>
<div id="menu">
<ul class="still">
   <li class="animated bounce"><a href="index.php"><img src="http://www.iconarchive.com/download/i87036/graphicloads/colorful-long-shadow/Bus.ico" width="50" height="50" align="Minibus"> </img></a></li>
<font size="4"> 
  <li class="animated zoomInUp"><div id="demotext">Passenger Transportation</div></li>
  <li style="float:right"><?php 
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if($_SESSION['Login']){ 
		echo '<h style="margin-left:15px; color:#333;
text-shadow: 2px 2px 0px #fff, 5px 4px 0px rgba(0,0,0,0.15);   ">';
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