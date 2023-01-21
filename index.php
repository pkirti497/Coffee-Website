<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffe Website</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7.0.0/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://unpkg.com/swiper@7.0.0/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <header class="header">
      <div id="menu-btn" class="fa fa-bars"></div>
      <a href="" class="Logo">Coffee <i class="fas fa-mug-hot"></i></a>
      <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#review">Review</a>
        <a href="#book">Book</a>
      </nav>
      <!-- <a href="#" class="btn">Login</a> -->
      <button class="btn" onclick="regForm()">Register</button>
      <button class="btn" onclick="loginForm()">Login</button>
     
    </header>
    <section class="home" id="home">
      <div class="row">
        <div class="content">
          <h3>fresh Coffee in the morning</h3>
          <a href="#" class="btn">Buy One Now</a>
        </div>
        <div class="image">
          <img src="image/home1.png" alt="">
        </div>
      </div>
      <div class="image-slider">
        <img src="image/home1.png" alt="" />
        <img src="image/home3.png" alt="" />
        <img src="image/home2.png" alt="" />
      </div>
    </section>
    <section class="about" id="about">
      <h1 class="heading">about us <span>why choose us</span></h1>
      <div class="row">
        <div class="image">
          <img src="image/img.png" alt=""/>
        </div>
        <div class="content">
          <h3 class="title">what's make our coffee special!</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit
            dolorem dolor odio eveniet distinctio quidem quia. Expedita in
            maxime assumenda nesciunt alias vitae, commodi doloribus voluptate
            sapiente, iure quos dolorem.
          </p>
          <a href="#" class="btn">Read More</a>
          <div class="icons-container">
            <div class="icons">
                <img src="image/1.png" alt=""/>
                <h3>quality coffee</h3>
            </div>
            <div class="icons">
            <img src="image/2.png" alt=""/>
            <h3>Our branches</h3>
            </div>
            <div class="icons">
            <img src="image/3.png" alt=""/>
            <h3>free delivery</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="menu" id="menu">
        <h1 class="heading">our menu <span>popular menu</span></h1>
        <div class="box-container">
            <a href="#" class="box">
                <img src="image/menu1.png" alt="">
                <div class="content">
                    <h3>Our special Coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptate vero! Iure illum veniam deserunt.</p>
                    <span>$8.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu2.png" alt="">
                <div class="content">
                    <h3>Our special Coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptate vero! Iure illum veniam deserunt.</p>
                    <span>$8.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu3.png" alt="">
                <div class="content">
                    <h3>Our special Coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptate vero! Iure illum veniam deserunt.</p>
                    <span>$8.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu4.png" alt="">
                <div class="content">
                    <h3>Our special Coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptate vero! Iure illum veniam deserunt.</p>
                    <span>$8.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu5.png" alt="">
                <div class="content">
                    <h3>Our special Coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptate vero! Iure illum veniam deserunt.</p>
                    <span>$8.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu6.png" alt="">
                <div class="content">
                    <h3>Our special Coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, voluptate vero! Iure illum veniam deserunt.</p>
                    <span>$8.99</span>
                </div>
            </a>
        </div>
    </section>
    <section class="review" id="review">
      <h1 class="heading">review<span>what people says</span></h1>
      <div class="swiper review-slider">
        <div class="swaper-wrapper">
          <div class="swiper-slider box">
            <i class="fas fa-quote-left"></i>
            <i class="fas fa-quote-right"></i>
            <img src="image/pic1.png" alt="">
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse in quibusdam dignissimos harum laborum aspernatur ipsam. Laudantium, quos nam dicta ipsa fugit, unde voluptate doloremque ab sit, modi in ex.</p>
            <h3>John Deo</h3>
            <span>satisfied client</span>
          </div>
          <div class="swiper-slider box">
            <i class="fas fa-quote-left"></i>
            <i class="fas fa-quote-right"></i>
            <img src="image/pic2.png" alt="">
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse in quibusdam dignissimos harum laborum aspernatur ipsam. Laudantium, quos nam dicta ipsa fugit, unde voluptate doloremque ab sit, modi in ex.</p>
            <h3>John Deo</h3>
            <span>satisfied client</span>
          </div>
          <div class="swiper-slider box">
            <i class="fas fa-quote-left"></i>
            <i class="fas fa-quote-right"></i>
            <img src="image/pic3.png" alt="">
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse in quibusdam dignissimos harum laborum aspernatur ipsam. Laudantium, quos nam dicta ipsa fugit, unde voluptate doloremque ab sit, modi in ex.</p>
            <h3>John Deo</h3>
            <span>satisfied client</span>
          </div>
          <div class="swiper-slider box">
            <i class="fas fa-quote-left"></i>
            <i class="fas fa-quote-right"></i>
            <img src="image/pic4.png" alt="">
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse in quibusdam dignissimos harum laborum aspernatur ipsam. Laudantium, quos nam dicta ipsa fugit, unde voluptate doloremque ab sit, modi in ex.</p>
            <h3>John Deo</h3>
            <span>satisfied client</span>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- registration from -->
    <!-- <div class="form-popup" id="regform">
    <section class="book" id="book">
      <h1>Registration Form</h1>
      <form action="/action_page.php" class="form-container">
      <input type="text" placeholder="your name" class="box">
      <input type="number" placeholder="your contact number" class="box">
      <input type="email" placeholder="email" class="box">
      <input type="password" placeholder="your password" class="box">
      <input type="password" placeholder="your confirm password" class="box">
      <button type="submit" class="btn">Register</button>
      <button type="button" class="btn cancel" onclick="closeRegister()">Close</button>
      </form>
    </div>
    </section>
    

 -->
 <div class="form-popup1" id="regForm">
  <form action="code.php" method="post" class="form-cont">
    <h1>Register</h1>

    <label for="name" class="c"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required="true" class="b"></br>
    <label for="number" class="c"><b>Contact</b></label>
    <input type="number" placeholder="Enter Contact" name="contact" required="true" class="b"></br>
    <label for="email" class="c"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="emailaddress" required="true" class="b"></br>
    <label for="psw" class="c"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required="true" class="b"></br></br>
     <label for="address" class="c"><b>Address</b></label>
     <textarea name="address" placeholder="message" cols="20" rows="3" class="form-conti"></textarea></br>
    <button type="submit" class="btn">Register</button>
    <button type="button" class="btn cancel" onclick="closeRegister()">Close</button></br></br>
    <a href="login.php">Click here to complete registration</a></br></br>
    <a href="view.php">View All Registration</a>
  </form>

</div>
<!-- login form -->
<!-- <h2>Popup Form</h2>
<p>Click on the button at the bottom of this page to open the login form.</p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p> -->
<div class="form-popup" id="myForm">
  <form action="logcode.php" method="post" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="emailaddress" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeLogin()">Close</button>
  </form>
  
</div>


    <section class="book" id="book">
      <h1 class="heading">booking<span>reserver a table</span></h1>
      <form action="coffee.php" method="post">
      <input type="text" placeholder="your name" name="name" class="box">
      <input type="email" placeholder="email" name="email" class="box">
      <input type="number" placeholder="your contact number" name="number" class="box">
      <textarea placeholder="your message" class="box" cols="30" rows="10" name="message"></textarea>
      <input type="submit" value="send message" class="btn">
      </form>
    </section>

    <!-- footer -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Our Branches</h3>
          <a href="#"><i class="fas fa-arrow-right"></i>India</a>
          <a href="#"><i class="fas fa-arrow-right"></i>USA</a>
          <a href="#"><i class="fas fa-arrow-right"></i>Japan</a>
          <a href="#"><i class="fas fa-arrow-right"></i>India</a>
          <a href="#"><i class="fas fa-arrow-right"></i>USA</a>
          <a href="#"><i class="fas fa-arrow-right"></i>Japan</a>
        </div>

        <div class="box">
          <h3>Quick Link</h3>
          <a href="#"><i class="fas fa-arrow-right"></i>Home</a>
          <a href="#"><i class="fas fa-arrow-right"></i>About Us</a>
          <a href="#"><i class="fas fa-arrow-right"></i>Menu</a>
          <a href="#"><i class="fas fa-arrow-right"></i>Review</a>
          <a href="#"><i class="fas fa-arrow-right"></i>Book</a>
        </div>

        <div class="box">
          <h3>Contact Info</h3>
          <a href="#"><i class="fas fa-arrow-phone"></i>+1234567782</a>
          <a href="#"><i class="fas fa-arrow-phone"></i>+9396457043</a>
          <a href="#"><i class="fas fa-arrow-envelope"></i>shi123@gmail.com</a>
        </div>

        <div class="box">
          <h3>Contact Info</h3>
          <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
          <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
          <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
          <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>

        </div>
      </div>
      <div class="credit">Created by <span><a href="">develop by Kirti Pandey @2023</span> || All Rights Reserved</a>

      </div>
    </section>
    
  </body>
</html>
