<html>
<?php
if(isset($_POST['submit'])){

    $to         = "adimulamakhil@gmail.com";
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone    = $_POST['phone'];
    $message    = $_POST['message'];


    $msg = "Hi Contact form mail,
                Name  : {$name}
                Email : {$email}
                Phone NO : {$phone}
                Message : {$message}
    ";

    $headers = "From: akhiladimulam@gmail.com" . "\r\n" .
                "CC: ";


    if(mail($to,$phone,$msg,$headers)){
        echo "<span style='color:green'>Mail sent successfully!</span>";
    }
    else{
        echo "<span style='color:red'>Mail cannot be sent!</span>";
    }
}
?>
<link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style2.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body class="body" style="background-image: url(test.jpg);" >

<nav class="navbar">
  <img src="logo.jpeg" height="50" class="navbar__logo"/>

  <ul class="navbar__links">
    <a href="index.php"><li>Home</li></a>
    <a href="#profile.html"><li>About Us</li></a>
    <a href="contact.php"><li>Contact</li></a>
  </ul>
</nav>

<div class="container">
	<div class="row">
			<h1>contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
    <form id="contact-form" action="contact.php" method="post">
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="name" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name="email" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="phone" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="message" required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
            <button class="btn-lrg submit-btn" type="submit" name="submit">Send message</button>
			</div>
	</div>
    </form>
</div>


