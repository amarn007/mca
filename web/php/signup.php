<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

   <title>login page </title>
    
       <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
<style>
      body,html{
                
                background-image: url("img5.jpg");
                 background-color:#152733;
                
                
                
            }
        .backg{
            height:80px;
            width:100%;
           background-color:#000000;
           position:fixed;
        }
        .register-photo {
   background-image: url("img5.jpg");
  padding:140px 0;
}

.register-photo .image-holder {
  display:table-cell;
  width:auto;
  background:url(abc.jpg);
  background-size:cover;
  background-position: center center;
}

.register-photo .form-container {
  display:table;
  max-width:900px;
  width:90%;
  
  margin:0 auto;
  box-shadow:1px 1px 5px rgba(0,0,0,0.1);

    }

.register-photo form {
  display:table-cell;
  width:400px;
  background-color:#ffffff;
  padding:40px 60px;
  color:#505e6c;
}

@media (max-width:991px) {
  .register-photo form {
    padding:40px;
  }
}

.register-photo form h2 {
  font-size:24px;
  line-height:1.5;
  margin-bottom:30px;
}

.register-photo form .form-control {
  background:#f7f9fc;
  border:none;
  border-bottom:1px solid #dfe7f1;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
  text-indent:6px;
  height:40px;
}

.register-photo form .form-check {
  font-size:13px;
  line-height:20px;
}

.register-photo form .btn-primary {
  background:#f4476b;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:35px;
  text-shadow:none;
  outline:none !important;
}

.register-photo form .btn-primary:hover, .register-photo form .btn-primary:active {
  background:#eb3b60;
}

.register-photo form .btn-primary:active {
  transform:translateY(1px);
}

.register-photo form .already {
  display:block;
  text-align:center;
  font-size:12px;
  color:#6f7a85;
  opacity:0.9;
  text-decoration:none;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

        </style>
</head>
<body>
     <div class="backg">
     <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">Training<em> Studio</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                             <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="main-button"><a href="gymlogin.php">login</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
        </div>
  
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
               <form action="signup.php"  method="post">
                  
                <h2 class="text-center"><strong>Create an account</strong></h2>
                		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
               <div class="form-group"><input class="form-control" type="text" name="gymname" placeholder="Gym name" required="TRUE"></div>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="User name" required="TRUE"></div>
                <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Email" required="true"></div>
                <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="Contact no" required="true"></div>
                 <div class="form-group"><textarea class="form-control" name="address" rows="4" cols="50" placeholder="ADDRESS" required="true"></textarea></div>
                <div class="form-group">Tirur
                <input type="radio"  name="city" value="Tirur">
                 Kuttippuram
                <input type="radio"  name="city" value="kuttippuram"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required="true"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="confirm Password" required="true"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><input class="btn btn-primary btn-block" type="submit" name="submit" value="signup"></div></form>
        </div>
      
    </div>
  
   
 <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

   
</body>

</html>
