<?php include_once('main.php'); ?>

<!DOCTYPE html>

<html>

<head>

<meta http-equiv="content-type" content="text/html;charset=utf-8">

<noscript><meta http-equiv="refresh" content="0; url=error.php?error_code=2"></noscript>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-cookies.js" type="text/javascript"></script>
<script src="js/jquery-base64.js" type="text/javascript"></script>
<?php include('js/header-js.php'); ?>
<script src="js/main.js" type="text/javascript"></script>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/logoFav.ico" type="image/x-icon" />

<title><?php echo global_title . ' - ' . global_organization; ?></title>

</head>

<body>
<div id="header">
    <div id="logo"> <a href="index.php"><img src="../img/logo.png" width="74" height="86" alt="" border="0" /></a> </div>
    <div class="banner_adds"></div>
    <div class="menu">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="index.php">Login</a></li>
            <li><a href="../about.html">About Us </a></li>
            <li><a href="../faq.html">FAQ</a></li>
            <li><a href="../articles.html">Articles</a></li>
            <li><a href="../contact1.php">Contact</a></li>
        </ul>
    </div>
</div>

<div id="notification_div"><div id="notification_inner_div"><div id="notification_inner_cell_div"></div></div></div>

<div id="header_div"><?php include('header.php'); ?></div>



<div id="content_div"></div>

<div id="preload_div">
<img src="img/loading.gif" alt="Loading">
</div>
<div id="footer" width="970px">
    <div id="copyright">
        <div style="float:left; padding:3px;"><a href=""><img src="../img/footer_logo.png" width="64" height="35" alt="code inc logo" border="0" /></a></div>
        <div style="float:left; padding:14px 10px 10px 10px;"> Code Inc.&copy; All Rights Reserved 2017 - By <a href="" style="color:#772c17;">Code Inc</a></div>
    </div>
    <div class="clear"></div>
</div>

</body>

</html>
