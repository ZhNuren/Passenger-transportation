
<?php

$link = mysqli_connect("localhost", "root", "");

$place = mysqli_real_escape_string($link, $_POST['place']);
$distance = mysqli_real_escape_string($link, $_POST['distance']);
$cost = mysqli_real_escape_string($link, $_POST['cost']);
mysql_connect("localhost", "root", "") or die (mysql_error ());

mysql_select_db("db_transport") or die(mysql_error());

    $sel = "SELECT * FROM travelplace where Place='$place'";
    $res = mysql_query($sel);
    $num = mysql_num_rows($res);
    if($num==0)
    {
		$query = "INSERT INTO travelplace (Place, Distance, Seat_Price) VALUES ('".$place."', '".$distance."', '".$cost."')";
		$result = mysql_query ( $query );
		if ($result){ header('Location: addestinations.php');}
    }
    else
   {
	echo "<script>alert('This destination already exists!!!');</script>";
    }



?>
<?php include 'addestinations.php'; ?>