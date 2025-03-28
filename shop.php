<?php
include('connection.php');  
if(isset($_POST['add_to_cart'])){

$product_name = $_POST['product_name'];
$product_weight = $_POST['product_weight'];
$product_price = $_POST['product_price'];
$product_image = $_POST['product_image'];
$product_quantity = $_POST['product_quantity'];

$select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$product_name' ") or die('query failed');

if(mysqli_num_rows($select_cart) > 0){
   $message[] = 'product already added to cart!';
}else{
   mysqli_query($con, "INSERT INTO `cart`(name, weight, price, image, quantity) VALUES('$product_name', '$product_weight', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
   $message[] = 'product added to cart!';
}

};
?>



<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Title -->
		<title>LayeredinLove Cake Website</title>
		<!-- Styling -->
		<meta name="theme-color" content="#F2718E"> 
		
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;900&family=Tenor+Sans&display=swap" rel="stylesheet">
		<!-- Main Css -->
		<link rel="stylesheet" href="css/main1.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="wrapper">
			<!--Header--><!--Header-->
		<header>
			<div class="container">
				<nav class="nav">
					<div class="menu-toggle">
						<i class="fas fa-bars"></i>
						<i class="fas fa-times"></i>
					</div>
					<!--Nav Links-->
					<ul class="nav-list">
						<li class="nav-item">
							<a href="index.php" class="nav-link ">Home</a>
						</li>
	
						<li class="nav-item">
							<a href="shop.php" class="nav-link active">Shop</a>
						</li>
	
						<li class="nav-item">
							<a href="" class="nav-link">Reservations</a>
						</li>
	
						<li class="nav-item">
							<a href="about.html" class="nav-link">About us</a>
						</li>
						
						<li class="nav-item">
							<a href="contacts.html" class="nav-link">Contact Us</a>
						</li>
						<li class="nav-item">
							<button class="loginbtn1 " onclick="document.getElementById('login-form').style.display='block'">Login</button>
						</li>
					</ul>
					<div> <li class="nav-item">
						<a href="cart.php" class="nav-link info-header__open"></a>
					</li>
					</div>
					<!--Nav Links-->
				</nav>
			</div>
			<div id='login-form'class='login-page'>
				<div class="form-box">
					<div class = "login">
					<div class='button1-box'>
						<div id='btn1'></div>
						<button type='button1'onclick='login()' class='toggle1-btn1'>Log In</button>
						<button type='button1'onclick='register()'class='toggle1-btn1'>Register</button>
					</div>
					<form id='login' class='input-group-login'>
						<input type='text'class='input-field'placeholder='Email Id' required >
				<input type='password'class='input-field'placeholder='Enter Password' required>
				<input type='checkbox'class='check-box'><span style="color:#777; font-size:12px; bottom:75px; position:absolute;">Remember Password</span>
				<button type='submit'class='submit-btn1'>Log in</button>
			 </form>
			</div>
			<div class = "register">
			 <form id='register' class='input-group-register'>
				 <input type='text'class='input-field'placeholder='Full Name' required>
				 <input type='email'class='input-field'placeholder='Email Id' required>
				 <input type='password'class='input-field'placeholder='Enter Password' required>
				 <input type='password'class='input-field'placeholder='Confirm Password'  required>
				 <input type='checkbox'class='check-box'><span style="color:#777; font-size:12px; bottom:75px; position:absolute;">I agree to the terms and conditions</span>
						<button type='submit'class='submit-btn1'>Register</button>
				 </form>
			  </div>
				</div>
			</div>
		</header>
		<!--Header--><!--Header--> 
			<main class="page">
				<section class="page__shop shop">
					<div class="shop__container _container">
						<div class="shop__breadcumbs breadcumbs-block">
							<ul class="breadcumbs-block__breadcumbs breadcumbs">
								<li><a href="index.html">Home</a></li>
								<li><span href="#">Desserts</span></li>
							</ul>
						</div>
						<div class="shop__head">
							<button type="button" class="desserts__gumb"></button>
							<h2 class="shop__title">Desserts</h2>
						</div>
						<div class="shop__body">
							<div class="shop__buttons buttons-shop">
								<button type="button" class="buttons-shop__btn buttons-shop__btn_active">All</button>
								<button type="button" class="buttons-shop__btn">Author's cakes</button>
								<button type="button" class="buttons-shop__btn">Cheesecakes</button>
								<button type="button" class="buttons-shop__btn">Cupcakes</button>
								<button type="button" class="buttons-shop__btn">Berry</button>
								<button type="button" class="buttons-shop__btn">Donuts</button>
								<button type="button" class="buttons-shop__btn">Macaroons</button>
							</div>
							<div class="shop__catalog shop-catalog">
								<?php
								include('connection.php');  
      $select_product = mysqli_query($con, "SELECT * FROM `shop`") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>
      <form method="post" class="box" action="">
		<div class="desserts__item item-desserts">
         <img src="image/<?php echo $fetch_product['image']; ?>" alt="">
		 <div class="item-desserts__info desserts-info" style="padding: 10px 0 10px 12px;line-height: 142.3%;letter-spacing: 0.04em;">
		 <div class="item-desserts__info desserts-info" style="padding: 10px 0 10px 12px; line-height: 142.3%; letter-spacing: 0.04em;">
		 <div class="desserts-info__title">
         	<div class="name"><?php echo $fetch_product['name']; ?></div>
		 </div>
		 <div class="desserts-info__weight">
		 	<div class="weight"><?php echo $fetch_product['weight']; ?></div>
		 </div>
		 <div class="desserts-info__price info-price">
			<span class="info-price__coin">
         		<div class="price">₹<?php echo $fetch_product['price']; ?>/-</div>
			</span>
			<button type="submit" name="add_to_cart" class="info-price__cart">
			<span>Add to cart</span>
			<img src="img/main-page/deserts/basket.svg" alt="">
			</button>
		 </div>
		 </div>
         <input type="hidden" min="1" name="product_quantity" value="1">
         <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
         <input type="hidden" name="product_weight" value="<?php echo $fetch_product['weight']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
		 </div>
		 </div>
      </form>
   <?php
      };
   };
   ?>
							</div>
							<div class="shop-catalog__radio catalog-radio">
								<button type="button" class="catalog-radio__btn catalog-radio__btn_active">1</button>
								<button type="button" class="catalog-radio__btn">2</button>
								<button type="button" class="catalog-radio__arrow">
									<img src="img/page-shop/arrow-radio.svg" alt="arrow-radio">
								</button>
							</div>
						</div>
					</div>
				</section>
			</main>
			<footer class="footer">
				<div class="footer__container _container">
				  <div class="footer__body">
					 <div class="footer__info">
						<ul class="footer-list">
							<li class="footer-list__item">
								<span>
								   LayeredinLove
								</span>
							 </li>
						  <li class="footer-list__item">
							 <span>
								<img src="img/footer/footer-location.svg" alt="footer-geo" class="footer-list__icon">
								Mumbai, India
							 </span>
						  </li>
						  <li class="footer-list__item">
							<a href="tel:79268434319">
							  <img src="img/footer/footer-phone.svg" alt="footer-phone" class="footer-list__icon">
							  +0000-000-000
							 </a>
						  </li>
						  <li class="footer-list__item">
							 <a href="mailto:maricake@gmail.com">
								<img src="img/footer/footer-email.svg" alt="footer-email" class="footer-list__icon">
								LayeredinLove@gmail.com
							 </a>
						  </li>
						</ul>
						<div class="success__networks success-networks__footer">
						  <button type="button" class="success-networks__inst"></button>
						  <button type="button" class="success-networks__viber"></button>
						  <button type="button" class="success-networks__tg"></button>
					  </div>
					 </div>
					 <div class="footer__menu menu-footer">
						<nav>
						  <ul class="menu-footer__list">
							 <li class="menu-footer__item">
								<a href="shop.php" class="menu-footer__link">Desserts</a>
								<ul class="mini-menu">
								  <li class="mini-menu__link">
									 <a href="shop.php">Cakes</a>
								  </li>
								  <li class="mini-menu__link">
									 <a href="shop.php">pastries</a>
								  </li>
								  <li class="mini-menu__link">
									 <a href="shop.php">Cupcakes</a>
								  </li>
								  <li class="mini-menu__link">
									 <a href="shop.php">Filling</a>
								  </li>
								</ul>
							 </li>
							 <li class="menu-footer__item">
								<a href="#" class="menu-footer__link">Account</a>
								<ul class="mini-menu">
								  <li class="mini-menu__link">
									 <a href="#">Favourite</a>
								  </li>
								  <li class="mini-menu__link">
									 <a href="#">My Profile</a>
								  </li>
								  <li class="mini-menu__link">
									 <a href="cart.php">Cart</a>
								  </li>
								</ul>
							 </li>
							 <li class="menu-footer__item">
								<a href="#" class="menu-footer__link">Contacts</a>
								<ul class="mini-menu">
								  <li class="mini-menu__link">
									 <a href="#">Instagram</a>
								  </li>
								  <li class="mini-menu__link">
									 <a href="#">Telegram</a>
								  </li>
								  <li class="mini-menu__link">
									 <a href="#">Whats App</a>
								  </li>
								</ul>
							 </li>
						  </ul>
						</nav>
					 </div>
					 <div class="footer__scroll">            
						<button type="button" id="top" class="scroll-up"></button>
					 </div>
				  </div>
				</div>
			 </footer>
			</div>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 160,
            modifier: 1,
            slideShadows: true,
          },
          loop:undefined,
         
          autoplay: {
              delay: 2500,
              disableOnInteraction: false
          }
        });
      </script>



    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <script src="./js/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
	</body>
</html>
