<?php
require_once 'config.php';

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $last_name  = $_POST['lastname'];
    $email      = $_POST['email'];
    $msg        = $_POST['message'];

    $STH = $db->prepare("INSERT INTO feedback(name, last_name, email, message) values(?,?,?,?)");
    $data = array($name,$last_name,$email,$message);
    $STH ->execute($data);

    echo 'Successfully Sent';
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<body>
    <div class="container-1">
        <img src="images/neon-logo.png" class="logo">
        <div class="content">
            <h1>AWES</h1>
            <h2>Barber_Shop</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam facilis magni sunt fuga delectus omnis odit deserunt qui, natus dolor.</p>
            <a href="#" class="link">DISCOVER MORE</a>
            <span>FEBRUARY_2021</span>
        </div>
        <img src="images/neon.png" class="featured-img">
    </div>


<!--fetures-->

    <section id="features">
    <div class="title-text">
        <p>FEATURES</p>
        <h1>Why Choose US</h1>
    </div> 
    <div class="feature-box">
        <div class="features">
            <h2>Experienced Staff</h2><img src="images/mtu.png" alt="">
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa fa-shield-alt"></i>
                </div>
                <div class="feature-text">
                    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quae quibusdam delectus.</p>
                </div>
            </div>
            <h2>Pre-Booking Online</h2><img src="images/phone.png" alt="">
            <div class="features-desc">
                <div class="feature-icon">
                    
                </div>
                <div class="feature-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quae quibusdam delectus.</p>
                </div>
            </div>
            <h2>Affordable Costs</h2>
            <div class="features-desc">
                <div class="feature-icon">
                   
                </div>
                <div class="feature-text">
                    <img src="images/cash.png" alt=""> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quae quibusdam delectus.</p>
                </div>
            </div>
        </div>
        <div class="features-img">
            <img src="images/pexels-thgusstavo-santana-2809652.jpg">
        </div>
    </div>
</section>


<!--Our services-->
<section class="services">
    <div class="title-text">
        <p>SERVICES</p>
        <h1>What We Do</h1>
    </div> 
    <div class="slider owl-carousel">
        <div class="card">
          <div class="img"><img src="service/beauty.jpg" alt=""></div>
          <div class="content">
            <div class="title">Beauty Products</div>
            <div class="sub-title">Graphic Designer</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
            <div class="btn">
              <button>Read more</button>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="img"><img src="service/cut.jpg" alt=""></div>
            <div class="content">
              <div class="title">Hair cut</div>
              <div class="sub-title">Graphic Designer</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
              <div class="btn">
                <button>Read more</button>
              </div>
            </div>
          </div>
        <div class="card">
          <div class="img"><img src="service/spa.jpg" alt=""></div>
          <div class="content">
            <div class="title">Spa services</div>
            <div class="sub-title">Web Developer</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
            <div class="btn">
              <button>Read more</button>
            </div>
          </div>
        </div>
      </div>

</section>


<!--Testimonials-->
<div class="title-text">
    <p>TESTIMONIALS</p>
    <h1>What customers say</h1>
</div>
    <div class="testimonial-row">
        <div class="testimonial-column">
            <div class="user">
                <img src="testimony/pexels-dương-nhân-1751596.jpg">
                <div class="user-info">
                    <h4>SETH BIRON <i class="bi bi-twitter"></i></h4>
                    <small>@sethgor</small>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora eum vitae esse dolor impedit. Magni ipsum doloremque iste at asperiores!</p>
        </div>
        <div class="testimonial-column">
            <div class="user">
                <img src="testimony/pexels-jordan-benton-1701626.jpg">
                <div class="user-info">
                    <h4>Lilian Senyor<i class="bi bi-twitter"></i></h4>
                    <small>@lyla</small>
                </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.  tempore fugiat eum natus quia, consequuntur mollitia facilis nemo.</p>
        </div>
        <div class="testimonial-column">
            <div class="user">
                <img src="testimony/pexels-mwabonje-1694881.jpg">
                <div class="user-info">
                    <h4>Barrack Roy<i class="bi bi-twitter"></i></h4>
                    <small>@barrack81</small>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut obcaecati temporibus sit doloribus quae id placeat itaque magnam dolore voluptatum?</p>
        </div>
    </div>
</div> 
<section class="exp">
    <div class="title-text">
        <h1>What to have an experience with Us?</h1>
    </div>
    <section id="contact-form">
        <form action="config.php" method="POST" textonly>
        <div class="contact-left">
        <h1 class="c-l-heading"><font style="border-bottom: 3px solid #1ED98B;">Write</font> Us</h1>
        <div class="f-name">
        <font >Name</font>
        <input type="text" placeholder="Full Name" name="name" required/>
        </div>
        <div class="f-email">
        <font >Email</font>
        <input type="email" placeholder="Example@gmail.com" name="email" required/>
        </div>
        </div>
        <div class="contact-right">
        <div class="message">
        <font >Message</font>
        <textarea name="message" rows="5" cols="20" placeholder="Write Message..."name="message"></textarea required>
        </div>
        <button>submit</button>
        </div>
            
        </form>
        
        </section>
</section>
<section class="media">
<i class="fa fa-facebook"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-linkedin"></i>
</section>
<script src="script.js"></script>
</body>
</html>