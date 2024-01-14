<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book</title>


<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<link rel="stylesheet" type="text/css" href="bluedot.css">

</head>
<body>

<section class="header">
	<a href="home.php" class="logo">Travel.</a>
	<nav class="navbar">
		<a href="home.php">Home</a>
		<a href="about.php">about</a>
		<a href="package.php">package</a>
		<a href="book.php">book</a>
	</nav>

	<div id="menu-btn" class="fas fa-bars"></div>
</section>


<div class="heading" style="background-color: lightcyan;">
	<h1>book now</h1>
</div>


<section class="booking">


	<h1 class="heading-title">Book Your Trip!</h1>

	<form action="book_form.php" method="POST" class="book-form">
		
    <div class="flex">
    	
     <div class="inputbox">
     	
         <span>name:</span>
         <input type="text" name="name" placeholder="enter your name" autocomplete="off">

     </div>

     <div class="inputbox">
     	
         <span>email:</span>
         <input type="email" name="email" placeholder="enter your email" autocomplete="off">

     </div>

     <div class="inputbox">
     	
         <span>phone:</span>
         <input type="number" name="phone" placeholder="enter your number" autocomplete="off">

     </div>

     <div class="inputbox">
     	
         <span>address:</span>
         <input type="text" name="address" placeholder="enter your address" autocomplete="off">

     </div>

     <div class="inputbox">
     	
         <span>where to:</span>
         <input type="text" name="location" placeholder="place you want to visit" autocomplete="off">

     </div>

     <div class="inputbox">
     	
         <span>how many:</span>
         <input type="number" name="guests" placeholder="number of guests" autocomplete="off">

     </div>

     <div class="inputbox">
     	
         <span>arrivals:</span>
         <input type="date" name="arrivals">

     </div>

     <div class="inputbox">
     	
         <span>leaving:</span>
         <input type="date" name="leaving">

     </div>

    </div>

    <input type="submit" value="submit" class="btn" name="send">

	</form>
	
</section>


<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>quick links</h3>
			<a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
			<a href="about.php"><i class="fas fa-angle-right"></i>about</a>
			<a href="package.php"><i class="fas fa-angle-right"></i>package</a>
			<a href="book.php"><i class="fas fa-angle-right"></i>book</a>
		</div>

		<div class="box">
			<h3>extra links</h3>
			<a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
			<a href="#"><i class="fas fa-angle-right"></i>about us</a>
			<a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
			<a href="#"><i class="fas fa-angle-right"></i>terms of us</a>
		</div>

		<div class="box">
			<h3>contact info</h3>
			<a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
			<a href="#"><i class="fas fa-phone"></i>+666-999-3330</a>
			<a href="#"><i class="fas fa-envelope"></i>qwerty@gmail.com</a>
			<a href="#"><i class="fas fa-map"></i>trivandrum,india-004123</a>
		</div>

		<div class="box">
			<h3>follow us</h3>
			<a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
			<a href="#"><i class="fab fa-twitter"></i>twitter</a>
			<a href="#"><i class="fab fa-instagram"></i>instagram</a>
			<a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
		</div>
		
	</div>


	<div class="credit">
		created by <span>mr.web designer</span> | all rights reserved!
	</div>
	
</section>


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<!-- js file link -->
<script type="text/javascript" src="reviewslide.js"></script>



</body>
</html>