<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    include "mainTopParts.php";
?>
<div class="grid_3">
    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <a href="index.html"><i class="fa fa-home home_1"></i></a>
                <span class="divider">&nbsp;|&nbsp;</span>
                <li class="current-page">My profile</li>
            </ul>
        </div>
        <div class="profile">
            <div class="col-md-8 profile_left">
                <?php
            echo '<h2>Profile Id : '.$_SESSION['userid'].'</h2>';
        ?>

                <div class="col_3">
                    <div class="col-sm-4 row_2">
                        <div class="flexslider">
                            <div id="user-pic-box">
                                <?php
                                    require "connect.php";
                                    $uid = $_SESSION['userid'];
                                    $sql = "SELECT * FROM user_images WHERE user_id='$uid' ORDER BY id desc;";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '
                                        <img src="'. $row['image_path'] .'" class="us-pic">
                                        ';
                                    }
                                    ?>
                            </div>
                            <style>
                            #user-pic-box {
                                width: 220px;
                                position: relative;
                                display: flex;
                                flex-wrap: wrap;
                                column-gap: 3px;
                                row-gap: 3px;
                                overflow-y: hidden;
                                overflow-x: scroll;
                            }

                            #user-pic-box::-webkit-scrollbar {
                                height: 10px;
                                background: transparent;
                            }

                            .us-pic {
                                width: 50px;
                                height: 50px;
                                display: block;
                            }

                            /* .us-pic:hover {
                                        position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        transform: scale(1.1) translate(-50%,-50%);
                                    } */
                            .big-user-image-box {
                                position: absolute;
                                top: 20%;
                                right: 5%;
                                width: 400px;
                                height: 300px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }

                            .user-current-image {
                                max-width: 100%;
                                border-radius: 8px;
                            }
                            </style>
                        </div>
                    </div>
                    <div class="col-sm-8 row_1">
                        <table class="table_working_hours">
                            <tbody>
                                <tr class="opened_1">
                                    <td class="day_label">Name</td>
                                    <td class="day_value"><?php
                                            require "connect.php";
                                            $uid = $_SESSION['userid'];
                                            $sql = "SELECT * FROM users WHERE id='$uid';";
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                                            echo $row['name']; 
                                            $sql = "SELECT * FROM info_table WHERE user_id='$uid';";
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

                            
                            ?></td>
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
                            <li>Upload Picture <form enctype="multipart/form-data" style="display: flex;" method="POST">
                                    <input type="file" name="file" required id="image-file">
                                    <input type="submit" value="UPLOAD"
                                        style="background: #C32143;color: #fff;border: none;padding: 4px 16px;">
                                </form>
                            </li>
                        </ul>
                    </div>
                    <script>
                    $('form').on('submit', function(e) {
                        e.preventDefault();
                        $('#user-pic-box').empty();
                        var file_data = $('#image-file').prop('files')[0];
                        $("#image-file").val('');
                        var form_data = new FormData();
                        form_data.append('file', file_data);
                        var i = 0;
                        $.ajax({
                            url: 'uploadImage.php',
                            dataType: 'text',
                            cache: false,
                            contentType: false,
                            processData: false,
                            type: 'POST',
                            data: form_data,
                            success: function(dataResult) {

                                $('#user-pic-box').html(dataResult);
                            }
                        });
                    });
                    </script>
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
                                            $uid = $_SESSION['userid'];
                                            $sql = "SELECT * FROM users WHERE id='$uid';";
                                            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                                            echo $row['name']; 
                                            $sql = "SELECT * FROM info_table WHERE user_id='$uid';";
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
                                            $uid = $_SESSION['userid'];
                                
                                            $sql = "SELECT * FROM family_details WHERE user_id='$uid';";
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
                                            $uid = $_SESSION['userid'];
                                
                                            $sql = "SELECT * FROM partner_details WHERE user_id='$uid';";
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
            <script>
            proPicSlider();

            function proPicSlider() {
                let currentImage = 1;
                document.getElementsByClassName('user-current-image')[0].setAttribute('src', document.getElementsByClassName('us-pic')[0].getAttribute('src'));
                setInterval(() => {
                    let el = document.getElementsByClassName('user-current-image');
                    let allImage = document.getElementsByClassName('us-pic');
                    let totalImage = allImage.length;
                    for (let i = 0; i < totalImage; i++) {
                        if (currentImage === i) {
                            el[0].setAttribute('src', allImage[i].getAttribute('src'));
                        }
                    }
                    currentImage++;
                    if (currentImage == totalImage) {
                        currentImage = 0;
                    }
                }, 5000);
            }
            </script>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>