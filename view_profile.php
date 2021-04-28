<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    if(isset($_GET['id'])) {
        $profile_id = $_GET['id'];
    }
    include "mainTopParts.php";
?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id : <?php echo $profile_id ?></h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
                         <?php
                            require "connect.php";
                            $sql = "SELECT image_path FROM user_images WHERE user_id='$profile_id';";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<li data-thumb="'.$row['image_path'].'">
                                        <img src="'.$row['image_path'].'" />
                                    </li>';
                            }
                        ?>
					 </ul>
				  </div>
			</div>
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">Name</td>
							<td class="day_value"><?php
                                            require "connect.php";
                                         
                                            $sql = "SELECT * FROM users WHERE id='$profile_id';";
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                                            echo $row['name']; 
                                            $sql = "SELECT * FROM info_table WHERE user_id='$profile_id';";
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

                            
                            ?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Login :</td>
							<td class="day_value">4 hours ago</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $row['subcast']  ?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $row['marital_status']  ?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Location :</td>
							<td class="day_value"><?php echo $row['country']  ?></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Profile Created by :</td>
							<td class="day_value closed"><span><?php echo $row['created_by']  ?></span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $row['education']  ?></span></td>
						</tr>
				    </tbody>
				</table>
				<ul class="login_details">
			      <li>Send a interest request? <a href="send_request.php?id=<?php echo $profile_id ?>">SEND REQUEST</a></li>
			    </ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
                </div>
                <div class="col_4">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
                                    data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a>
                            </li>
                            <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
                                    aria-controls="profile">Family Details</a></li>
                            <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab"
                                    aria-controls="profile1">Partner Preference</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                
                                <div class="basic_1">
                                    <h3>Basics & Lifestyle</h3>
                                    <div class="col-md-6 basic_1-left">
                                        <table class="table_working_hours">
                                            <tbody>
                                                <tr class="opened_1">
                                                    <td class="day_label">Name :</td>
                                                    <td class="day_value"><?php
                                            require "connect.php";
                                            
                                            $sql = "SELECT * FROM users WHERE id='$profile_id';";
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                                            echo $row['name']; 
                                            $sql = "SELECT * FROM info_table WHERE user_id='$profile_id';";
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

                            
                            ?></td>
                                                </tr>
                                                <tr class="opened">
                                                    <td class="day_label">Marital Status :</td>
                                                    <td class="day_value"><?php echo $row['marital_status']  ?></td>
                                                </tr>
                                                
                                                <tr class="opened">
                                                    <td class="day_label">Profile Created by :</td>
                                                    <td class="day_value closed"><span><?php echo $row['created_by']  ?></span></td>
                                                </tr>

                                                <tr class="opened">
                                                    <td class="day_label">Phone Number :</td>
                                                    <td class="day_value closed"><span><?php echo $row['mobile']  ?></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 basic_1-left">
                                        <table class="table_working_hours">
                                           
                                        </table>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="basic_1">
                                    
                                    <div class="col-md-6 basic_1-left">
                                        <table class="table_working_hours">
                                           
                                        </table>
                                    </div>
                                    <div class="col-md-6 basic_1-left">
                                        <table class="table_working_hours">
                                            
                                        </table>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="basic_1 basic_2">
                                    
                                    <div class="basic_1-left">
                                        <table class="table_working_hours">
                                            
                                        </table>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                <div class="basic_3">
                                    <h4>Family Details</h4>
                                    <div class="basic_1 basic_2">
                                        <h3>Basics</h3>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
                                                    <tr class="opened">
                                                        <td class="day_label">Father's Name :</td>
                                                        <td class="day_value"><?php
                                            require "connect.php";
                                            
                                
                                            $sql = "SELECT * FROM family_details WHERE user_id='$profile_id';";
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                                            echo $row['fname'];

                            
                            ?></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Fater's Occupation :</td>
                                                        <td class="day_value"><?php echo $row['foccupation']  ?></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Mother's Name:</td>
                                                        <td class="day_value closed"><span><?php echo $row['mname']  ?></span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">Mother's Occupation :</td>
                                                        <td class="day_value closed"><span><?php echo $row['moccupation']  ?></span></td>
                                                    </tr>
                                                    <tr class="opened">
                                                        <td class="day_label">No. of siblings :</td>
                                                        <td class="day_value closed"><span><?php echo $row['siblings']  ?></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                                <div class="basic_1 basic_2">
                                    <div class="basic_1-left">
                                        <table class="table_working_hours">
                                            <tbody>
                                                <tr class="opened">
                                                    <td class="day_label">Age :</td>
                                                    <td class="day_value"><?php
                                            require "connect.php";
                                           
                                
                                            $sql = "SELECT * FROM partner_details WHERE user_id='$profile_id';";
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                                            echo $row['age'];

                            
                            ?></td>
                                                </tr>
                                                
                                                <tr class="opened">
                                                    <td class="day_label">Religion :</td>
                                                    <td class="day_value closed"><span><?php echo $row['cast']  ?></span></td>
                                                </tr>
                                              
                                               
                                                <tr class="opened">
                                                    <td class="day_label">Education :</td>
                                                    <td class="day_value closed"><span><?php echo $row['education']  ?></span></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="big-user-image-box">
                <img src="" class='user-current-image'>
            </div>
     <div class="col-md-4 profile_right">
     	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div>
        <div class="view_profile">
            <h3>View Similar Profiles</h3>
            <?php
                    $uuid = $_SESSION['userid'];
                    $sql1 = "SELECT user.id,user.name,DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(info.dob, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(dob, '00-%m-%d')) as age,don.domination,info.country FROM users user, info_table info, domination don WHERE user.id = info.user_id AND don.id = info.denomination_id AND user.id NOT IN (SELECT id FROM users WHERE id='$uuid');";
                    $result = mysqli_query($conn, $sql1);
	  			    while($row = mysqli_fetch_assoc($result)) {
                        echo '<ul class="profile_item">
                                <a href="view_profile.php?id='.$row['id'].'">
                            <li class="profile_item-img">';

                            $uid = $row['id'];
                            $sql2 = "SELECT image_path FROM user_images WHERE user_id='$uid';";
                            $results = mysqli_query($conn, $sql2);
                            while($rows = mysqli_fetch_assoc($results)) {
                                echo '<img src="'.$rows['image_path'].'" class="img-responsive">';
                            break;
                            }

                            echo '                            </li>
                            <li class="profile_item-desc">
                                <h4>2458741</h4>
                                <p>29 Yrs, 5Ft 5in Christian</p>
                                <h5>View Full Profile</h5>
                            </li>
                            <div class="clearfix"> </div>
                        </a>
                    </ul>';
                    }

                    ?>
       </div>
        </div>
       <div class="clearfix"> </div>
    </div>
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
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
<?php include "footer.php" ?>