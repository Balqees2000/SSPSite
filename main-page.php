<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Pets Store</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/styles.css">
  <!--<link rel="stylesheet" href="css/style.css">-->

  <!--fontawesome code to include icons that i want-->
  <script src="https://kit.fontawesome.com/ad6b83001e.js" crossorigin="anonymous"></script>

  <!--booststap links-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  
</head>

<body>

  <section id="title">
    <!--Bootstrap link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Nav Bar 
    /*ms-auto means fill a space as much as u can*/
    -->
   <div class="container-fluid">

   
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <!--if i wanted th bar to be black bar then add "bg-dark" -->
      <a class="navbar-brand" href="main-page.php">Pets Store</a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <!--the elements menu will be displayed as a deop-down menu in mobile or tablet displays-->
        </span>
      </button>
       
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <!--the #pricing for example will take me to the pricing page and so on , we just have to write the section name in the href and it will direct me to that section in the website-->
             <a class="nav-link" href="#footer">contact</a> </li>
          
           <li class="nav-item">
             <a class="nav-link" href="#pricing">pricing</a> </li>
          
           <li class="nav-item">
             <a class="nav-link" href="#cta">download</a> </li>
          
      </ul>
      </div>
  </nav>



    <!-- Title -->

    <div class="row">
      <div class="col-lg-6">
        <h1>Discover Our New and Interesting Pets Collection.</h1>
        <button type="button" class="btn btn-dark btn-lg" "><i class="fa-brands fa-apple"></i><a id="btn6" href="shop.php">Shop Now</a></button>
        <button type="button" class="btn btn-outline-light btn-lg" ><i class="fa-brands fa-google-play"></i><a id="btn5" href="upload.php">Upload Your favourite Pic of your pet</a></button>
      </div>
     
    
    <div class="image-title col-lg-6 ">
      <img src="images/iphone6.png" alt="iphone-mockup">
    </div>
   
  </div>
  <!--this code here so the layout on a laptop screen will show the iphone image appear on the right and buttons on the left but on phone size will show the iamge and button under each other-->
</div>
</section>


  <!-- Features -->
  
  <section id="features">

    <!--we choose 4 because we have 3 boxes so (1/3* 12 = 4 )-->
    <div class="row"> 
     
      <div class="feature-box col-lg-4 fa-4x">
        <i class="icon fa-solid fa-heart"></i>
        <h3>Easy to use.</h3>
        <p>So Easy To Use, shop You're pet's Favorite Items of your pet Just By One click .</p>
      </div>
      
      <div class="feature-box col-lg-4 fa-4x">
        <i class="icon fa-solid fa-bullseye"></i>
        <h3>Elite Clientele</h3>
        <p>We have all the Pets, the greatest Pets.</p>
      </div>
  
      <div class="feature-box col-lg-4 fa-4x">
        <i class="icon fa-sharp fa-solid fa-circle-check"></i>
        <h3>Guaranteed to work.</h3>
        <p>Find the love of your Pet's Favorite Items or your money back.</p>
      </div>
  
    </div>
    
    

  </section>


  <!-- Testimonials -->

  <section id="testimonials">

   <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <h2>I no longer have to find a free time to shop at other stores. I've found the best website to shop online.</h2>
          <img class="testimonial-image" src="images/dog-img.jpg" alt="dog-profile">
          <em>Pebbles, New York</em>
      </div>
      <div class="carousel-item">
                <h2 class="testimonial-text">I can now share my favourite photos of my cat.</h2>
            <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
            <em>Beverly, Illinois</em>
      </div>
  
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  </section>


  <!-- Press -->

  <section id="press">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>


  <!-- Pricing -->

  <section id="pricing">

    <h2>A Plan for Every Pet's Needs</h2>
    <p>Simple and affordable price plans for your Pets.</p>
     
    <div class="row">

      <div class="pricing-column col-lg-4 col-md-6">

        <div class="card">

          <div class="card-header">
            <h3>Chihuahua</h3>
          </div>
          
              <div class="card-body">
                <h2>Free</h2>
                <p>5 New Items Per Day</p>
                <p>10 New Meals Per Month</p>
                <p>Unlimited App Usage</p>
                <button class="btn btn-lg btn-block btn-outline-dark
                "type="button" ><a href="signUp.php" id="btn1">Sign Up</a></button>
          </div>
         
      </div>

    </div>
      
      <div class="pricing-column col-lg-4 col-md-6">
     <div class="card">
      <div class="card-header">
        <h3>Labrador</h3>
    </div>
    
        <div class="card-body">
          <h2>$49 / mo</h2>
          <p>Unlimited Meals</p>
          <p>Unlimited Messages</p>
          <p>Unlimited App Usage</p>
          <button class="btn btn-lg btn-block btn-dark" type="button" ><a href="signUp.php" id="btn2">Sign Up</a></button>
    </div>
     </div> 
      </div>

      <div class="pricing-column col-lg-4">    
<div class="card">
  <div class="card-header">
    <h3>Mastiff</h3>
</div>

    <div class="card-body">
      <h2>$99 / mo</h2>
      <p>Pirority Listing</p>
      <p>Unlimited Uploading</p>
      <p>Unlimited Messages</p>
      <p>Unlimited App Usage</p>
      <button class="btn btn-lg btn-block btn-dark" type="button"><a href="signUp.php" id="btn3">Sign Up</a></button>
</div>
</div>

      </div>
</div>
    

</div>
    
     
  </section>


  <!-- Call to Action -->

  <div class="last-section">
    <section id="cta">

      <h3 class="CTA-heading">Find Your Favourite Pet's Food Today And Share Your Pet's Pictures Today</h3>
      <button class="btn btn-lg btn-block btn-dark
      "type="button"><i class="fa-brands fa-apple"></i><a href="Users.php" id="btn3">Subscribed Users</a></button>
      <button class="btn btn-lg btn-block btn-light" type="button"><i class="fa-brands fa-google-play"></i><a id="btn7" href="shared.php" >View People's Pets</a></button>
  
    </section>
  </div>
  


  <!-- Footer -->

  <footer id="footer">
    
    <i class="social-icon fa-brands fa-facebook"></i>
    <i class="social-icon fa-brands fa-twitter"></i>
    <i class="social-icon fa-brands fa-instagram"></i>
    <i class="social-icon fa-solid fa-envelope"></i>
    <p>© Copyright Pets Store</p>

  </footer>


</body>

</html>
