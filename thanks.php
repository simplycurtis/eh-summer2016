<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Capabilities at Eagle Hill</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="tier tier_hero">
    <div class="container">
      <div class="media mx-media_divider">
        <div class="media-md">
          <a href="http://eaglehillconsulting.com/" class="pardotTrackClick"><i class="icn icn-logo">Eagle Hill Consulting</i></a>
        </div>
        <div class="media-bd">
          <h1 class="hdg hdg_1">Time for some unconventional consulting?</h1>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /tier -->
  <div class="tier">
    <!-- container -->
    <div class="container">
      <p>Thank you for your interest in Eagle Hill's unconventional consulting. We will get back to you soon.</p>
      <p>You will be redirected to the Eagle Hill website in <span id="counter">5</span> seconds. <a href="http://eaglehillconsulting.com">Don't want to wait?</a></p>
    </div>
    <!-- /container -->
  </div>
  <!-- /tier -->
  <div class="tier map">
    <div class="container">
      <img class="map-marker" src="img/marker.png" alt="">
      <address class="map-address">241 18th Street S., Suite 615<br>Arlington, VA 22202</address>
    </div>
    <!-- /container -->
  </div>
  <!-- /tier -->
  <footer id="footer" class="main-container">
    <div class="container container_noPad">
      <div class="blocks blocks_3up">
        <div class="card mx-card_left">
          <p>&copy; Copyright <script>document.write(new Date().getFullYear())</script> Eagle Hill</p>
        </div>
        <!-- /card -->
        <div class="card mx-card_center">
          <p><span class="glyphicon glyphicon-earphone"></span> <a href="tel:+17032298600" class="pardotTrackClick">703.229.8600</a></p>
        </div>
        <!-- /card -->
        <div class="card mx-card_right">
          <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:info@eaglehillconsulting.com" class="pardotTrackClick">info@eaglehillconsulting.com</a></p>
        </div>
        <!-- /card -->
      </div>
      <!-- /blocks -->
    </div>
    <!-- /container -->
  </footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
  </script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <script type="text/javascript">
    var count = 5;
      var counter = document.getElementById('counter');
      setInterval(function(){
         count--;
         counter.innerHTML = count;
         if (count === 0) {
            window.location = 'http://eaglehillconsulting.com';
         }
      }, 1000);
  </script>

  <script type="text/javascript">
  piAId = '40572';
  piCId = '38037';

  (function() {
    function async_load() {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
      var c = document.getElementsByTagName('script')[0];
      c.parentNode.insertBefore(s, c);
    }
    if (window.attachEvent) {
      window.attachEvent('onload', async_load);
    } else {
      window.addEventListener('load', async_load, false);
    }
  })();
  </script>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    var pluginUrl =
     '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
    _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
    _gaq.push(['_setAccount', 'UA-52668728-1']);
    _gaq.push(['_trackPageview']);
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</body>

</html>
