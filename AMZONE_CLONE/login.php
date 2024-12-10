<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="design.css">
</head>
<body>
    
<div class="popup-container" id="signin-popup">

<div class="form">
    <form method="POST" action="lo.php"  >
        
        
        <div class="form-title">
            <h1>Sign In</h1>
           </div>
           <div class="input-group">
               
               <i class="fa fa-envelope"></i>
               <label for="">Email</label>
               <input type="text" placeholder="Email" name="email" required>
           </div>
           <br>
           <div class="input-group">
               
               <i class="fa fa-lock"></i>
               <label for="">Password</label>
               <input type="password" placeholder="Password" name="password" required>
           </div>
          
         
           <div class="form-title">
               <button type="sumbit" class="btn" name="signin">Continue</button>
           </div>
     
            
               <div class="account">
                   <p>By continuing, you agree to Amazon's <a href="">Conditions of Use and privacy notice</a>
                    </p><br><br>
                </div>
                    <div class="or">
                        <a href="">Need Help?</a><br><br>
                        <p>Buying for work?</p>
                        <p><a href="">Shop on Amazon Business</a></p>
                    </div> <br>
                    New to Amazon?
                    <div class="create">
                      <a href="reg.php">Create your Amazon account</a>
                    </div>                 
                
           
           
       </form>
   </div>
</div>
</body>
</html>