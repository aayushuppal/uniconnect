<?php
$conn = new MongoClient ( "ec2-54-68-28-28.us-west-2.compute.amazonaws.com:12345" );
	$db = $conn->kuchbhi; 
	$ques = $db->question;
	$quesAndAns = "";
	$q = "";

	function fetchAllQuesAndAnswers() {
	global $ques;
	global $quesAndAns;
	global $q;
	//All the questions and related answers;
	$quesAndAns = $ques->findOne(array("_id"=>2));			//calls the one with id = 1
}

fetchAllQuesAndAnswers();
?>

<html>
	<head>
		<title>UniConnect Forum</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
		<script type="text/javascript">	
			var q = <?php echo json_encode($quesAndAns); ?>;
		</script>

		<script src="js/basicScript.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/stylesrch.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.html">UniConnect</a>description</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Layouts</a>
							<ul>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li>
									<a href="">Submenu</a>
									<ul>
										<li><a href="#">Option One</a></li>
										<li><a href="#">Option Two</a></li>
										<li><a href="#">Option Three</a></li>
										<li><a href="#">Option Four</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#" class="button">Sign Up</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>UniConnect</h2>
				<p>Discuss Learn Thrive</p>

			</section>

		<!-- Main -->
			<section id="main" class="container shiftup">
		
			<section id="answerSec" class="box special">
				<form action="/search" method="get" class="sfm" name="theform">
    			<input type="text" name="q" value="" id="sf"/>
				</form>	
		</section>

			<section id="answerbox" class="box special answerbox">
				<br/>
				<div class="AnsPop">
				<form>
					<div class="row uniform 50%">
						<div class="8u 12u(3)">
							<input id="qtextboxUnique" type="text" name="qtextbox" id="qtextbox" placeholder="Enter an answer here!"required></input>
						</div>
					</div>
				</form>	
				<a id="PostAnswer" class="button QuesBtn2">Post answer</a>
			</div>
			</section>

			</section>
			
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved.</li>
				</ul>
			</footer>

	</body>
</html>