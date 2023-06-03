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
             <a class="nav-link" href="#pricing">Food</a> </li>
          
           <li class="nav-item">
             <a class="nav-link" href="#press">Toys</a> </li>
      </ul>
      </div>
  </nav>

    <!-- Title -->

    <div class="row">
      <div class="col-lg-6">
        <h1>Discover Our New and Interesting Pets Collection.</h1>
       <h3>What are you waiting for.. Shop Now And Enjoy Your Discount</h3>
      </div>
     
   
  </div>
  <!--this code here so the layout on a laptop screen will show the iphone image appear on the right and buttons on the left but on phone size will show the iamge and button under each other-->
</div>
</section>


  <!-- Features -->
  
  <section id="features">

    <!--we choose 4 because we have 3 boxes so (1/3* 12 = 4 )-->
    <div class="row"> 
     
     <h1> Pets Toys Section </h1>
  
    </div>
    
  </section>

  <!-- Press -->

  <section id="press">
    <img class="press-logo" src="images/toy1.jpg" alt="" width="300px" height="200px">
    <img class="press-logo" src="images/toy2.jpg" alt="" width="300px" height="200px">
    <img class="press-logo" src="images/toy4.jpg" alt="" width="300px" height="200px">
     <img class="press-logo" src="images/toys3.jpg" alt="" width="300px" height="200px">

  </section>


  <!-- Pricing -->

  <section id="pricing">

    <h2>Pets Food Section</h2>
     
    <div class="row">

      <div class="pricing-column col-lg-4 col-md-6">
      
      <img src="images/food3.jpg" width="300px" height="200px">

    </div>
      
      <div class="pricing-column col-lg-4 col-md-6">
       <img src="images/food1.jpg" width="300px" height="200px">
      </div>

      <div class="pricing-column col-lg-4">    
        <img src="images/food2.jpg" width="300px" height="200px">
       </div>
       
      <div class="pricing-column col-lg-4">    
        <img src="images/food4.jpg" width="300px" height="200px">
       </div>
       
       <div class="pricing-column col-lg-4">    
        <img src="images/food6.jpg" width="300px" height="200px">
       </div>
       
       <div class="pricing-column col-lg-4">    
        <img src="images/food7.jpg" width="300px" height="200px">
       </div>
    
</div>
  </section>

</body>