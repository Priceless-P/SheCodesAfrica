<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" type="image/icon" href="/assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="/assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="/assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="/assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="/assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo URLROOT. '/css/style.css'?>">
	<script src="<?php echo URLROOT. '/js/script.js'?>"></script>
    <title><?php echo APPNAME; ?></title>
  </head>
  <body>
      <div class="container-fluid">
      <nav class="navbar navbar-expand logo sticky-top row" style="background-color: #DAA520;color:black">
           
 <!-- <button type="button" class="navbar-toggle light" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"style="color:white"></i>-->
	<!--</button>-->
  
    <a  href="/"><?php echo APPNAME; ?></a>
   
   <div class="collapse navbar-collapse menu-ui-design justify-content-end" id="navbar-menu">
	<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
        <?php if(isLoggedIn()):?>
      <li class="scroll">
         <a href=" addproduct" name="ADD">Add Product</a>
      </li>
      <?php else: ?>
      <li class="scroll ms-auto">
      <a href="<?php echo URLROOT. '/Users/login'?>" name="login" role="button" >Login</a>
      </li>
       <li class="scroll">
      <a href="<?php echo URLROOT. '/Users/register'?>" name="login" role="button" class="btn btn-secondary add">Register</a>
      </li>
      <?php endif ?>
      <?php if(isLoggedIn()):?>
     <li class="scroll">
         <a href="Users/logout" name="logout">Logout</a>
         </li>

       <?php endif ?>
    </ul>
    
  </div>
</nav>
