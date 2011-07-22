<!DOCTYPE html>
 
<head>
 
	<title><? echo($blog['title']); ?></title>
 
	<!-- JavaScript -->
	<script type="text/javascript">
	    // Put code here or set the src attribute
        </script>
 
	<!-- CSS -->
	<style type="text/css">
	<!--
 
		body { background:url(images/leather.jpg); background-color: white; margin: 0; padding: 0; font-family: sans-serif; font-size: 12px; }
		p { margin: 0; }
		img.post { width: 420px; border: 20px solid white; -moz-box-shadow: 5px 5px 5px #222; -webkit-box-shadow: 5px 5px 5px #222; box-shadow: 5px 5px 5px #222; }
 		img.arrow { padding: 5px; }
 		h1 { color: white; text-align: left; margin-bottom: 50px; text-shadow: #222 2px 2px; }
 		#container { display: inline-block; margin-left: auto; margin-right: auto; }
 		body { text-align: center; }
 		div.post { display: inline-block; }
 		#desc { margin-top: 10px; background-color: black; color: white; padding: 10px; text-align: left; -moz-box-shadow: 5px 5px 5px #222; -webkit-box-shadow: 5px 5px 5px #222; box-shadow: 5px 5px 5px #222; }
	-->
	</style>
 
</head>
 
<body>

	<div id="container">
	
		<h1><? echo($blog['title']); ?></h1>
	
		<a href="?i=<? echo($prev); ?>"><img class="arrow" style="margin-right: 20px;" src="images/leftarrow.png"></a>
		
		<div class="post">
			<img class="post" src="<? echo($image['url']); ?>">
		</div>
	
		<a href="?i=<? echo($next); ?>"><img class="arrow" style="margin-left: 20px;" src="images/rightarrow.png"></a>

		<div id="desc" style="width: 440px; margin-left: 73px;">
			<p style="float: left;"><? echo($image['title']); ?></p><p style="float: right;"><? echo($image['date']); ?></p>
			<p style="clear: left; margin-top: 30px;">
				<? echo($image['desc']); ?>
			</p>
		</div>

 	</div>
 
</body>
 
</html>
