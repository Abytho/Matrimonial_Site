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
  <form method="post" action="search.php">	
   <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Gender : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" name="gender" class="radio_1" value="Male" /> Male &nbsp;&nbsp;
		<input type="radio" name="gender" class="radio_1" value="Female" checked="checked" /> Female
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Marital Status : </label>
	<div class="col-sm-7 form_radios">
		<input type="checkbox" name="marital_status" class="radio_1" value="Unmarried" /> Single &nbsp;&nbsp;
		<input type="checkbox" name="marital_status" class="radio_1"  value="Divorced" checked="Divorced" /> Divorced &nbsp;&nbsp;
		<input type="checkbox" name="marital_status" class="radio_1" value="Widowed" /> Widowed &nbsp;&nbsp;
		<input type="checkbox" name="marital_status" class="radio_1" value="Separated" /> Separated &nbsp;&nbsp;
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Country : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="country">
            <option selected value="India">India</option>
            <option value="America">America</option>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Religion : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="religion">
            <option value="Hindu">Hindu</option>
            <option value="Muslim">Muslim</option>
            <option value="Christian">Christian</option>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="sex">Mother Tongue : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="mother_toungh">
            <option value="English">English</option>
            <option value="Malayalam">malayalam</option>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
    <input name="search-button" style="position: relative;left: 730px;background: darkred;color: #fff;border: none;border-radius: .5rem;padding: 8px 24px;top: 10px;" type="submit" value="Search">
  </div>
 </form>
 <div class="paid_people">
   <h1>Search Result</h1>
   <div class="row_1">
	   <div class="col-sm-9 paid_people-left">

       <?php
        require "connect.php";
        $gender = '';
        $marital_status = '';
        $country = '';
        $religion = '';
        $mother_toungh = '';

        if(isset($_POST['search-button'])) {
            $gender = $_POST['gender'];
            $marital_status = $_POST['marital_status'];
            $country = $_POST['country'];
            $religion = $_POST['religion'];
            $mother_toungh = $_POST['mother_toungh'];


            $sql = "SELECT user.id, don.domination, info.country,DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(info.dob, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(dob, '00-%m-%d')) as age, user.name FROM users user,domination don,info_table info WHERE user.id = info.user_id AND info.denomination_id= don.id AND info.marital_status='$marital_status' AND info.country='$country' AND info.mother_tounge='$mother_toungh' AND info.gender='$gender';";
            $result = mysqli_query($conn, $sql);
            
            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <ul class="profile_item">
                     <a href="view_profile.php?id='.$row['id'].'">
                      <li class="profile_item-img">';

                      $uid = $row['id'];
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
                            <h4>'.$row['name'].'</h4>
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