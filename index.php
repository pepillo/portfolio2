<?php
    $mail_sent = false;

    if(isset($_POST['email'])){
        $to      = 'old_delgado.jose.pr@gmail.com';
        $subject = "JOSE-DELGADO.COM CONTACT FORM";
        $body    = "You have received a new message from your website contact form.\n\n
                    Here are the details:\n\n
                    Email: {$_POST['email']}\n\n
                    Message:\n {$_POST['message']}";
        $headers = "From: noreply@jose-delgado.com\n";
        $headers .= "Reply-To: {$_POST['email']}";

        mail($to, $subject, $body);

        $mail_sent = true;
    }
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Jose L Delgado Ruiz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#about_me">About Me</a></li>
					<!--
					<li><a href="#education">Education</a></li>
					<li><a href="#experience">Experience</a></li>
					<li><a href="#contact_me">Contact Me</a></li>
                                        -->
				</ul>
			</nav>
		<!-- About Me -->
			<div class="wrapper style1 first">
				<?php
	                if($mail_sent){
	                    echo '<div class="" style="float:center;text-align: center;margin:0;">
	                            <strong>Success!</strong> Email has been sent.
	                          </div>';
	                }
            	?>
				<article class="container" id="about_me">
					<div class="row">
						<div class="4u 12u(mobile)">
							<span class="image fit">
								<img src="images/profile.png" alt="" />
							</span>
							<br/>
							<ul class="social" style="text-align: center;">
								<li><a href="https://twitter.com/JoseDelgadoPR" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.linkedin.com/in/jose-delgado-ruiz-01422541" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="https://github.com/pepillo" class="icon fa-github"><span class="label">Github</span></a></li>
							</ul>
						</div>
						<div class="8u 12u(mobile)">
							<header>
								<h1>Hi. I'm <strong>Jose Delgado Ruiz</strong>.</h1>
								Computer Science Graduate & Software Developer
							</header>
							<p>
								A highly driven software developer looking to improve as a professional on a 
								daily basis. Some of my attributes are having attention to detail, the ability to 
								adapt and learn quickly/efficiently. Professional and meticulous clean coding skills 
								and documentation. Team player with experience in working diplomatically and collaboratively 
								to ensure success.
							</p>
							<a class="button scrolly" href="files/resume_jose_delgado.pdf" download>Download Resume</a>
							<a class="button scrolly" href="files/cards.png" download>Business Card</a>
						</div>
					</div>
				</article>
			</div>

		<!-- Education -->
			<!--
			<div class="wrapper style2">
				<article id="education">
					<header>
						<h2>Header H2</h2>
						<p>Header Text.</p>
					</header>
					<div class="container">
						<div class="row">
						</div>
					</div>
					<footer>
					</footer>
				</article>
			</div>
			-->
		<!-- Experience -->
			<!--
			<div class="wrapper style3">
				<article id="experience">
					<header>
						<h2>Header H2</h2>
						<p>Header Text.</p>
					</header>
					<div class="container">
						<div class="row">
						</div>
					</div>
					<footer>
					</footer>
				</article>
			</div>

		<!-- Contact -->
                        <!--
			<div class="wrapper style4">
				<article id="contact_me" class="container 75%">
					<header>
						<h2>Get in Touch</h2>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="index.php">
									<div>
										<div class="row">
											<div class="12u">
												<input type="email" name="email" id="email" placeholder="Email" required/>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<footer>
					</footer>
				</article>
			</div>
                        -->
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
