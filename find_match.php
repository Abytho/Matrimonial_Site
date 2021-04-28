<?php
    include "mainTopParts.php";
?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Regular Search</li>
     </ul>
   </div>
   <!--<script type="text/javascript">
    $(function () {
     $('#btnRadio').click(function () {
          var checkedradio = $('[name="gr"]:radio:checked').val();
          $("#sel").html("Selected Value: " + checkedradio);
      });
    });
   </script>-->
<div class="col-md-9 search_left">
  
 <div class="paid_people">
   <h1>Search Result</h1>
   <div class="row_1">
	   <div class="col-sm-9 paid_people-left">

       <?php
         require "connect.php";
          $userId = $_SESSION['userid'];
          $gender = $_SESSION['gender'];
          $sql3 = "SELECT * FROM partner_details WHERE user_id = '$userId';";
          $row = mysqli_fetch_assoc(mysqli_query($conn, $sql3));
          $education = $row['education'];
          echo $row['education'];
          $cast = $row['cast'];
          $sql = "SELECT * FROM users user,info_table info WHERE   info.gender !='$gender' and info.education = '$education' and info.subcast = '$cast';";
            $result = mysqli_query($conn, $sql);
            
            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <ul class="profile_item">
                     <a href="view_profile.php?id='.$row['user_id'].'">
                      <li class="profile_item-img">';

                      $uid = $row['user_id'];
                      $sql2 = "SELECT image_path FROM user_images WHERE user_id='$uid';";
                      $results = mysqli_query($conn, $sql2);
                      while($row2 = mysqli_fetch_assoc($results)) {
                          echo '
                            <img src="'.$row2['image_path'].'" class="img-responsive" alt=""/>
                            ';
                      break;
                      }

                        echo '
                      </li>
                      <li class="profile_item-desc">
                            
                            <p>29 Yrs, 5Ft 5in Christian</p>
                            <h5>View Full Profile</h5>
                      </li>
                      <div class="clearfix"> </div>
                     </a>
                    </ul>
                    ';
                }
            }else {
                echo 'No result found, try again.';
            }
        

         ?>
	   </div>
	   <div class="clearfix"> </div>
   </div>
  </div>
</div>
     <div class="clearfix"> </div>
  </div>
</div>
<?php
    include "footer.php";
?>