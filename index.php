<html>

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




<?php
session_start();
if(isset($_SESSION['examineeSession']['examineenakalogin']) == true) header("location:home.php");

 ?>

<?php

include("login-ui/index.php");


 ?>
<div class="bubbles">
	<img src="b.png">
	<img src="b.png">
	<img src="b.png">
	<img src="b.png">
	<img src="b.png">
	<img src="b.png">
	<img src="b.png">

</div>

<div class="footer">
		<div class="inner-footer">

	  <!--  for company name and description -->
		  <div class="footer-items">

      	 <img src="logo.jpeg" alt="logo"><p><span style="font-size: x-large;">ENGG TECH</span></p>
			<p>We create possibilities for success of people .</p>
			<b>BE BOLD..</b>
      </div>

	  <!--  for links  -->
		  <div class="footer-items">
			<h3> Links</h3>
			<div class="border1"></div> <!--for the underline -->
			  <ul>
				<a href="adminpanel/admin/home.php"><li>Admin login</li></a>
				<a href="#"><li>careers</li></a>

			  </ul>
		  </div>

		  <div class="footer-items">
			<h3>Links</h3>
			<div class="border1"></div>
			  <ul>
				<a href="#"><li>Terms</li></a>
				<a href="#"><li>Privacy policy</li></a>
			  </ul>
		  </div>

		  <div class="footer-items">
			<h3>Links</h3>
			<div class="border1"></div>
			  <ul>
				<a href="#"><li>More About us</li></a>
				<a href="#"><li>Blog</li></a>
			  </ul>

      </div>
	    </div>
	 <!--   for social links -->
   <div class="social-media">
			<h3>Follow us</h3>
			<div class="border1"></div>
		<a href=""><i class="fab fa-instagram"></i></a>
		<a href="/"><i class="fab fa-facebook"></i></a>
		<a href=""><i class="fab fa-twitter"></i></a>
		<a href=""><i class="fab fa-youtube"></i></a>
		</div>

		<div class="footer-bottom">
		  Copyright &copy; ENGG TECH 2022.
		</div>
	  </div>

</body>
</html>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>
