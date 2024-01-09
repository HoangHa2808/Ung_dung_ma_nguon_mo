<html>
<link rel="stylesheet" href="style.css">
<body>
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
<blockquote>
<div class="container">

<div class="wrapper">
  <div class="name">
    Group 4
  </div>
  <div class="content">
    <h2>About me</h2>
    <p>
        
A Bookstore is a place where books are bought and sold. It is a place where people can come to find information, entertainment, and inspiration. Bookstores are often filled with a variety of books, from novels and biographies to textbooks and cookbooks. They can also offer a variety of other services, such as book signings, readings, and workshops.

Bookstores are important because they provide access to knowledge and information. They can help people learn about new things, explore different cultures, and expand their horizons. Bookstores can also be a great place to relax and escape from the hustle and bustle of everyday life.

There are many different types of bookstores. Some bookstores specialize in a particular subject, such as history or science. Others focus on a particular genre, such as fiction or nonfiction. There are also general bookstores that carry a wide variety of books.
    </p>
    
    
    <div class="stats">
      <div class="block">
        <div class="num">350</div>
        <span class="text">Followers</span>
      </div>
      <div class="block">
        <div class="num">245</div>
        <span class="text">Following</span>
      </div>
      <div class="block">
        <div class="num">24</div>
        <span class="text">Pens</span>
      </div>
    </div>
  
  </div>
</div>
</div>
<blockquote>

</body>
</html>