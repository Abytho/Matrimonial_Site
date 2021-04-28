
 <!DOCTYPE HTML>
 <html>


 <head>
     <title> Signup Page </title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
     <script type="application/x-javascript">
     addEventListener("load", function() {
         setTimeout(hideURLbar, 0);
     }, false);

     function hideURLbar() {
         window.scrollTo(0, 1);
     }
     </script>
     <link href="assets/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

     <!-- Custom Theme files -->
     <link href="assets/css/style.css" rel='stylesheet' type='text/css' />
     <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

     <link href="assets/css/font-awesome.css" rel="stylesheet">
     <script src="js/jquery-3.5.1.min.js"></script>


 </head>

 <body>



     <div class="regformbg">
         <div class="container">
             <div class="row">
                 <div class="col-sm-7"></div>
                 <div class="col-sm-5">
                     <div style="color:#535353; font-size:13px;" class="reg-box shado-1">
                         <h1>Personal Details</h1>
                         <form method="post" action="info.php">
                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Profile created by :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <select name="createdby" required="required" style="padding-top: 3px;"
                                         class="form-control sml-frm input-sm">
                                         <option value="">Select</option>
                                         <option value="Self">Self</option>
                                         <option value="Parents">Parents</option>
                                         <option value="Sibling">Sibling</option>
                                         <option value="Relative">Relative</option>
                                         <option value="Friend">Friend</option>

                                     </select>
                                 </div>
                             </div>

                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Gender :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input value="Male" checked="checked" required="required" type="radio"
                                         name="gender"> Male &nbsp;&nbsp;
                                     <input value="Female" required="required" type="radio" name="gender"> Female
                                 </div>
                             </div>

                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Date of Birth :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <div class="row">
                                         <input required="required" type="date" class="form-control sml-frm input-sm"
                                             name="dob">
                                     </div>
                                 </div>
                             </div>

                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Maritial Status :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <select name="mstatus" required="required" style="padding-top: 3px;"
                                         class="form-control sml-frm input-sm">
                                         <option selected="selected" value="0">Select Marital Status</option>
                                         <option value="Unmarried">Unmarried</option>
                                         <option value="Widow">Widow / Widower</option>
                                         <option value="Divorced">Divorced</option>
                                         <option value="Separated">Separated</option>
                                     </select>
                                 </div>
                             </div>

                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Denomination :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <select id="denom" name="denom" required="required" style="padding-top: 3px;"
                                         class="form-control sml-frm input-sm">
                                         <option disabled selected>SELECT</option>
                                         <?php
                                    require "connect.php";

                                    $sql = "SELECT * FROM domination";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="'.$row['id'].'">'.$row['domination'].'</option>';    
                                    }
                              ?>
                                     </select>
                                 </div>
                             </div>

                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Division :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <select name="division" id="division" required="required" style="padding-top: 3px;"
                                         class="form-control sml-frm input-sm">

                                     </select>
                                 </div>
                             </div>


                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Subcast :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="subcast" type="text" placeholder="Enter Subcast"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>
                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Education Qualification:</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="education" type="text" placeholder="Enter Education Qualification"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>

                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Mother Tongue :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="language" required="required" type="text"
                                         placeholder="Enter Mother Tongur" class="form-control sml-frm input-sm"
                                         >
                                 </div>
                             </div>

                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Enter Country :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="country" required="required" type="text" placeholder="Enter Country"
                                         class="form-control sml-frm input-sm">
                                 </div>
                             </div>

                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Mobile No :</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="mobile" required="required" type="number"
                                         placeholder="Enter Mobile No" class="form-control sml-frm input-sm">
                                 </div>
                             </div>
                             <h1>Family Details</h1>
                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Father's Name:</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="fname" type="text" placeholder="Enter Father's Name"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>
                                 <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Father's Occupation:</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="foccupation" type="text" placeholder="Enter Father's Occupation"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>
                                 <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Mother's Name:</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="mname" type="text" placeholder="Enter Mother's Name"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>
                                 <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Mother's Occupation:</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="moccupation" type="text" placeholder="Enter Mother's Occupation"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>
                                 <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Siblings:</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="siblings" type="text" placeholder="Enter Number of Sibilings"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>

                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">

                                 </div>
                            <h1>Partner Preference</h1>
                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Education:</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="edu" type="text" placeholder="Enter Education"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>
                                 <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Religion</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="cast" type="text" placeholder="Enter Religion"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>
                                 <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">
                                     <label class="cflo">Age:</label>
                                 </div>
                                 <div class="col-sm-8">
                                     <input name="age" type="text" placeholder="Enter Age"
                                         class="form-control sml-frm input-sm" >
                                 </div>
                             </div>
                                 
                             <div class="row  to-fmid">
                                 <div class="col-sm-4 no-padding">

                                 </div>
                                 <div class="col-sm-8">
                                     <input class="btn btn-success" type="submit" name="SubmitButton" value="SUBMIT">
                                 </div>
                             </div>

                         </form>

                         <script type="text/javascript">
                         $('#denom').on('change', function() {
                             let denom = $('#denom').val();
                             $.ajax({
                                 url: 'findDivision.php',
                                 type: 'POST',
                                 data: {
                                     id: denom
                                 },
                                 success: function(d1) {
                                     $('#division').html(d1);
                                 }
                             });
                         });
                         </script>

                     </div>
                 </div>
             </div>

         </div>

         

     </div>
 </body>
 </html>