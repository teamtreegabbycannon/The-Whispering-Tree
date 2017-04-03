<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Whispering Tree</title>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/form.css">
  
  
</head>
<body>
	
	<header class="main-header">
		<div class="container clearfix">
			<h1 class="name"></h1>
			<ul class="main-nav" class="foot-nav">
        <li><a href="index.html"><b>Home</b></a></li>
				<li><a href="about.html"><b>About</b></a></li>
				<li><a href="clothing.html"><b>Clothing</b></a></li>
         <li><a href="accessories.html" ><b>Accessories</b></a>
				<li><a href="contact.html"class="selected"><b>Contact</b></a></li>
				<li><a href="reviews.html"><b>Reviews</b></a></li>
			</ul>
		</div>
	</header><!--/.main-header-->   

	<div class="banner">
     <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>  
      <img src="img/logo2fixed.png">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
	   <h1 class="headline">The Whispering Tree</h1>
	   <span class="tagline">Womens Clothing Store</span>
    
	</div><!--/.banner-->
 
    
<h3>Thank you for contacting us!</h3>
        <h3>We love to hear your feedback.</h3>
        <h3>We will get back with you as soon as possible.</h3>
      
             
 
   
             
  
    <?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "lmorrow@bellsouth.net ";
  $email = $_REQUEST['email'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, $comment, "From:" . $email);
  
  //Email response
  
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 
  
<?php
  }
?>
   
	