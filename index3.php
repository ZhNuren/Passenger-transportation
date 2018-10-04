<?php include 'adheader.php'; ?>
<?php include 'menu2.php'; ?>
<?php include 'sidebar.php'; ?>
<div id="content">
<?php if($_SESSION['Login']){echo '<p style="color: black;
letter-spacing: .1em;">Welcome dear '; echo 'Zhumaliyev Erlan!';} ?><br><br><br>
<form action="mn.php" method="post">
 <label style="color: black;
letter-spacing: .1em;">Message: <input class ="tb5" type="text" size="120" name="message" placeholder= "Your message..." required /></label>  	<input class="fb8" type="submit" name="add" value="Send" />
 </form>
 <div style="position: absolute; right: 35%; top: 102px;">
 <form action="chatdel.php" method="post">
 <input class="fb8" type="submit" name="add" value="Clear Chat" />
 </form>
 </div>
 	<div id="getdata">
	<script src="ajax.js"></script>
	</div>
</div>
<?php include 'footer.php'; ?>