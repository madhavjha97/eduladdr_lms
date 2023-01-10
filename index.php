<?php include('dbcon.php'); ?>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eduladdr Login Page</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/font-awesome.css" rel="stylesheet" media="screen">
			<link href="bootstrap/css/my_style.css" rel="stylesheet" media="screen">
			<link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
			<link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<!-- calendar css -->
		<link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
		<script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<!-- data table -->
		<link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
		<!-- notification  -->
		<link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
		<!-- wysiwug  -->
		<link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
	
		<script src="vendors/jGrowl/jquery.jgrowl.js"></script>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body id="login">
    <div class="content">
      <div class="flex-div">
        <div class="name-content">
          <h1 class="logo">
            <img src="images/logo.png" alt="">
            <br>
          </h1>
          <p>Welcome to Eduladdr LMS Portal.</p>
        </div>
          <form id="login_form" class="form-signin" method="post">
          <input type="text" class="input-block-level" id="usernmae" name="username" placeholder="Username" required>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
        <button name="login" class="login" type="submit"><i class="icon-signin icon-"></i> Sign in</button>
		

<!-- 
            <input type="text" placeholder="Username" required />
            <input type="password" placeholder="Password" required>
            <button class="login">Log In</button> -->
             <!-- <a href="#">Student Password ?</a> -->
            <hr>
            <!-- <button class="create-account">Trainer Login</button> -->
            
          </form>
          <script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to Eduladdr Learning Management System", { header: 'Access Granted' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard1.php'  }, delay);  
						}
						else
						{
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
						}
						}
						
					});
					return false;
				});
			});
			</script>
<?php include('script.php'); ?>
      </div>
    </div>
  </body>
</html>