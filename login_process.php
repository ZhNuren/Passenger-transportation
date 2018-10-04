<?php
SESSION_START();
$Login = $_REQUEST['Login'];
$Password = $_REQUEST['password'];
$mysqli = new mysqli("localhost", "root", "", "db_transport");
$strSQL = "select * from accounts WHERE Login='$_POST[Login]' AND (password)='$_POST[password]'";
$result = $mysqli->query($strSQL);
$row_cnt = mysqli_num_rows($result);
echo $row_cnt;
if (($Login == 'Admin') and ($Password == '12345')){
	$_SESSION['Login']= 'Admin';
 header("Location: index3.php"); }
elseIF ($row_cnt>0)
{
	$_SESSION['Login']=$_POST['Login'];

	header('Location: index.php');
} ELSE {
 echo "<script>alert('Incorrect Login or Password!!!');</script>";
}

?>
<?php include 'login.php'; ?>
