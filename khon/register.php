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
        <li><a href="index.html">Home</a></li>
        <li><a href="register.php">Login</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="fqa.html">FAQ</a></li>
        <li><a href="articles.html">Articles</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    </div>
   
				
				<div class="row">
					<div class="span5">					
						<form action="" method="post">
							<input type="hidden" name="next" value="1">
							<fieldset>
								<div class="control-group">
								<h1>log in here<h1>
									<label class="control-label" for="id">Username</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" id="id" name="id" autofocus class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="password">Username</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" name="login"  value="Sign into your account">
									<hr>
									<p class="reset">Not yet a member? <a tabindex="4" href="register1.php" title="Recover your username or password">Register</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					
			
			
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
