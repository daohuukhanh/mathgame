<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In Page</title>
        <link rel="stylesheet" href="style/mathgame.css" type="text/css" />
        <meta charset="utf-8" />
    </head>
    <body>
       <h2>Welcome to Math Game</h2>
       <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['email']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['email'] == 'kd@kd.com' && 
                  $_POST['password'] == '01234567') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                
                  header("Location: index.php");
                
               }else {
                  $msg = 'Wrong email or password';
               }
            }
         ?>
      </div>
        
    <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "email" placeholder = "email = kd@kd.com" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 01234567" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
    
        </div> 
      
   </body>
</html>