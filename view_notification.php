<?php
    include "mainTopParts.php";
?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">See all</li>
     </ul>
   </div>
   <div class="list_1">
       <div class="progress-content">
			<h3>All Notifications</h3>
			<div class="progress progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="progress-label"></span>80%</div></div>
	   </div>
  </div>
  <article class="headings">
    <?php
    require "connect.php";
    $uid = $_SESSION['userid'];
    $sql = "SELECT notification_message FROM notifications WHERE user_id='$uid';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    echo '
    
	<p>» '.$row['notification_message'].'</p>
    <p>&nbsp;</p>
    ';

    $sql = "UPDATE notifications SET status=1 WHERE user_id='$uid'";
    mysqli_query($conn, $sql);
    ?>
   </article>
</div>
<?php
    include "footer.php";
?>