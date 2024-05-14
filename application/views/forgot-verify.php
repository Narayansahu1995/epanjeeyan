<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets2/img/favicon.png" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets2/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head> 

<body>

  
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 ">
				<?php
				if (isset($_REQUEST['invalid'])) {
				  echo "<script>alert('Invalid Id and Password!!!')</script>";
				}
				?>
				<form action="verify-submit" method="post" class="p-4 m-5" style="background:#b8d5e3;">
					<center class="display-6">Verify otp and new password</center>
          
					<label style="margin-top:40px; margin-bottom:20px;">Otp</label>
					<input type="tel" name="otp" class="form-control" autocomplete="off" maxlength="6" placeholder="Enter otp" value="565498">
			
					<label style="margin-top:40px; margin-bottom:20px;">New Password</label>
					<input type="password" name="password" class="form-control" autocomplete="off" minlength="8" placeholder="Enter new password">
				
					<label style="margin-top:40px; margin-bottom:20px;">Confirm Password</label>
					<input type="password" name="password_confirm" class="form-control" autocomplete="off" minlength="8" placeholder="Enter conform password">
					
          <br>

					<button class="btn btn-primary form-control">submit</button>
				</form>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>

</body>

  