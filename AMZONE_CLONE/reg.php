<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="design.css">
    
</head>
<body>
    
<div class="popup-container" id="register-popup">
</div>
     <div class="form">
            <form method="post"  action="connection.php">
            
                <div class="form-title" >
                    <h1>Create account</h1>
                </div>
                <br>
                <div class="input-group">
                    <i class="fa-solid fa-user"></i>
                    <label for="">First Name</label>
                <input type="text" placeholder="First Name" name="firstName" required>
                </div>
                    
                    <div class="input-group">
                
                        <i class="fa-solid fa-user"></i>
                        <label for="">Last Name </label>
                        <input type="text" placeholder="Last Name" name="lastName" required>
                    </div>
                    
                    <div class="input-group">
                
                        <i class="fa fa-envelope"></i>
                        <label for="">Email</label>
                        <input type="text" placeholder="Email" name="email" required>
                    </div>
                    
                    <div class="input-group">
                
                        <i class="fa fa-lock"></i>
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                  
                    <div class="form-title">
                       
                        <button type="sumbit" class="btn" name="signup">SignUp</button>
                    </div>
               
                    <div class="or">
                      
                        <p>Buying for work?</p>
                        <p><a href="">Create for free Business account</a></p>
                    </div>
                
              
                <div class="account">
                    Already Have Account?<a href="login.php">sign in</a>
                       
                    
                </div>
            
        </form>
        </div> 
    
 </body> 
</html> 