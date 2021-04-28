<?php

	require "connect.php";
	session_start();

	if(!isset($_SESSION['userid'])) {
		header("Location: login.php?needLogin");
		exit();
	}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
					<a href="#" class="icon-home"></a>
					<ul>
					    <li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			   </ul>
             </nav>
           </div>
           <a class="brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.php">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li class="last"><a href="my_profile.php">My Profile</a></li>
		    	
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Search here</a></li>
		                <li><a href="find_match.php">Find Match</a></li>
		                <li><a href="view_request.php">View Request</a></li>
						<li><a href="view_notification.php">Notifications <span style="padding: 4px;background: red;color: #fff;"> <?php 
							require "connect.php";
							$uid = $_SESSION['userid'];

							$sql = "SELECT COUNT(id) as total FROM notifications WHERE user_id='$uid' AND status=0;";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							echo $row['total'];

						?></a></span></li>
		                <li><a href="faq.html">Faq</a></li>
		                <li><a href="logout.php">Logout</a></li>
		              </ul>
		            </li>
		            
		            
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<?php
	if(isset($_GET['success'])) {
		if($_GET['success'] == 'welcome') {
			echo '<p class="web-message"> Welcome to Marital</p>';
		}elseif($_GET['success'] == 'sendRequest') {
			echo '<p class="web-message"> Request send successfully</p>';
		}	
	}
	if(isset($_GET['error'])) {
		if($_GET['error'] == 'sendRequestFailed') {
			echo '<p class="web-message"> Something went wrong</p>';
		}elseif($_GET['error'] == 'alreadySendRequest') {
			echo '<p class="web-message"> Request already sended.</p>';
		}
	}
?>
