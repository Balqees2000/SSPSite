<html>
    <head>
         <link rel="stylesheet" href="css/signUp.css">
    </head>
    <body>
        <section class="login">

     
    <div class="login-container">

        <div class="card">
          <h2>Sign Up And Start Sharing Your pet's Favorite Stuff</h2>
          
          <form method="POST" action="signUpProcess.php" >
          <div class="email-field">
            <input type="text" name="username" id="username" placeholder="Enter Your Name" required >
            
            <input  name="email" id="email" placeholder="Enter Email" required>
            <input name="petName" id="petName" placeholder="Enter Your Pet Name" >
          
         </div>
            <div class="password-field">
                <input type="password" autocomplete="current-password" name="password" id="password"  placeholder="Enter Password" required minlength="6" maxlength="18" >
            </div>
              <div class="button-div">
                    <button class="btn2 btn-lg btn-block btn-light" type="submit">Sign Up</button>
                 </div>
                 </form>
                 <br>
                  
      </div>
</div>  
</section>

</body>
</html>