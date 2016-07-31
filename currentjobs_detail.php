<?php
require_once('Connections/tp.php');

  $industryCount = 0;
  $jobCount = 0;
  $districtName = '';
  if (isset($_GET['o'])) {
    $occ = mysqli_real_escape_string($con,$_GET['o']);
    $sql = "SELECT distinct *  FROM `skilled_migrants` WHERE `occupation` = $occ order by `occupation_name`";
    
    // echo "<script> console.log('$sql'); </script>";
    $rsOccupations = mysqli_query($con,$sql);// or die("Sorry, the server's too busy. Relax, take a deep breath, and refresh the page");
    $job = mysqli_fetch_assoc($rsOccupations);
    
    $jobCount = mysqli_num_rows($rsOccupations);
    // echo "<script> console.log('{$industry['industry_name']}'); </script>";    
    // echo "<script> console.log('$industryCount'); </script>";  
    
  }
?>
<!DOCTYPE html>
<head lang="en-au">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>careerChoices</title>
    <meta name="description" content="finding work with a future">
    <meta name="author" content="Peter Shanks">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-switch.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap-custom.css">
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
    <!-- Specifying a Webpage Icon for Web Clip
   Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">
    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">
    <!-- custom css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <!-- animated css  -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="screen">
    <!--owl carousel css-->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
          <style>
          .jobdescription {
            background-color: #ddd;
            border-radius: 10px;
            margin: 15px;
            padding: 10px;
          } 
          </style>
</head>

<body data-spy="scroll" data-offset="80">
    <!--navigation -->
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top trans-before" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/logo-rev.png" width="220" height="34" alt="assesscheck"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html#welcome">Welcome</a></li>
                    <li><a href="index.html#process">Process</a></li>
                    <li><a href="index.html#whoru">Benefits</a></li>
                    <li><a href="index.html#about" id="contactlink">About</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!--.navbar-default-->
    <!-- <div class="one-page-static-wrap parallax" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="static-text">
                    <h1>&nbsp;</h1>
                </div>
            </div>
        </div> -->
    <!--static wrapper-->
    <section id="map" class="padding-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-header">
                        <p>&nbsp;</p>
                        <h3 class="center-heading"><img src="img/headerlogo3.png" class="Ximg-responsive" alt="assesscheck logo" width="466" height="72"></h3>
                        <h4>Helping you find work with a future</h4>
                        <span class="center-line"></span>
                    </div>
                </div>
            </div>
            <!--center heading row-->
            <div class="row">
                <div class="col-md-12">
                  <h2><?php echo $job['occupation_name']; ?></h2>
                  
                  <?php 
                  if ($jobCount > 0) {
                    
                    do {
                      echo "<div class='jobdescription'>";
                      echo "<p>Pay: ".$job['income_label']."</p>";
                      echo "<p>Qualification: ".$job['heap_label']."</p>";
                      echo "<p>Awarded to a ".$job['age_label']." year old ".$job['sex_label']." from ".$job['cob_name']."</p>";
                      echo "</div>";
                    } while($job = mysqli_fetch_assoc($rsOccupations));
                    echo "</div>"; // close the row 
                  ?>
                
                  <?php 
                  } else { // show the country map
                  ?>
                  <p>Click on your state to drill down to skills that are currently sought after in your area</p>
                    <p class="wow animated fadeInLeft center-header">
                        <img id="Image-Maps-Com-image-maps-2016-07-30-231110" src="img/Australia_map.jpg" border="0" width="595" height="549" orgWidth="595" orgHeight="549" usemap="#image-maps-2016-07-30-231110" alt="" />
<map name="image-maps-2016-07-30-231110" id="ImageMapsCom-image-maps-2016-07-30-231110">
<area id="Western Australia" alt="Western Australia" title="WA" href="currentwork.php?s=5" shape="rect" coords="0,24,232,477" style="outline:none;" target="_self"     />
<area id="nt" alt="Northern Territory" title="Northern Territory" href="currentwork.php?s=7" shape="rect" coords="224,0,366,259" style="outline:none;" target="_self"     />
<area id="sa" alt="South Australia" title="South Australia" href="curentwork.php?s=4" shape="rect" coords="224,262,406,540" style="outline:none;" target="_self"     />
<area id="tas" alt="Tasmania" title="Tasmania" href="currentwork.php?s=6" shape="rect" coords="408,485,555,549" style="outline:none;" target="_self"     />
<area id="qld" alt="Queensland" title="Queensland" href="currentwork.php?s=3" shape="poly" coords="367,106,366,257,406,259,408,301,590,299,587,49,441,6,420,4" style="outline:none;" target="_self"     />
<area id="nsw" alt="New South Wales" title="New South Wales" href="currentwork.php?s=1" shape="poly" coords="406,307,409,389,542,448,572,425,592,293" style="outline:none;" target="_self"     />
<area id="vic" alt="Victoria" title="Victoria" href="currentwork.php?s=2" shape="poly" coords="411,394,537,447,500,476,411,465" style="outline:none;" target="_self"     />
</map>
                    </p>
                  <?php
                } // end showing country map for top level
                ?>
                    
            </div>
        </div>
    </section>
    <!-- maincontent -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-btm">
                      <span><a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.</span> Souce code and data can be found on <a href="https://github.com/botheredbybees/smarter_training" target="_blank">github</a>

                    </div>
                </div>
            </div>
            <!--footer btm-->
        </div>
    </footer>
    <!--footer end-->
    <!-- JavaScript -->
    <!--script src="/js/jquery-1.10.2.min.js"></script-->
    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
    </script>
    <!--  <script src="js/app.config.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.mb.browser.min.js"></script>
    <script src="js/fastclick.min.js"></script> -->
    <!--script src="js/app.min.js"></script -->
    <!--scripts and plugins -->
    <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
    <!--easing plugin for nice scroll scroll-->
    <script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
    <!--parallax background plugin-->
    <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
    <!--on scroll animation-->
    <script src="js/wow.min.js" type="text/javascript"></script>
    <!--owl carousel slider-->
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <!--customizable plugin edit according to your needs-->
    <script src="js/custom.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        // Load navigation bar
        // $(".navbar").load("header-loggedout.php", function() {
        //     $(".navbar .navitem-register").addClass('active');
        // });
        // $('.navitem-register').click(function(e) {
        //     $(".navitem-login").removeClass('active');
        //     $('.loginmodal').modal('hide');
        //     $(".navitem-register").addClass('active');
        //     $('.registermodal').modal('show');
        // });
    });
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
    </script>
</body>

</html>
