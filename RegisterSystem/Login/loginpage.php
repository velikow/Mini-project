 <?php include('login.php') ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
           <meta charset="UTF-8">
           <title>Login</title>

           <style>
                     body {
                               font: 14px sans-serif;
                     }

                     .wrapper {
                               width: 360px;
                               padding: 20px;
                     }
           </style>
 </head>

 <body>
           <div class="wrapper">
                     <h2>Login</h2>
                     <p>Please fill in your credentials to login.</p>

                     <?php
                              if (!empty($login_err)) {
                                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                              }
                              ?>
                     <br>
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                               <div class="form-group">
                                         <label>Username</label>
                                         <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                         <span class="invalid-feedback"><?php echo $username_err; ?></span>
                               </div>
                               <div class="form-group">
                                         <label>Password</label>
                                         <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                         <span class="invalid-feedback"><?php echo $password_err; ?></span>
                               </div>
                               <div class="form-group">
                                         <button type="submit" class="btn" name="login">Login</button>
                               </div>
                               <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                     </form>
           </div>
 </body>

 </html>