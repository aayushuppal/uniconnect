<!DOCTYPE HTML>
<html>
	<head>
	<style type="text/css">
		nav ul {
		  margin: 0;
		  padding: 0;
		  list-style: none;
		  position: relative;
		  float: right;
		  background: #eee;
		  border-bottom: 1px solid #fff;
		  border-radius: 3px;    
		}
		
		nav li {
		  float: left;          
		}
		nav #login {
		  border-right: 1px solid #ddd;
		  box-shadow: 1px 0 0 #fff;  
		}
		nav #login-trigger{
		  display: inline-block;
		  *display: inline;
		  *zoom: 1;
		  height: 25px;
		  line-height: 25px;
		  font-weight: bold;
		  padding: 0 8px;
		  text-decoration: none;
		  color: #fff;
		  /*text-shadow: 0 1px 0 #fff; */
		  border-radius: 3px 0 0 3px;
		  
		}
		nav #login-trigger {
		  border-radius: 3px 0 0 3px;
		}		
		nav #login-trigger:hover,
		nav #login .active{
		  background: #0c3d5c;	
		}
.btn {
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Arial;
  color: #ffffff;
  font-size: 14px;
  background: #0c3d5c;
  padding: 6px 20px 6px 20px;
  text-decoration: none;
  
}

.btn:hover {
  background: #58b1e8;
  text-decoration: none;
}	
nav #login-content {
  display: none;
  position: absolute;
  top: 49px;
  right: 10;
  z-index: 999;    
  background: #fff;
  background-image: linear-gradient(top, #fff, #eee);  
  padding: 15px 10px 3px 5px;
  box-shadow: 0 2px 2px -1px rgba(0,0,0,.9);
  border-radius: 3px 0 3px 3px;
}

nav li #login-content {
  right: 0;
  width: 250px;  
}

/*--------------------*/

#inputs input {
  background: #f1f1f1;
  padding: 6px 5px;
  margin: 0 0 5px 0;
  width: 238px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: 0 1px 1px #ccc inset;
}

#inputs input:focus {
  background-color: #fff;
  border-color: #e8c291;
  outline: none;
  box-shadow: 0 0 0 1px #e8c291 inset;
}

/*--------------------*/

#login #actions {
  margin: 10px 0 0 0;
}

#login #submit {    
  background-color: #d14545;
  background-image: linear-gradient(top, #e97171, #d14545);
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  text-shadow: 0 1px 0 rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;    
  border: 1px solid #7e1515;
  float: left;
  height: 30px;
  padding: 0;
  width: 100px;
  cursor: pointer;
  font: bold 14px Arial, Helvetica;
  color: #fff;
}

#login #submit:hover,
#login #submit:focus {    
  background-color: #e97171;
  background-image: linear-gradient(top, #d14545, #e97171);
} 

#login #submit:active {   
  outline: none;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;   
}

#login #submit::-moz-focus-inner {
  border: none;
}

#login label {
  float: right;
  line-height: 30px;
}

#login label input {
  position: relative;
  top: 2px;
  right: 2px;
}			

	</style>
		<title>Connecting Peers</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
<!-- 		<script src="js/jquery.min.js"></script> -->
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/scrollwatch.js"></script>
		<script src="js/init.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/bootstrap-responsive.css" />
			<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="css/bootstrap.css" />
			<link rel="stylesheet" href="css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/component.css" />
		</noscript>
		
			
		<script type="text/javascript">
		$(document).ready(function(){
			  $('#login-trigger').click(function(){
			    $(this).next('#login-content').slideToggle();
			    $(this).toggleClass('active');          
			    
			    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
			      else $(this).find('span').html('&#x25BC;')
			    })
			});
		</script>
	
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<nav id="nav">				
				<ul>
					<li id="login"><button class="btn">Home</button></li>
					<li id="login"><a href="#" class="btn icon fa-angle-down" id="login-trigger">Sign In</a>							
					     <div id="login-content">
					        <form>
					          <fieldset id="inputs">
					            <input id="username" type="text" name="UserName" placeholder="Your UserName address" required>   
					            <input id="password" type="password" name="Password" placeholder="Password" required>
					          </fieldset>
					          <fieldset id="actions">
					            <input type="submit" id="submit" value="Log in" class="btn">
					            <label><input type="checkbox" checked="checked"> Keep me signed in</label>
					          </fieldset>
					        </form>
		        	      </div> 						
					</li>
				</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<b ><h1 class="noBlur">UniConnect</h1></b>
				<p><b style="color: black;"><h2>Answers will find you...</h2></b></p>
				<ul class="actions noBlur">
					<li><a href="#" class="button special">Sign Up</a></li>
					<li><a href="#" class="button">Learn More</a></li>
				</ul>
			</section>

		<!-- Main -->
			<section id="main" class="container">
		
				<section class="box special">
					<header class="major">
						<h2>Introducing a platform where you can directly 
						</br>connect with your University peers
						<br />
						for blah blah blah</h2>
					</header>
				</section>

			</section>
			
		<!-- CTA -->
			<section id="cta">
				
				<h2>Sign up for beta access</h2>

				<form>
					<div class="row uniform 50%">
						<div class="8u 12u(3)">
							<input type="email" name="email" id="email" placeholder="Email Address" />
						</div>
						<div class="4u 12u(3)">
							<input type="submit" value="Sign Up" class="fit" />
						</div>
					</div>
				</form>
				
			</section>
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; UB Hackathon </li>
				</ul>
			</footer>

	</body>
</html>