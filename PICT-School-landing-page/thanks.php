<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title>PICT MODEL SCHOOL, BALEWADI</title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
      <link href="fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:700,900' rel='stylesheet' type='text/css'>
      <!-- Theme CSS -->
      <link href="css/style.css" rel="stylesheet">
      <!-- Color Style CSS -->
      <link href="styles/funtime.css" rel="stylesheet">

      <!-- Favicons-->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<!--Alternate CSS -->
    <link rel="alternate stylesheet" type="text/css" href="styles/funtime.css" title="funtime" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="styles/playground.css" title="playground" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="styles/games.css" title="games" media="all" />
	
  </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	   <?php
	 if($_POST){
	   $name = $_POST['name'];
	   $phone_no = $_POST['phone'];
	   $email = $_POST['email'];
	        $grade = $_POST['grade'];
	   $enquiry = $_POST['enquiry-message'];

	   $to = "ankush.paliwal@valenscommunications.in, chiragoswal.valens@gmail.com";
	   $subject = "Enquiry for Nestling Daycare Admission";
	   $msg = "<table  cellspacing='10'>
	            <tr>
	               <th colspan='2' style='padding:10px; background:#ccc; color: green; margin-bottom:20px;'>Nestling Daycare - Admission Enquiry</th>
	            </tr>
	            <tr>
	               <th>Name :</th>
	               <td>".$name."</td>
	            </tr>
	            <tr>
	               <th>Phone No :</th>
	               <td>".$phone_no."</td>
	            </tr>
	            <tr>
	               <th>Email :</th>
	               <td>".$email."</td>
	            </tr>
	             
	                           <tr>
	               <th>Grade :</th>
	               <td>".$grade."</td>
	            </tr>

	            <tr>
	               <th>Enquiry :</th>
	               <td>".$enquiry."</td>
	            </tr>
	            
	         </table>";
	         $headers = "MIME-Version: 1.0\r\n";
	         $headers .= "Content-type:text/html;charset=UTF-8\r\n";
	         $headers .= "From: Nestling Daycare <info@pictmodelschool.com>\r\n";
	         $headers .= "Cc: ankush.paliwal@valenscommuncations.in";
	         if(mail($to,$subject,$msg,$headers)){
	            $msg = 1;
	         }
	         else{
	            $msg = 0;
	         }
	      }
	      else{
	         $msg = 2;
	      }
	   ?>

   <!-- Page width 'Boxed' of 'Full' -->
   <div class="boxed" style="background: #F3F0CF;">
     
	  
     <div class="container-fluid" style="padding: 0;margin: 0;">
         <div class="row" style="padding: 0;margin: 0;">
            <img src="img/thank-you.jpg" style="width:100%; max-height:280px; "/>
         </div>
      </div>
	  
      <!-- Footer -->	
      <footer style="padding-bottom: 8px;">
         <section id="contact" class="color-section">
            <div class="container" style="padding: 0; width: 100%;">
               <div class="row">
                  <div class="col-lg-12">
                      <!-- Map -->
                     <div>
                        <div id='gmap_canvas' style='height:250px;'></div>
                        <style>
                           #gmap_canvas img{max-width:none!important;background:none!important}
                        </style>
                     </div>
                  </div>
               </div>
            </div>
         <!-- /container-->
         </section>
         <div class="container-fluid">
            <!-- Newsletter -->
            <div class="col-lg-4 col-md-6 res-margin">
               <h6 class="text-light" style="margin-top: 20px;">Information</h6>
	              <table class="table">
                  <tbody>
                     <tr>
                        <td class="text-left">
                           <i class="fa fa-phone margin-icon"></i> Call us at 020 66806300/ +91 9075094202
                           <br/>
                           <i class="fa fa-envelope margin-icon"></i><a href="mailto:youremailaddress"> info@pictmodelschool.com</a>
                        </td>
                    </tr>
                  </tbody>
               </table>
            </div>  
            <div class="col-lg-4 col-md-12">
               <!-- Sign-->
               <h6 class="text-light" style="margin-top: 20px;">Address</h6>
               <!-- Table-->
               <table class="table text-center" style="margin-bottom: 0;">
                  <tbody>
                     <tr>
                        <td class="text-left">PICT Model School<br/>Behind Holiday Inn, Near Balewadi Stadium,<br/>Mhalunge, Balewadi Pune Maharashtra 411045</td>
                    </tr>
                  </tbody>
               </table>
            </div>
            <!-- Opening Hours -->
            <div class="col-lg-4 col-md-12">
               <!-- Sign-->
               <h6 class="text-light" style="margin-top: 20px;">Opening Hours</h6>
               <!-- Table-->
               <table class="table text-center" style="margin-bottom: 0;">
                  <tbody>
                     <tr>
                        <td class="text-left">School is open on all Saturdays (8.30 am to 4.00 pm) and Sundays (9.00 am to 2.00 pm)</td>
                    </tr>
                  </tbody>
               </table>
            </div>
            <!-- /col-lg-4 -->
         </div>
         <!-- / container -->
         <hr>
         <p>Copyright © 2016 PICT. All Rights Reserved. Designed by  <a href="http://www.valenscommunications.com/">Valens</a></p>
         <!-- /container -->
      </footer>
      <!-- /footer ends -->
	  </div> <!-- /page width -->

      <!-- Core JavaScript Files -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

      <!-- Google maps -->
      <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
      <script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(18.5788913,73.77068069999996),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(18.5788913,73.77068069999996)});infowindow = new google.maps.InfoWindow({content:'<strong>PICT Model School</strong><br>Behind Holiday Inn, Near Balewadi Stadium, Mhalunge, Balewadi Pune Maharashtra<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
      </script>

      <!-- Main Js-->
      <script src="js/main.js"></script>

<!-- Google Code for Conversion Pixel 2016 Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 876162331;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "nwAFCI3XgWkQm9rkoQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/876162331/?label=nwAFCI3XgWkQm9rkoQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 876162331;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/876162331/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
	  
   </body>
</html>