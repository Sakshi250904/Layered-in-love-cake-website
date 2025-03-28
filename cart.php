<?php
include('connection.php');  
if(isset($_POST['update_cart'])){
$update_quantity = $_POST['cart_quantity'];
$update_id = $_POST['cart_id'];
mysqli_query($con, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
$message[] = 'cart quantity updated successfully!';
}

if(isset($_GET['remove'])){
$remove_id = $_GET['remove'];
mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
header('location:cart.php');
}

if(isset($_GET['delete_all'])){
mysqli_query($con, "DELETE FROM `cart`") or die('query failed');
header('location:cart.php');
}
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
        <div class="page__cart cart">
         <div class="cart__container _container">
            <div class="cart__breadcumbs breadcumbs-block">
               <ul class="breadcumbs-block__breadcumbs breadcumbs">
                  <li><a href="#">Home</a></li>
                  <li><span href="#">Basket</span></li>
               </ul>
            </div>
            <div class="cart__body">
              <table class="edit">
			  <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>
    </thead>
                <tbody>
                <?php
				include('connection.php');   
                   $cart_query = mysqli_query($con, "SELECT * FROM `cart`") or die('query failed');
                   $grand_total = 0;
                   if(mysqli_num_rows($cart_query) > 0){
                      while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                ?>
                   <tr>
                      <td><img src="image/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                      <td style="padding: left 10rem;"><?php echo $fetch_cart['name'];?></td>
					  <td><?php echo $fetch_cart['weight']; ?></td>
                      <td>₹<?php echo $fetch_cart['price']; ?>/-</td>
                      <td>
                         <form action="cart.php " method="post">
                            <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                            <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                            <input type="submit" name="update_cart" value="update" class="option-btn">
                         </form>
                      </td>
                      <td>₹<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
                      <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
                   </tr>
                <?php
                   $grand_total += $sub_total;
                      }
                   }else{
                      echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
                   }
                ?>
                <tr class="table-bottom">
                   <td colspan="4">Grand Total :</td>
                   <td>₹<?php echo $grand_total; ?>/-</td>
                   <td><a href="cart.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td>
                </tr>
             </tbody>
             </table>
            </div> 
         </div>
        </div>
        <section class="page__add-order add-order">
           <div class="add-order__container _container">
              <h2 class="add-order__title">Add to order</h2>
              <div class="add-order__body">
               <div class="desserts__column">
                  <div class="desserts__item item-desserts">
                    <div class="item-desserts__image desserts-image">
                      <a href="#" class="desserts-image__item">
                        <img src="img/page-cart/item.png" alt="dessert">
                      </a>
                      <button type="button" class="desserts-image__favorite"></button>
                    </div>
                    <div class="item-desserts__info desserts-info">
                      <div class="desserts-info__title">Macaroon</div>
                      <div class="desserts-info__weight">Weight from 100 g</div>
                      <div class="desserts-info__price info-price">
                        <span class="info-price__coin">200 Rs./pcs</span>
                        <button type="button" class="info-price__cart">
                          <span>Add to cart</span>
                          <img src="img/main-page/deserts/basket.svg" alt="">
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="desserts__column">
                  <div class="desserts__item item-desserts">
                    <div class="item-desserts__image desserts-image">
                      <a href="#" class="desserts-image__item">
                        <img src="img/page-cart/item2.png" alt="dessert">
                      </a>
                      <button type="button" class="desserts-image__favorite"></button>
                    </div>
                    <div class="item-desserts__info desserts-info">
                      <div class="desserts-info__title">Strawberry Cake</div>
                      <div class="desserts-info__weight">Weight from 0.9kg</div>
                      <div class="desserts-info__price info-price">
                        <span class="info-price__coin">400 Rs./kg</span>
                        <button type="button" class="info-price__cart">
                          <span>Add to cart</span>
                          <img src="img/main-page/deserts/basket.svg" alt="">
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="add-order__total">
                 <div class="add-order__final order-final">
                    <div class="order-final__text">Total:</div>
                    <div class="order-final__scrip">
						<td id="calculatedValue" >₹<?php echo $grand_total; ?>/-</td>
				    	<input name="calculatedValue" type="number" value= $grand_total>
					</div>
                 </div>
                 <a href="./ordering.php" class="add-order__btn btn">Checkout</a>
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
    <script src="js/main.js"></script>
	<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    .edit img {
        max-width: 100px;
        height: auto;
    }
    .option-btn, .delete-btn {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .option-btn {
        background-color: #4CAF50;
        color: white;
    }
    .delete-btn {
        background-color: #f44336;
        color: white;
    }
    .disabled {
        pointer-events: none;
        opacity: 0.5;
    }
</style>
  </body>
</html>
