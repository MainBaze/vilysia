<?php
if(isset($_POST['submit'])){
 $name=$_POST['name'];
  $email=$_POST['email'];

  //send mail 
 $to='markusriisebbesen@gmail.com';
 $subject='Vilysia Staff Application';
 $body='<html>
 <body>
 <h3>Application for mc.vilysia.com</h3>
 <hr>

 <p> Name : '.$name.'</p>
 <br>

 <p> Email : '.$email.'</p>

 </body>

 </html>';

 $headers  ="From:".$name."<".$email.">\r\n";
 $headers .="reply-To:".$email."\r\n";
 $headers .="NINE-Version: 1.0\r\n";
 $headers .="Content-type: text/html; charset=utf-8";


//confirmation mail
 $user=$email;
 $usersubject = "Vilysia Application";
 $userheaders = "From: Markusriisebbesen.com\n";
 $usermessage = "Thank you for the interest. You'll receive a reply soon";


//sending process
 $send=mail($to, $subject, $body, $headers);
 $confirm=mail($user, $usersubject, $userheaders,$usermessage );

 if($send && $confirm){
  echo "success";
 }

 else{
  echo "Failed";
 }

}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Contact Form</title>
</head>
<body>
<form action="" method="POST">

<input type="text" name="name" placeholder="Name">
<input type="email" name="email" placeholder="email">
<input type="submit" name="submit" value="send">
</form>

</body>
</html>

<!DOCTYPE HTML>

<meta name=”viewport” content=”width=device-width, initial-scale=1″>
<link rel="icon" href="https://imgur.com/0f3ry71.png" type="image/x-icon"/>

<html>
	<head>
		<title>Vilysia</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
		                <h1>Apply</h1>
<!--							<p>Vilysia</p> -->
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current, primarycolor"><a href="index.html">Home</a></li>
								<li><a href="vote.html">Vote</a></li>
								<li><a href="http://buy.vilysia.com/category/1415005" target="_blank">Ranks</a></li>
								<li>
									<a class="primarycolor" style="color:#31BDDD">More</a>
									<ul>
										<li><a class="primarycolor" href="#" style="color:#31BDDD">Apply</a></li>
<!--										<li><a href="#">Magna veroeros</a></li>
										<li><a href="#">Etiam nisl</a></li>
										<li>
											<a href="#">Sed consequat</a>
											<ul>
												<li><a href="#">Lorem dolor</a></li>
												<li><a href="#">Amet consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam nisl</a></li>
												<li><a href="#">Sed feugiat</a></li> -->
											</ul>
								</ul>
								</li>
						</nav>

				</section>

			<!-- Intro -->
				<section id="intro" class="wrapper style1">
					<div class="title">mc.vilysia.com</div>
					<div class="container">
						<p class="style2">
							Welcome, player!<br class="mobile-hide" />
<!--							site template by <a href="http://html5up.net" class="nobr">HTML5 UP</a>-->
						</p>
						<div class="row">
							<div class="col-6 col-12-medium">

								<!-- Contact Form -->
									<section>
										<form method="post" action="mailto:markusriisebbesen@gmail.com">
											<div class="row gtr-50">
												<div class="col-6 col-12-small">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="col-6 col-12-small">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
												<div class="col-12">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
<!--						<p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
						free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
						your personal or commercial projects &ndash; just be sure to credit us!</p>-->
					</div>
				</section>

<!-- ####################################################################
			<!-- Main ----Erstat med pil----
				<section id="main" class="wrapper style2">
					<div class="title">The Details</div>
					<div class="container">

						<!-- Image ----Erstat med pil----
							<a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a>

						<!-- Features ----Erstat med pil----
							<section id="features">
								<header class="style1">
									<h2>Dolor consequat feugiat amet veroeros</h2>
									<p>Feugiat dolor nullam orci pretium phasellus justo</p>
								</header>
								<div class="feature-list">
									<div class="row">
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon fa-comment">Mattis velit diam vulputate</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-sync">Lorem ipsum dolor sit veroeros</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon fa-image">Pretium phasellus justo lorem</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-cog">Tempus sed pretium orci</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-wrench">Aliquam consequat et feugiat</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="col-6 col-12-medium">
											<section>
												<h3 class="icon solid fa-check">Dolore laoreet aliquam mattis</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate et magna feugiat laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
								</div>
								<ul class="actions special">
									<li><a href="#" class="button style1 large">Get Started</a></li>
									<li><a href="#" class="button style2 large">More Info</a></li>
								</ul>
							</section>

					</div>
				</section>

			<!-- Highlights ----Erstat med pil----
				<section id="highlights" class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div class="container">
						<div class="row aln-center">
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</section>
 #################################################################### -->
			<!-- Footer -->
				<section id="footer" class="">
									<section class="feature-list">
										<!--<div class="row">   CENTRER--> 
											<div class="col-5">
											</div>
												<section>
													<h3>Social/Contact</h3>
														<h4>mc.vilysia@gmail.com</h4>
														<h4>discord.gg/TagrbJ2</h4>
														<p>Thanks to html5up.net!</a>
												</section>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>