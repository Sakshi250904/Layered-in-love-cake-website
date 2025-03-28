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
    <link rel="apple-touch-icon" href="img/head/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/head/favicon.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;900&family=Tenor+Sans&display=swap" rel="stylesheet">
    <!-- Main Css -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main1.css">
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
							<a href="index.html" class="nav-link ">Home</a>
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
					<form id='login' action = "transaction.php" onsubmit = "return validation()" method = "POST" class='input-group-login'>
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
        <div class="page__ordering ordering">
           <div class="ordering__container _container">
            <div class="ordering__breadcumbs breadcumbs-block">
               <ul class="breadcumbs-block__breadcumbs breadcumbs">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Cart</a></li>
                  <li><span href="#">Checkout</span></li>
               </ul>
            </div>
            <form action = "transaction.php" method = "POST" class="ordering__form form-ordering">
               <div class="ordering__contacts">
                  <div>
                    <label for="">Name*</label>
                     <input class="form-ordering__input" name="name" type="text" required>
                  </div>
                  <div>
                    Surname*
                     <input class="form-ordering__input" name="lastname" type="text" required>
                  </div>
                  <div>
                    Telephone*
                     <input name="tel" type="tel" class="form-ordering__input form-ordering__input_info" placeholder="___-__-__" required>
                     <span>To confirm your order</span>
                  </div>
                  <div>
                     E-mail*
                     <input name="email" type="email" class="form-ordering__input form-ordering__input_info" required> 
                     <span>We will duplicate the order for it and send a receipt for payment</span>
                  </div>
                  <div>
                     Address*
                     <input name="address" type="text" class="form-ordering__input form-ordering__input_info" required> 
                     <span>To be Delivery at</span>
                  </div>
                  <div>
                    Special Requests (Optional)
                     <input class="form-ordering__input" name="specific" type="text" placeholder="Enter here everything that is important to consider" >
                  </div>
               </div>
               <div class="ordering__ways ways-ordering">
                  <div class="ways-ordering__order your-order" >
                     <h3 class="your-order__title">Your order</h3>
                     <div class="your-order__body">
                        <ul class="your-order__tab order-tab">
                           <li>
                              <h4 class="order-tab__title" style="h1>span{text-align:left;} h1>span1{text-align:right;}" ><span>Now in cart</span>
							  <span1>Sum</span2></h4>
                           </li>
						   <?php
				include('connection.php');   
                   $cart_query = mysqli_query($con, "SELECT * FROM `cart`") or die('query failed');
                   $grand_total = 0;
                   if(mysqli_num_rows($cart_query) > 0){
                      while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                ?>
				
				<table>
        <tr>
            <td><?php echo $fetch_cart['name'];?></td>
            <td>₹<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
        </tr>
        <?php
                   $grand_total += $sub_total;
                      }
                   }else{
                      echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
                   }
                ?>
                <tr>
                   <td colspan="4">grand total :</td>
                   <td id="calculatedValue" >₹<?php echo $grand_total; ?>/-</td>
                   </tr>
    </table>
</ul>
                        
			   </div>
                     
                  
                  <div class=" ways-ordering__payment ways-payment ordering__contacts">
                     <!-- Your existing form fields -->
                     
                     <!-- Delivery Method -->
                     <div>
                         Delivery Method*
                         <select name="delivery" type="text" class="form-ordering__input" >
                             <option value="pickup">Delivery</option>
                             <option value="delivery">Pickup</option>
                         </select>
                     </div>
                     
                     <!-- Payment Method -->
                     <div>
                         Payment Method*
                         <select name="payment" type="text" class="form-ordering__input">
                             <option value="credit_card_now">Cash upon receipt</option>
                             <option value="credit_card_receipt">UPI</option>
                             <option value="cash_receipt">By credit card right now</option>
                         </select>
                     </div>
                     <div class="ways-payments__payment ways-payments__payment_agreement">
                     <body onload="disableSubmit()">
 <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">  I Agree Terms & Conditions
</body>
                     </div>
                     <div class="cart__coupon cart-coupon">
                        <h3 class="cart-coupon__title" _msttexthash="182858" _msthash="55">Gift voucher</h3>
                        <div action="#" class="cart-coupon__form">
                           <input name="coupon" type="text" class="cart-coupon__input" placeholder="Enter the code" _mstplaceholder="1611402" _msthash="56">
                           <button class="cart-coupon__btn btn" type="button" _msttexthash="62010" _msthash="57">Apply</button>
                       </div>
                     </div>
                  </div> 
                    <button name="submit" id="submit" class="form-ordering__submit btn btn-order" type="submit">Confirm Order</button>
               </div>
			   </div>
			
		</div>
            </form>
           </div>
        </div>
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
    <script src="js/main.js"></script>
    <script>
 function disableSubmit() {
  document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {
    
      if(element.checked) {
        document.getElementById("submit").disabled = false;
       }
       else  {
        document.getElementById("submit").disabled = true;
      }
  
  }
</script>
  </body>
  
</html>
