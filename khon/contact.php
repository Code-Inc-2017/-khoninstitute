<?php
session_start();
include("includes/connection.php");


include("Login.php");


?>


<!DOCTYPE HTML>
<htm>
<head>
<title>#Khon Institute | Home :: #Khon</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet">      
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="/css/style.css" rel="stylesheet"/>
		
		<!-- scripts -->
		<script src="js/jquery-1.7.2.min.js"></script>
		
		<script src="js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.9.0.min.js"></script>
     <script src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<div id="main_container">
    <div id="header">
      <div id="logo"> <a href="index.html"><img src="img/logo.png" width="74" height="86" alt="" border="0" /></a> </div>
    <div class="banner_adds"></div>
    <div class="menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Login</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="fqa.html">FAQ</a></li>
        <li><a href="articles.html">Articles</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    </div>
   
          
                <div class="block-title">
                    <h1>Email us!</h1>
                 <section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
						
							
						</div>
					</div>
					<div class="span7">
						
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "platinia.elistel3@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];

  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
 
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email:<br/>
  <input name="email" type="text"  /><br />
  Subject:<br/>
  <input name="subject" type="text"  /><br />
  Message:<br />
  <textarea name="comment" rows="10" cols="50"
  
 
  ></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>		
</div>
	</div>

	
					
						<div class= "area">
						
							
							<p>Erf 2942, Room A4,<br>
							Rhino Park Medical Centre<br>
							Middle Wick Str. Windhoek North<br>
							P.O.Box 51103 Bachbrecht<br> 
							<strong>Tell:</strong>&nbsp;+26461301841<br>
							<strong>Fax:</strong>&nbsp;+26461254454<br>
							<strong>Cell:</strong>&nbsp;+264811294822<br>
                            <strong>Email:</strong>&nbsp;<a href="#">khoninstitute@gmail.com</a>							
							</p>
							
							
						</div>
					
				
		
    <div class="faq">
      <div class="faq_box">
          <div class="top_faq_box"></div>
          <div class="centre_faq_box">
          <div class="box_title"><span>F</span>AQ</div>
              FAQ content..............................
          </div>
          <div class="bottom_faq_box"></div>
      </div>
    </div>
        <div class="medical_articles">
            <div class="main_text_box">
                <h2>Medical Articles</h2>
                <p> &quot; <br />
                    <br />
                </p>
            </div>
            </div>
        </div>
    <div class="comments">
        <div class="small_title">Comments</div>
          <div class="comments_area">
            <?php
                date_default_timezone_set('Africa/Windhoek');
                include 'dbh.inc.php';
                include 'comments.inc.php';
            ?>
          <?php
          echo "<form method='POST' action='".setComments($conn)."'>
              <input type='hidden' name='uid' value='Anonymous'>
              <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
              <textarea name='message'></textarea><br>
              <button type='submit' name='commentSubmit'>Comment</button>
              </form>";
              getComments($conn)
              ?>
          </div>
    </div>
    </div>
    <div class="clear-floated"></div>

     <!-- end of main_content -->
    <div id="footer">
      <div id="copyright">
        <div style="float:left; padding:3px;"><a href=""><img src="img/footer_logo.png" width="64" height="35" alt="code inc logo" border="0" /></a></div>
        <div style="float:left; padding:14px 10px 10px 10px;"> Code Inc.&copy; All Rights Reserved 2017 - By <a href="" style="color:#772c17;">Code Inc</a></div>
      </div>
    <div class="clear"></div>
</div>
<!-- end of main_container -->
</body>
</html>
