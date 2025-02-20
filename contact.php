<!DOCTYPE html>
<html lang="en">

<head>
	<title>GLEAMING</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="custom-navbar">

</div>
	<!-- END nav -->
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
									class="fa fa-chevron-right"></i></a></span> <span>Contact <i
								class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Contact</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<p><span>Address:</span> Near Army Insitute, Bhartiya City,Kannur,
											Bangalore,KA-560077</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text">
										<p><span>Phone:</span> <a href="tel:// +91 9108763869">+91 9108763869</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-paper-plane"></span>
									</div>
									<div class="text">
										<p><span>Email:</span> <a href="sudhanshu@gleaming.in">sudhanshu@gleaming.in</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-globe"></span>
									</div>
									<div class="text">
										<p><span>Website</span> <a href="#">www.gleaming.in</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name"
														placeholder="Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email"
														placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject"
														placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30"
														rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name = "submitForm" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>

									<?php

									use PHPMailer\PHPMailer\PHPMailer;
									use PHPMailer\PHPMailer\Exception;
									if(isset($_POST['submitForm'])){
										

										require 'PHPMailer/src/Exception.php';
										require 'PHPMailer/src/PHPMailer.php';
										require 'PHPMailer/src/SMTP.php';
										require 'config.php';
										if ($_SERVER["REQUEST_METHOD"] == "POST") {
											$name = $_POST['name'];
											$email = $_POST['email'];
											$subject = $_POST['subject'];
											$message = $_POST['message'];

											$mail = new PHPMailer();
											$mail->IsSMTP();
											$mail->SMTPDebug = 0;
											$mail->SMTPAuth = TRUE;
											$mail->SMTPSecure = "tls";
											$mail->Port = 587;
											$mail->Host = "smtp.gmail.com";
											$mail->Username = $smtpUsername;
											$mail->Password = $smtpPassword;

											$mail->IsHTML(true);
											//To address
											$mail->AddAddress($addAddress, "");
											//From address
											$mail->SetFrom($addAddress, $name);
											$mail->AddReplyTo($email, $name);
											$mail->Subject = $subject;
											$content = "Message: $message<br>";

											$mail->MsgHTML($content);
											if ($mail->Send()) {
												echo '<script>alert("Response received")</script>';
											} else {
												echo '<script>alert("Encountered an issue while sending the email")</script>';
											}
											echo "<script>setTimeout(\"location.href = 'contact.php';\",1500);</script>";
										}
									}																																		


									?>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(images/about.jpg);">
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	
	<!-- id="map" -->
	<div class="custom-footer">

	</div>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>