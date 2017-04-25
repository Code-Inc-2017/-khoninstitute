<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>#Khon Institute | Home :: #Khon</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
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
        <li><a href="login.html">Login</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="fqa.html">FAQ</a></li>
        <li><a href="articles.html">Articles</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    </div>
    <div class="main_content">
    <div class="banner">
    <div id="wrapper">
 		    <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="img/banner2.png"  alt="" />
               	<img src="img/banner1.png"  alt="" />
                <img src="img/banner3.png"  alt="" />
                <img src="img/banner4.png"  alt="" />
                <img src="img/banner5.png"  alt="" />
            </div>
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
