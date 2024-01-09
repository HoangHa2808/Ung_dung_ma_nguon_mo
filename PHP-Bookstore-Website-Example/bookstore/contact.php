<html>
<link rel="stylesheet" href="style.css">

<body>
    <header>
        <?php
        if (isset($_SESSION['id'])) {
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

        if (!isset($_SESSION['id'])) {
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
      <form class="form">
        <h1>Quick Contact</h1>
        <p>wellcome Book Store</p>
        <input placeholder="Your Name" type="text" tabindex="1" class="form__field">
        
        <input placeholder="Your Email Address" type="text" tabindex="1" class="form__field">
        
        <textarea placeholder="enter your message here..."></textarea>
        
        <button name="submit" type="submit" class="btn-sumbit">Submit</button>
    </form>
      </div>


        <blockquote>
     
</body>

</html>