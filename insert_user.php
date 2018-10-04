<?php

$link = mysqli_connect("localhost", "root", "");

$fname = mysqli_real_escape_string($link, $_POST['fname']);
$sname = mysqli_real_escape_string($link, $_POST['sname']);
$login = mysqli_real_escape_string($link, $_POST['login']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$number = mysqli_real_escape_string($link, $_POST['number']);

mysql_connect("localhost", "root", "") or die (mysql_error ());

mysql_select_db("db_transport") or die(mysql_error());

    $sel = "SELECT * FROM accounts WHERE login = '$login'";
    $res = mysql_query($sel); 
    $num = mysql_num_rows($res);
    if($num==0)
    {
	$query = "INSERT INTO accounts (Last_Name, First_Name, login, password, Telephone_number) VALUES ('".$sname."', '".$fname."', '".$login."', '".$password."', '".$number."')";
		$result = mysql_query ( $query );
		if ($result) {
			Header ("Location: registered.php");
		}

    }
    else
   {
echo  "<script>alert('User with the same login already exists!!!');</script>";

    } ?>
<?php include 'register.php'; ?>

