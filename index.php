<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<?php include 'sidebar.php'; ?>
<div id="content">
<?php if($_SESSION['Login']){
	$sql = "SELECT * FROM accounts WHERE Login="."'".$_SESSION['Login']."'";
$db = new mysqli('localhost', 'root', '', 'db_transport');

$res = $db->query($sql);

$data = array();

while($row = $res->fetch_assoc()){
	
	$data[] = $row;
	
}


foreach($data as $row){
	
	
	
	
	echo '<p style="color: black;
letter-spacing: .1em;">Welcome dear '; echo $row['Last_Name']; echo ' '; echo $row['First_Name']; echo '!';}} ?><br><br><br>
<form action="mm.php" method="post">
 <label style="color: black;
letter-spacing: .1em;">Message: <input class ="tb5" type="text" size="120" name="message" placeholder= "Your message..." required /></label>  	<input class="fb8" type="submit" name="add" value="Send" />
 </form>
 	<div id="getdata">
	<script src="ajax.js"></script>
	</div>
</div>
<?php include 'footer.php'; ?>