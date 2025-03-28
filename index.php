<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LayeredinLove Cake Website</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--Font Awesome CDN File-->
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Font Awesome CDN File-->

    <!--Scroll Revel  CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--Scroll Revel  CDN-->

    <!--OWAL CAOUSEL-->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!--Css File-->
    <link rel="stylesheet" href="css/style.css">
    <!--Css File-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body>
    <!--Header--><!--Header-->
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <!--<a href="index.html" class="logo"><img src="img/tumblr_nihox67kR31qf2s7fo1_1280.webp" alt=""></a>-->
                <!--Nav Links-->
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="shop.php" class="nav-link">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Reservations</a>
                    </li>

                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="contacts.html" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <button class="loginbtn1 nav-item" onclick="document.getElementById('login-form').style.display='block'">Login</button>
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
                <form  action = "authentication.php" onsubmit = "return validation()" method = "POST" id='login' class='input-group-login'>
                    <input type='username'class='input-field'placeholder='Username' name="username" required>
		            <input type='password'class='input-field'placeholder='Enter Password'name="password" required>
		            <input type='checkbox'class='check-box'><span style="color:#777; font-size:12px; bottom:75px; position:absolute;">Remember Password</span>
		            <button type='submit' name="submit" class='submit-btn1'>Log in</button>
		        </form>
            </div>
        <div class = "register">
            <form action="insert.php" method="post"  id='register' class='input-group-register'>
		     <input type='name'class='input-field'placeholder='Full Name' name="name" required>
		     <input type='username'class='input-field'placeholder='Username' name="username" required>
		     <input type='password'class='input-field'placeholder='Enter Password'name="password" required>
		     <input type='checkbox'class='check-box' name="checkbox"><span style="color:#777; font-size:12px; bottom:75px; position:absolute;">I agree to the terms and conditions</span>
                    <button type='submit' value="Submit" class='submit-btn1' id="create_new">Register</button>
	         </form>
          </div>
            </div>
        </div>
    </div>
    </header>
    <!--Header--><!--Header-->

    <!--Hero Start--><!--Hero Start-->
    <section class="hero" id="hero">
        <div class="container">
            <h2 class="sub-headline">
                <span class="first-letter">Welcome</span>
            </h2>
            <h1 class="headline">Layered in Love Cake Shop</h1>
            <div class="headline-description">
                <div class="separator">
                    <div class="line line-left"></div>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <div class="line line-right"></div>
                </div>
                <div class="single-animation">
                    <h5>Ready to be Opened</h5>
                    <a href="#" class="btn cta-btn">Explorer</a>
                </div>
            </div>
        </div>
    </section>
    <!--Hero Ends--><!--Hero Ends-->


    <section class="discover-story">
        <div class="container">
            <div class="restaurant-info">
                <div class="restaurant-descr padding-right animate-left">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">Discover</span>
                        </h2>
                        <h1 class="headline headline-dark">Shop Our Products</h1>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Vero debitis, cum, reprehenderit provident fugit qui
                         quae maiores voluptas tempore beatae
                          ipsam aliquam, tempora minima delectus? Dolor illum deserunt non adipisci.
                    </p>
                    <a href="#" class="btn body-btn">About US</a>
                </div>

                <div class="restaurant-info-img animate-right">
                    <img class="imgb" src="img/12.jpg" alt="">
                </div>

            </div>
        </div>
    </section>
<!--/*Discover Our Story ending*/-->






<!-- Start -->
<section class="perfect-blend between">
    <div class="container">
        <div class="global-headline-p">
            <div class="animate-top">
                <h2 class="sub-headline-perfect">
                    <span class="first-letter">Perfect</span>
                </h2>
            </div>
            <div class="animate-bottom">
                <h1 class="headline headline-light">Blend</h1>
            </div>
           
        </div>
    </div>
</section>
<!--End-->



<!-- Start -->
<!--
<section class="tastefull-recipes between">
    <div class="container">
        <div class="global-headline">
            <div class="animate-top">
                <h2 class="sub-headline">
                    <span class="first-letter">Tastefull</span>
                </h2>
            </div>
            <div class="animate-bottom">
                <h1 class="headline">Recipes</h1>
            </div>
           
        </div>
    </div>
</section>
-->

<!-- End -->

 <!-- Swiper -->
 




<section class="discovery-our-menu">
    <div class="container">
        <div class="restaurant-info">
            <div class="image-group padding-right animate-left">
                <img class="imgb" src="img/22.jpg" alt="">
                <img class="imgb" src="img/33.jpg" alt="">
                <img class="imgb" src="img/44.jpg" alt="">
                <img class="imgb" src="img/22.jpg" alt="">
            </div>
            <div class="restaurant-desc animate-right">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">Discover</span>
                    </h2>
                    <h1 class="headline headline-dark">Products</h1>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                     aliquam quo iste inventore. Consectetur, recusandae tempore!
                     Quisquam ea quasi praesentium, magni d
                     olores sed exercitationem repellendus, ducimus qui facere minus hic!</p>
                     <a href="#" class="btn body-btn">View Products</a>
            </div>
        </div>
    </div>
</section>
<!--Ends-->














<div class="global-headline">
    <h2 class="sub-headline">
        <span class="first-letter">Types of Cake</span>
    </h2>
    <h1 class="headline headline-dark">Cake Recipes</h1>
</div>
<div class="cards-types">
   <div class="card-image1">
       <img src="img/ggg.png" alt="">
   </div>

   <div class="card-image2">
    <img src="img/choco.png" alt="">
    </div>

    <div class="card-image3">
        <img src="img/fruits-png-hd-strawberry-png-hd-1218.png" alt="">
        </div>

        <div class="card-image4">
            <img src="img/sthalf.png" alt="">
            </div>




<div class="container three">
    <div class="row">     
     <div class="col-md-4 col-sm-12">
        <div class="card animate-left">  
          <div class="card__image-container">
            <img class="card__image" src="img/12.jpg" alt="">
        </div>
        <svg class="card__svg" viewBox="0 0 800 500">
            <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"/>

                <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="pink" stroke-width="3" fill="transparent"/>
            </svg>
                    <div class="card__content">
                        <h1 class="card__title">
                            Strawberry Cake
                        </h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="card animate-right">  
                  <div class="card__image-container">
                    <img class="card__image" src="img/22222.jpg" alt="">
                </div>
                <svg class="card__svg" viewBox="0 0 800 500">
                    <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"/>
        
                        <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="pink" stroke-width="3" fill="transparent"/>
                    </svg>
                            <div class="card__content">
                                <h1 class="card__title">
                                    Chocolate Lava
                                </h1>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="card animate-left">  
                          <div class="card__image-container">
                            <img class="card__image" src="img/333333.jpg" alt="">
                        </div>
                        <svg class="card__svg" viewBox="0 0 800 500">
                            <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"/>
                
                                <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="pink" stroke-width="3" fill="transparent"/>
                            </svg>
                                    <div class="card__content">
                                        <h1 class="card__title">
                                            Coffee Cake
                                        </h1>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi.</p>
                                    </div>
                                </div>
                            </div>


        </div>
    </div>
</div>




<!-- Start -->
<section class="perfecr-blend between">
    <div class="container">
        <div class="global-headline-p">
            <div class="animate-top">
                <h2 class="sub-headline-perfect">
                    <span class="first-letter">Perfect</span>
                </h2>
            </div>
            <div class="animate-bottom">
                <h1 class="headline headline-light">Blend</h1>
            </div>
           
        </div>
    </div>
</section>
<!--End-->


 <!-- Swiper -->
 <div class="swiper-wrapper">

 <div class="swiper-container">
     
    <div class="swiper-wrapper">
      <div class="swiper-slide animate-left">
          <img src="img/owners/team-1.jpg" alt="">   
          <div class="info">
              <h2>CEO Trendy Cake</h2>
              <h3>Rock</h3>
          </div> 
        </div> 


        <div class="swiper-slide animate-left">
            <img src="img/owners/team-2.jpg" alt="">   
            <div class="info">
                <h2>CEO Trendy Cake</h2>
                <h3>Rock</h3>
            </div> 
          </div> 



          <div class="swiper-slide animate-right">
            <img src="img/owners/team-3.jpg" alt="">   
            <div class="info">
                <h2>CEO Trendy Cake</h2>
                <h3>Rock</h3>
            </div> 
          </div> 


          <div class="swiper-slide animate-right">
            <img src="img/owners/team-4.jpg" alt="">   
            <div class="info">
                <h2>CEO Trendy Cake</h2>
                <h3>Rock</h3>
            </div> 
          </div> 


          <div class="swiper-slide animate-right">
            <img src="img/owners/team-1.jpg" alt="">   
            <div class="info">
                <h2>CEO Trendy Cake</h2>
                <h3>Rock</h3>
            </div> 
          </div> 

        
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</div>





<!--Start-->
<section class="culinary-delight">
    <div class="container">
        <div class="restaurant-info">
            <div class="restaurant-descr padding-right animate-left">
                <div class="global-headline">
                    <h2 class="sub-headline">
                        <span class="first-letter">Culinary</span>
                    </h2>
                    <h1 class="headline headline-dark">Delight</h1>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Vero debitis, cum, reprehenderit provident fugit qui
                     quae maiores voluptas tempore beatae
                      ipsam aliquam, tempora minima delectus? Dolor illum deserunt non adipisci.
                </p>
                <a href="#" class="btn body-btn">Make Reservation</a>
            </div>

            <div class="image-group">
                <img class="animate-top imgb" src="img/d1.jpg" alt="">
                <img class="animate-bottom imgb" src="img/d2.jpg" alt="">
            </div>

        </div>
    </div>
</section>
<!--End-->






<footer>
    <div class="container">
        <div class="back-to-top">
            <a href="#hero"><i class="fas fa-chevron-up"></i></a>
        </div>
        <div class="footer-content">
            <div class="footer-content-about animate-up">
                <h4>About the Shop</h4>
                
                <div class="social-menu">
                    <h4>Follow Us</h4>
                    <ul class="social-icons">
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
    
                        <li>
                            <a href="#"><i class="fab fa-tripadvisor"></i></a>
                        </li>
                    </ul>
                </div>

           
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sit dolorum voluptates quod sunt mollitia maiores
                 consectetur cupiditate dolorem ducimus? Vitae veritatis, sit officia nostrum ipsam placeat minus illum quidem.</p>
        </div>
        <div class="footer-content-divider animate-bottom">
            
            <div class="newletter-container">
                <h4>NewsLetter</h4>
                <form action="" class="newsletter-form">
                    <input type="text" class="newsletter-input" name="" id="" placeholder="Your Email Address">
                    <div class="button newletter-btn" type="submit">
                        <i class="fas fa-envelope"></i>    
                    </div>
                </form>
            </div>
           
        </div>
    </div>
    </div>
    <p class="copyright text-center">
        ©Copyrights 2023.<br>
        All rights reserved. Powered by <b></b>
    </p>
</footer>








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

<script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  


    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <script src="./js/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
</body>
</html>