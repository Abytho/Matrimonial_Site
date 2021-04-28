<?php
    include "mainTopParts.php";
?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
      <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Request</li>
      </ul>
   </div>
  <div class="col-md-9 profile_left1">
      <h1>View all request</h1>
      <?php
        require "connect.php";
        $uid = $_SESSION['userid'];
        $sql = "SELECT user_id FROM send_request WHERE to_id='$uid' AND request_status='0';";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            $from_id = $row['user_id'];
            $sql1 = "SELECT user.id,user.name,DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(info.dob, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(dob, '00-%m-%d')) as age,don.domination,info.country,info.marital_status,info.created_by FROM users user, info_table info, domination don WHERE user.id = info.user_id AND don.id = info.denomination_id AND info.user_id='$from_id';";
            $result2 = mysqli_query($conn, $sql1);
            while($row2 = mysqli_fetch_assoc($result2)) {
                echo '    <div class="profile_top"><a href="view_profile.html">
                <h2>USER ID '.$row2['id'].'</h2>
                  <div class="col-sm-3 profile_left-top">';
                  $img_id = $row2['id'];
                  $sql3 = "SELECT image_path FROM user_images WHERE user_id='$img_id';";
                  $result3 = mysqli_query($conn, $sql3);
                  while($row3 = mysqli_fetch_assoc($result3)) {
                    echo '<img src="'.$row3['image_path'].'" class="img-responsive" alt=""/>';
                  break;
                  }
                  echo '
                  </div>
                  <div class="col-sm-3">
                    <ul class="login_details1">
                       <li>Last Login : 5 days ago</li>
                       <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                      <table class="table_working_hours">
                          <tbody>
                              <tr class="opened_1">
                                  <td class="day_label1">Name :</td>
                                  <td class="day_value">'.$row2['name'].'</td>
                              </tr>
                              <tr class="opened">
                                  <td class="day_label1">Religion :</td>
                                  <td class="day_value">'.$row2['domination'].'</td>
                              </tr>
                              <tr class="opened">
                                  <td class="day_label1">Marital Status :</td>
                                  <td class="day_value">'.$row2['marital_status'].'</td>
                              </tr>
                              <tr class="opened">
                                  <td class="day_label1">Location :</td>
                                  <td class="day_value">'.$row2['country'].'</td>
                              </tr>
                              <tr class="closed">
                                  <td class="day_label1">Profile Created by :</td>
                                  <td class="day_value closed"><span>'.$row2['created_by'].'</span></td>
                              </tr>
                              <tr class="closed">
                                  <td class="day_label1">Education :</td>
                                  <td class="day_value closed"><span>Engineering</span></td>
                              </tr>
                          </tbody>
                     </table>
                     <div class="buttons">
                         <div class="vertical"><a href="reject_request.php?id='.$row2['id'].'" style="color: white;">Reject Request</a></div>
                         <div class="vertical"><a href="accept_request.php?id='.$row2['id'].'" style="color: white;">Accept Request</a></div>
                     </div>
                  </div>
                  <div class="clearfix"> </div>
              </a></div>
                  ';
            }
        }
       ?>
        <!-- ------------------ -->

	    	

    <!-- ------------ -->

</div>
<div class="col-md-3 match_right">
	<div class="profile_search1">
	   <form>
		  <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
		  <input type="submit" value="Go">
	   </form>
   </div>
   <section class="slider">
	 <h3>Happy Marriage</h3>
	 <div class="flexslider">
		<ul class="slides">
		  <li>
			<img src="images/s2.jpg" alt=""/>
		  </li>
		  <li>
			<img src="images/s1.jpg" alt=""/>
		  </li>
		  <li>
			<img src="images/s3.jpg" alt=""/>
		  </li>
	    </ul>
	  </div>
   </section>
     </div>
     <div class="clearfix"> </div>
  </div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.html">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
    	</div>
</div>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</body>
</html>	