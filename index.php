<?php
	 include "mainTopParts.php";
?>

<div class="banner">
  <div class="container">
    <div class="banner_info">
	  <h3>Millions of verified Members</h3>
	  <?php
	  require 'connect.php';
		$uid = $_SESSION['userid'];
	  $sql = "SELECT id FROM info_table WHERE user_id='$uid';";
	  if(mysqli_num_rows(mysqli_query($conn, $sql))==0) {
		echo '<a href="registration.php" class="hvr-shutter-out-horizontal">Create your Profile</a>';
	  }
	  
	  ?>
    </div>
  </div>
  
	 </div>
   
		

<div class="grid_1">
      <div class="container">
      	<h1>Featured Profiles</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <ul id="flexiselDemo3">
			<?php

				  require "connect.php";
				  $userId = $_SESSION['userid'];
				  $gender = $_SESSION['gender'];
				  $sql = "SELECT user.id,user.name,DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(info.dob, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(dob, '00-%m-%d')) as age,don.domination,info.country FROM users user, info_table info, domination don WHERE user.id = info.user_id AND don.id = info.denomination_id AND info.gender !='$gender' AND user.id NOT IN (SELECT id FROM users WHERE id='$userId');";
	  			  $result = mysqli_query($conn, $sql);
	  			  while($row = mysqli_fetch_assoc($result)) {
						echo '
						<li><div class="col_1"><a href="view_profile.php?id='.$row['id'].'">';
						$uid = $row['id'];
						$sql2 = "SELECT image_path FROM user_images WHERE user_id='$uid';";
						$results = mysqli_query($conn, $sql2);
						while($rows = mysqli_fetch_assoc($results)) {
							echo '<img src="'.$rows['image_path'].'" class="hover-animation image-zoom-in img-responsive"/>';
							break;
						}
						echo '
						 <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
							<div class="center-middle">About Him</div>
						 </div>
						 <h3><span class="m_3">Profile ID : MI-387412</span><br>'.$row['age'].', '.$row['domination'].', '.$row['country'].'<br>Corporate</h3></a></div>
					  </li>
						';
					}

		  ?>
	    </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay:false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<div class="grid_2">
	<div class="container">
		<h2>Success Stories</h2>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <div class="row_1">
	     <div class="col-md-8 suceess_story">
	        <ul> 
			   <li>
				  	<div class="suceess_story-date">
						<span class="entry-1">Dec 20, 2015</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/7.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1"></span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/8.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1"></span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/9.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1"></span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/10.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1"></span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/11.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1"</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/12.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						<div class="suceess_story-content-info">
				        	
				        </div>
				    </div>
				</li>
	            <li>
				  	<div class="suceess_story-date">
						<span class="entry-1"</span>
					</div>
					<div class="suceess_story-content-container">
						<figure class="suceess_story-content-featured-image">
						   <img width="75" height="75" src="images/13.jpg" class="img-responsive" alt=""/>				            
					    </figure>
						
				    </div>
				</li>
	        </ul>
	    </div>
	    <div class="col-md-4 row_1-right">
	      <h3>News & Events</h3>
	        <div class="box_1">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/14.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2014-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2014-05-25T10:11:51+00:00">May</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">There are many variations of passages</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">The standard chunk of Lorem Ipsum used since the 1500s..</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>
	        <div class="box_1">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/15.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2014-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2014-05-25T10:11:51+00:00">May</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">There are many variations of passages</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">The standard chunk of Lorem Ipsum used since the 1500s..</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>
	        <div class="box_2">
		      <figure class="thumbnail1"><img width="170" height="155" src="images/1.jpg" class="img-responsive" alt=""/></figure>
			  <div class="extra-wrap">
				<div class="post-meta">
					<span class="day">
					<time datetime="2014-05-25T10:15:43+00:00">25</time>
					</span>
					<span class="month">
					<time datetime="2014-05-25T10:11:51+00:00">May</time>
					</span>
				</div>
				<h4 class="post-title"><a href="#">There are many variations of passages</a></h4>
				<div class="clearfix"> </div>
				<div class="post-content">The standard chunk of Lorem Ipsum used since the 1500s..</div>
				<a href="#" class="vertical">Read More</a>
			  </div>
	        </div>
	        <div class="religion">
               <div class="religion_1-title">Religion :</div>
			   <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Hindu</a>
			    <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Muslim</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Christian</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Sikh</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Inter Religion</a>
	        </div>
	        <div class="religion">
               <div class="religion_1-title">Country :</div>
			   <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">India</a>
			    <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Australia</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Russia</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">India</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Kuwait</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Uk</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
	        </div>
	        <div class="religion">
               <div class="religion_1-title">Caste :</div>
			   <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Brahmin</a>
			    <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Kapu</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Kamma</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Padmasali</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Reddy</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
	        </div>
	        <div class="religion">
               <div class="religion_1-title">Regional :</div>
			   <a href="#" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Urdu</a>
			    <span>|</span><a href="#" target="_blank" class="religion_1" title="Muslim Matrimonial">Hindi</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Christian Matrimonial">Telugu</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Sikh Matrimonial">Marwadi</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Oriya</a>
			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
	        </div>
	     </div>
	     <div class="clearfix"> </div>
	   </div> 
	  </div>
    </div>
    <div class="bg">
		<div class="container"> 
			<h3>Guest Messages</h3>
			<div class="heart-divider">
				<span class="grey-line"></span>
				<i class="fa fa-heart pink-heart"></i>
				<i class="fa fa-heart grey-heart"></i>
				<span class="grey-line"></span>
            </div>
            <div class="col-sm-6">
            	<div class="bg_left">
            		<h4>But I must explain</h4>
            		<h5>Friend of Bride</h5>
            		<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            	   <ul class="team-socials">
                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                   </ul>
            	</div>
            </div>
            <div class="col-sm-6">
            	<div class="bg_left">
            		<h4>But I must explain</h4>
            		<h5>Friend of Groom</h5>
            		<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            	   <ul class="team-socials">
                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                   </ul>
            	</div>
            </div>
            <div class="clearfix"> </div>
		</div>
	</div>
<?php
	include("footer.php");
?>