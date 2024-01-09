<?php


   require "Connector.php";

   if(isset($_POST['save'])) {
      $fullname = htmlentities($_POST['fullname']);
      $lastname = htmlentities($_POST['lastname']);
      $email = htmlentities($_POST['email']);
      $password = $_POST['password'];
   }


   if(empty($fullname) || is_numeric($fullname)){
      echo "<script>alert ('Please enter fullname!!')</script>";
   }
   else if(empty($lastname) || is_numeric($lastname)){
      echo "<script>alert('Please enter lastname!')</script>";
   }
   else if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "<script>alert('Please enter email!')</script>";
   }
   else if(empty($password)){
      echo "<script>alert('Please enter password')</script>";
   }
   else{
      CRUD:: Insert('signup', ['Fullname' => $fullname, 'Lastname' => $lastname, 'Email' => $email, 'Password' => password_hash($password, PASSWORD_DEFAULT)]);
   }
?>


<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jan 2024 10:19:58 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>NotePlus | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/note-plus/html/assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/backend-plugin.mine209.css?v=1.0.0">
      <link rel="stylesheet" href="../assets/css/backende209.css?v=1.0.0">
      <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="../assets/vendor/%40icon/dripicons/dripicons.css">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card">
                     <div class="logo-detail">            
                           <div class="d-flex align-items-center"><img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">NotePlus</h4></div>
                     </div>  
                     <h3 class="mb-2">Sign Up</h3>
                     <p>Create your  account.</p>
                     <form method="post">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" placeholder=" " name="fullname" id="fullname" require>
                                 <label for="fullname">Full Name</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" placeholder=" " name="lastname" id="lastname" require>
                                 <label for="lastname">Last Name</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="email" placeholder=" " name="email" id="email" require>
                                 <label for="email">Email</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" placeholder=" " name="password" id="password" require>
                                 <label for="password">Password</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" placeholder=" " name="confirmPassword" id="confirmPassword">
                                 <label for="confirmPassword">Confirm Password</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="custom-control custom-checkbox mb-3 text-left">
                                 <input type="checkbox" class="custom-control-input" id="customCheck1">
                                 <label class="custom-control-label" for="customCheck1">I agree with the terms of use</label>
                              </div>
                           </div>
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Sign Up</button>
                        <p class="mt-3 mb-0">
                           Already have an Account <a href="auth-sign-in.html" class="text-primary"><b>Sign In</b></a>
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
  </body>

<!-- Mirrored from templates.iqonic.design/note-plus/html/backend/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jan 2024 10:19:58 GMT -->
</html>