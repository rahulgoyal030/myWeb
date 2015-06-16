<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Log-in</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="css/signup.css">
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> ></script> 
   <script src="signup.js"></script>

    
    
    
  </head>

  <body>

    <div class="login-card">
    <h1>SignUP</h1><br>
  <form method="post"  action="signupAction.php">
    <input type="text" name="user" placeholder="Username">
    <input type="email" name="email" autocomplete="on" placeholder="email-id"><br>
    <input type="password" name="pass" id="pass" placeholder="Password">
    <input type="password" name="pass1"  id="pass1" placeholder="re-enter password">
    <div class="div1 id="reText"> </div>
<!--     <input type="submit" name="login" class="login login-submit" value="SignUp">
 -->   <button type="submit" name="button" class="login login-submit"  id="button">signUp</button>
  </form>
    
  
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
   <script src="signup.js"></script>


    
    
    
    
  </body>
</html>
