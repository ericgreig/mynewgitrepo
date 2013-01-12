<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Trinerd Studios" />
	  <meta name="description" content="Tour de Giro - Online Cycling, an online bike-racing simulation using computrainer,ANT+,speed cadence sensors. Tour de Giro simulates road cycling so that you can have fun while you train" />
	  <meta name="keywords" content="online cycing, Tour de Giro, " />	 
<title>Tour de Giro-Online Cycling</title>

<link rel="shortcut icon" href="images/tdg-logo.ico">
<!-- CSS Begins !-->
<link href="CSS/TourDeGiroRedo.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<!-- CSS End !-->

<!-- JavaScripts Begin !-->
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<noscript>
</noscript>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

<!-- JavaScript Ends !-->

<!-- Google Tracker !-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36631007-1']);
  _gaq.push(['_setDomainName', 'tourdegiro.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Google Tracker Ends !-->

</head>

<body>
<div class="header">
 <a href="#">
  <img src="images/tourdgiro-newindex.png" alt="" width="200" height="53" align="left"></a> 
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a href="index.html">Home</a>    </li>
  <li><a href="http://www.tourdegiro.com/developerdiary/">Our Blog</a></li>
  <li><a href="http://www.tourdegiro.com/forum/">Forum</a>    </li>
  <li><a href="http://198.74.57.166/">RaceResults</a></li>
</ul>
<div align="right"> <!-- Social Media Buttons. -->
<!-- This is the google + button. -->
<div class="g-plusone" data-size="medium"></div>
<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<div id="fb-root"></div> <!-- Facebook script !-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> <!--FB Ends !-->
 <div class="fb-like" data-href="http://www.tourdegiro.com" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
<!-- This is the Twitter Button. -->
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.tourdegiro.com">
 Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- End of the twitter buuton -->

</div> <!-- Social Meida Buttons End -->

<!-- end .header --></div>

<div class="container"> <!--Container Begins !-->
<?php require_once("connection.php"); ?>
<div> <!-- Map Info !-->
<h1> Map Information </h1>
<?php require_once("maps.php"); ?>
</div> <!-- Map Info Ends !--> 

<br/>
<br/>

<div> <!-- Player Information !-->
<h1>Player Information</h1>
<?php
// 3. Perform database query
	$result = mysql_query("SELECT * FROM `person` WHERE name not like '[ai]%' ORDER BY `name` ASC LIMIT 0, 200", $connection);
	if (!$result) {
		die("Database query failed:  " . mysql_error());
	}
//4. Use returned data
while ($row = mysql_fetch_array($result)) {
	echo $row[1].""."<br/>";
	}
?>

</div>  <!-- Player Information !-->


</div> <!--Container Ends !-->
 	
<!-- end .content --></div>
    <!-- end .container !--></div>
  <div class="footer">
  <div align="right"> <!-- Social Media Buttons. -->
<!-- This is the google + button. -->
<div class="g-plusone" data-size="medium"></div>
<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<div id="fb-root"></div> <!-- Facebook script !-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> <!--FB Ends !-->
 <div class="fb-like" data-href="http://www.tourdegiro.com" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
<!-- This is the Twitter Button. -->
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.tourdegiro.com">
 Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- End of the twitter buuton -->

</div> <!-- Social Meida Buttons End -->
      <div align="center"><img src="images/trinerd-logo-footer.png" width="452" height="100">
    </div>
    <p align="center">Copyright Trinerd Studios 2012</p>
<!-- end .footer --></div>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
