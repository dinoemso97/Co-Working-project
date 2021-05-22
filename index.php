<?php
$connection = "config/config.php";
   if(file_exists($connection)) {
   
      include_once($connection);
   
   
   }
   else {
   
   die("There was an mistake,soon we will be available! <br>");
   
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
       <title></title>
	   <meta charset="utf-8"/>
	   <meta name="viewport" content="width=device-width , initial-scale=1.0"/>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
	   <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Amaranth&family=Oxygen:wght@300&display=swap" rel="stylesheet">
	   <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.gstatic.com"/>
       <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  
	  <link rel="stylesheet" type="text/css" href="css/style.css"/>
   </head>
   <body>
   <?php
   
   
   if(isset($_SESSION['id'])) {
   
      //Session exists
   
   }
   else {
   
     //Session not exists
	 ?>
	 <header> 
	     <a href="index.php" class="logo">Celery.</a>
		 <ul>
		    <li><a href="#banner">Home</a></li>
			<li><a href="#workspace">Workspace</a></li>
			<li><a href="#service">Service</a></li>
			<li><a href="#events">Events</a></li>
			<li><a href="#reviews">Reviews</a></li>
			<li><a href="#contact">Contact Us</a></li>
		 </ul>
		 
		 <div class="login-register">
		     <a href="index.php?file=login" class="login-link">Log in</a>
			 <a href="index.php?file=register" class="register-link">Sign Up</a>
		 </div>
	  </header>
	 
	 <?php
	 if(isset($_GET['file'])) {
	 
	 $file = $_GET['file'] . ".php";
	 if(file_exists($file)) {
	 
	    include_once($file);
	 
	 
	 }
	 else {
	 
	    //Errors(file don't exists)
	 
	 }
	 
	 
	 }
	 else {
	 
	  //Designing index.php page 
	 ?>
	 
	  <!-- Our spaces page -->
	  <section class="banner" id="banner">
	     <div class="content">
		  <div class="title">
		     <p class="title-p">Introducing  _______</p>
		     <h2 class="titleText"><span>Revolutionary</span> co-working <br>
			 space to realize your <br> innovation</h2>	
			 
		  </div>
		  <div class="findspaceForm">
		    <h3>Find your space now</h3>
			<div class="inputBox">
			  <div class="dropdown">
			     <div class="dropdown-select">
				    <span class="select1">Location</span>
				    <span class="select">Malang, Indonesia</span>
					<i class="fa fa-angle-down"></i>
				 </div>
				 <!--
				 <div class="dropdown-list">
				   <div class="dropdown-list_item">Malang, Indonesia</div>
				   <div class="dropdown-list_item">Dubai, Emirates</div>
				   <div class="dropdown-list_item">New York, USA</div>
				 </div>
				 -->
			  </div>
			</div>
			<div class="inputBox">
			<div class="dropdown">
			     <div class="dropdown-select">
				    <span class="select1">Type</span>
				    <span class="select">Private Office</span>
					<i class="fa fa-angle-down"></i>
				 </div>
				  <!--
				 <div class="dropdown-list">
				   <div class="dropdown-list_item">Malang, Indonesia</div>
				   <div class="dropdown-list_item">Dubai, Emirates</div>
				   <div class="dropdown-list_item">New York, USA</div>
				 </div>
				 -->
			  </div>
			  
			</div>
			<div class="inputBox">
			  <div class="dropdown">
			     <div class="dropdown-select">
				    <span class="select1">Date</span>
				    <span class="select">9 August 2021</span>
					<i class="fa fa-angle-down"></i>
				 </div>
				 <!--
				 <div class="dropdown-list">
				   <div class="dropdown-list_item">Malang, Indonesia</div>
				   <div class="dropdown-list_item">Dubai, Emirates</div>
				   <div class="dropdown-list_item">New York, USA</div>
				 </div>
				 -->
			  </div>
			</div>
			<div class="inputBox">
			   <input type="submit" value="Send"/>
			</div>
		  </div>
		  <h5 class="titleText1">In frispes, we spearhead new initiativies and <br>
			 provide mentorship to a new startup, and <br>
			 help grow their opportunities in key local, <br>
			 regional and global markets.</h5>
		  <div class="banner-images">
		  
		    <!-- <img src="css/images/office.jpg"/> -->
		  </div>
		  </div>
		</section>
	  <!-- Our Spaces page -->
	  <section class="spaces" id="spaces">
	  
	      <div class="content">
		  <div class="title">	     
		      <h2 class="titleText spacestitle">Our Spaces</h2>	
              <h5 class="spacestitle1">Our space is designed to give you a different experience <br>
			  when working with your team or personally</h5>			  
		    </div>
		   
			<div class="box box1">
			  <div class="imgBx">
			     <img src="css/images/workingteam.jpg"/>
                 <a href="#" class="link-spaces"><i class="fa fa-angle-right"></i></a>				 
			  </div>
			  <div class="text">
			    <h3>Working with team</h3>
			  </div>
			</div>
			
			<div class="box box2">
			  <div class="imgBx">
			  
			  
			    <img src="css/images/spaceoffice2.png"/> 
				<a href="#" class="link-spaces1">Check avaibility<i class="fa fa-angle-right"></i></a>
				
				
				
			  </div>
			  <div class="text">
			    
			  </div>
			</div>
			
			<div class="box box3">
			  <div class="imgBx">
			    <img src="css/images/customoffice.jpg"/> 
				<a href="#" class="link-spaces"><i class="fa fa-angle-right"></i></a>
			  </div>
			  <div class="text">
			    <h3>Custom office</h3>
			  </div>
			</div>
		  
		  </div>
	  </section>
	  
	  
	   <!-- Brands page -->
	  <section class="brands" id="brands">
	      
	      <div class="content">
		  <div class="title">	     
		      <h2 class="titleText brandstitle">Who uses Calery?</h2>	
              <h5 class="brandstitle1">Big brands, small bussiness, new startup and individuals</h5>			  
		    </div>
		   
			<div class="box box1">
			  <div class="imgBx">
			     <img src="css/images/google.png"/>
			  </div>  
			</div>
			
			<div class="box box2">
			  <div class="imgBx">		  
			    <img src="css/images/tokopedia.png" /> 	
			  </div>	  
			</div>
			
			<div class="box box3">
			  <div class="imgBx">
			    <img src="css/images/upworl.png"/> 
			  </div>
			</div>
			
			<div class="box box4">
			  <div class="imgBx">
			     <img src="css/images/microsoft.png"/>
			  </div>  
			</div>
			
			<div class="box box5">
			  <div class="imgBx">		  
			    <img src="css/images/shopify.png"/> 	
			  </div>	  
			</div>
			
			<div class="box box6">
			  <div class="imgBx">
			    <img src="css/images/stripe.png"/> 
			  </div>
			</div>
		  
		  </div>
	  </section>
	  
	
	   <!-- Answer page -->
	  <section class="answers" id="answers">
	     <div class="content">
		    <div class="title">	     
		      <h2 class="titleText answerstitle">Find the answers to anything <br> 
			  you need in our Help Center</h2>	
              
		    </div>
			
			<div class="box box1">
			  <div class="text">
			    <h3>How do I know if a <br>
				space is available?</h3>
			  </div>
			   <div class="container-down"><i class="fa fa-angle-down" style="font-size:24px"></i></div>
			</div>
			
			<div class="box box2">		  
			  <div class="text">
			    <h3>How do I book a <br>
				space?</h3>
			  </div>
			  <div class="container-down container-down1"><i class="fa fa-angle-down" style="font-size:24px"></i></div>
			</div>
			
			<div class="box box3">
			  <div class="text">
			    <h3>How do reviews <br>
				work?</h3>
			  </div>
			  <div class="container-down"><i class="fa fa-angle-down" style="font-size:24px"></i></div>
			</div>
			
			
			<a href="#" class="answers-link">More questions <i class="fa fa-angle-right" style="font-size:24px"></i></a>
		 </div>
	  </section>
	  
	  <!-- News,events page -->
	  <section class="news">
	    <div class="content">
		  <div class="title">	     
		      <h2 class="titleText newstitle">News, events and insights for you</h2>	
			  <a href="#" class="news-link">See More <i class="fa fa-angle-right" style="font-size:24px"></i></a>
              			  
		    </div>
		   
			<div class="box1">
			  <div class="imgBx">
			     <img src="css/images/event1.jpg"/>
                
			  </div>
			  <div class="text">
			    <h3>Google I / O 2020 <br>
				news update</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper risus ex, 
				quis pulvinar nisl fringilla eget.</p>
				
			  </div>
			</div>
			
			<div class="box box2">
			  <div class="imgBx">
			    <img src="css/images/event2.jpg"/> 
			  </div>
			  <div class="text">
			  <h3>Minimal workspace for  <br>inspirations</h3>
			  <p>Anthony Masional</p>
			  </div>
			</div>
			
			<div class="boxes box3">
			  <div class="imgBx">
			    <img src="css/images/event3.jpg"/> 	
			  </div>
			  <div class="text">
			    <h3>5+ tips to find comfortable co-working sapce</h3>
			  <p>Steve Peterson</p>
			  </div>
			</div>
			
			<div class="boxes box4">
			  <div class="imgBx">
			     <img src="css/images/event4.jpg"/>
                
			  </div>
			  <div class="text">
			    <h3>Morning routine to boos your mood</h3>
			  <p>Elizabeth Swan</p>
			  </div>
			</div>
			
			<div class="boxes box5">
			  <div class="imgBx">			  
			    <img src="css/images/event5.jpg"/> 
			  </div>
			  <div class="text">
			  <h3>5+ tips to find comfortable co-working sapce</h3>
			  <p>Steve Peterson</p>
			  </div>
			</div>
			
			
		    
		  </div>
	  </section>
	  
	  
	  <!-- Footer  -->
	  <footer class="footer" id="footer">
	   
	   
	     <div class="content">  
		   <div class="footer-left">
		    <a href="#" class="logo-footer">Celery.</a>
		   <p class="paragraph-footer">We offer comfortable spaces,cozy <br>
		   cafe,high-speed internet, spacious <br>
		   parking area and many more for <br>
		   your best workspaces and meetings.</p>
		    <div class="footer-icon">
			  <img src="css/images/fb.png" width="20" height="20" />
			  <img src="css/images/inst.png" width="20" height="20"/>
			  <img src="css/images/yt.png" width="20" height="20"/>
			</div>
		</div>
			
		 
		 
		   
			
			<div class="box box1">
			  <div class="text">
			    <h3>Spaces</h3>
				<ul>
				<li>Co-Working</li>
				  <li>Meeting rooms</li>
				  <li>Event spaces</li>
				  <li>Child playground</li>
				  <li>Cafe & restaurants</li>
				  </ul>
			  </div>
			</div>
			
			<div class="box box3">
			  <div class="text">
			    <h3>Company</h3>
				<ul>
				<li>About Us</li>
				  <li>Pricing</li>
				  <li>Careers</li>
				  <li>Press</li>
				  </ul>
			  </div>
			</div>
			
			<div class="box box4">
			  <div class="text">
			    <h3>Support</h3>
				<ul>
				  <li>FAQs</li>
				  <li>Privacy Policy</li>
				  <li>Help</li>
				  
				  </ul>
			  </div>
			</div>
			
			 <div class="box box4">
			  <div class="text">
			    <h3>Contact Us</h3>
				<ul>
				  <li><b>E.</b> Hello@calery.com</li>
				  <li><b>A.</b> Jalan Jayakatang No.301<br>
				  Ngasem Kediri</li>
				  <li><b>P.</b> (+62) 82334670000</li>
				</ul>
			  </div>
			</div>
		 
		 
		 </div>
	  </footer>
	 
	 
	 
	 <?php
	 
	 }
   
   }
  
   ?>
   
   <script type="text/javascript">
		  window.addEventListener('scroll', function(){
		   
		   const header = document.querySelector('header');
		   header.classList.toggle("sticky", window.scrollY > 0);
		   
		   });
		   
		   function toggleMenu() {
		   
		   const menuToggle = document.querySelector('.menuToggle');
		   const navigation = document.querySelector('.navigation');
		   menuToggle.classList.toggle('active');
		   navigation.classList.toggle('active'); 
		   
		   } 
		</script>
   </body>
</html>