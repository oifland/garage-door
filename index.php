<?php 
	if(isset($_GET['trigger']) && $_GET['trigger'] == 1) {
		error_reporting(E_ALL);
		exec('sh trigger.sh > /dev/null 2>&1 &');
	}
	if(isset($_GET['ping']) && $_GET['ping'] == 1) {
	  print "pong";
	  exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Garage Opener</title>
		<link href="android-128.png" rel="icon" sizes="128x128" />
		<link rel="apple-touch-icon" href="apple-touch-icon-iphone.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-iphone-retina-display.png" />		
		<link rel="stylesheet" href="/css/style.css" type="text/css" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=320, initial-scale=1">
		<script type="text/javascript" src="/js/jquery-2.1.3.min.js"></script>    
		<script type="text/javascript" src="/js/script.js"></script>    

	</head>
	<body>
  	<div id="status" class="led"></div>
		<div class='awrap'>
      <a href='/?trigger=1'></a>
		</div>
	</body>
</html>
