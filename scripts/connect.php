<?php
	require 'db.php';

	mysql_connect($dbhost, $dbuser, $dbpasswd)
	or die("<p>მონაცემთა ბაზასთან დაკავშირების შეცდომა! " . mysql_error() . "</p>");

	mysql_select_db($dbname)
	or die("<p>მონაცემთა ბაზის არჩევის შეცდომა! ". mysql_error() . "</p>");
	
	mysql_query("SET NAMES 'utf8';");
	mysql_query("SET CHARACTER SET 'utf8';");
	mysql_query("SET SESSION collation_connection = 'utf8_general_ci';");
?>