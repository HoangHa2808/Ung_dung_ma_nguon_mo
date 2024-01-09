<html>
<link rel="stylesheet" href="style.css">
<body>
<header>
<blockquote>
<header>
<?php
if(isset($_SESSION['id'])){
	echo '<header>';
	echo '<blockquote>';
	echo '<a href="index.php"><img src="image/logo.png"></a>';
	echo '<div class="Navigation">
	<a href="index.php"><img src="image/logo.png"></a>
		<li class="item-Nav"><a href="About.php">About</a></li>
		<li class="item-Nav"><a href="Contact.php">Contact</a></li>
		<li class="item-nav"><form class="hf" action="logout.php"><input class="hi" type="submit" name="submitButton" value="Logout"></form></li>
	</div>';


	
	echo '<form class="hf" action="edituser.php"><input class="hi" type="submit" name="submitButton" value="Edit Profile"></form>';
	echo '</blockquote>';
	echo '</header>';
}

if(!isset($_SESSION['id'])){
	echo '<header>';
	echo '<blockquote>';
	echo '<div class="Navigation">
	<a href="index.php"><img src="image/logo.png"></a>
		<li class="item-Nav"><a href="About.php">About</a></li>
		<li class="item-Nav"><a href="Contact.php">Contact</a></li>
		
		<li class="item-nav"><form class="hf" action="Register.php"><input class="hi" type="submit" name="submitButton" value="Register"></form></li>
		<li class="item-nav"><form class="hf" action="login.php"><input class="hi" type="submit" name="submitButton" value="Login"></form></li>

	</div>';
	
	
	
	echo '</blockquote>';
	echo '</header>';
}
?>
</header>
</blockquote>
</header>
<blockquote>
<div class="container">
<center><h1>Login</h1></center>
<form action="checklogin.php" method="post">
    Username:<br><input type="text" name="username"/>
    <br><br>
    Password:<br><input type="password" name="pwd" />
    <br><br>
    <input class="button" type="submit" value="Login"/>
    <input class="button" type="button" name="cancel" value="Cancel" onClick="window.location='index.php';" />
</form>
</div>
<blockquote>
<?php
if(isset($_GET['errcode'])){
    if($_GET['errcode']==1){
        echo '<span style="color: red;">Invalid username or password.</span>';
    }elseif($_GET['errcode']==2){
        echo '<span style="color: red;">Please login.</span>';
    }
}

?>
</body>
</html>