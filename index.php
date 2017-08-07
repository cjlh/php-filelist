<html>
	<!--
		php-filelist (https://github.com/cjlh/php-filelist)
		author: Caleb Hamilton
		website: calebh.com
	-->
	<head>
		<?php
			$url = $_SERVER[HTTP_HOST];
			$url_text = str_replace("www.", "", $url);
			$http = "http://";
			if (!empty($_SERVER[HTTPS])) {
				$http = "https://";
			}
			$dir = str_replace("/", " / ", rtrim($_SERVER[REQUEST_URI], "/"));
			$title = ltrim($dir, " / ");
			echo "<title>$title</title>";
		?>
		<style>
		</style>
	</head>
	<body>
		<?php
			echo "<p><a href=\"$http$url\">$url_text</a>$dir</p>";
		?>
		<ul>
			<?php
				$dir    = './';
				$filelist = scandir($dir);
				for ($i = 2; $i < sizeof($filelist); $i++) {
					echo "<li><a href=\"./$filelist[$i]\">$filelist[$i]</a></li>\n";
				}
			?>
		</ul>
	</body>
</html>
