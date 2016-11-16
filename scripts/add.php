<!---------------------------------------------------------	|
|	 					TTBLOG Cms							|
|															|
|	 Script author: T.Takalandze(ABGEO) - WWW.ABGEO.GA		|
|	Copyright © TTProductions 2016. All Rights Reserved		|
----------------------------------------------------------->

<?php
	require 'connect.php';

	$date = date("d.m.Y");
	$author = trim($_REQUEST['author']);
	$text = trim($_REQUEST['text']);
	$ip=$_SERVER['REMOTE_ADDR'];


	$insert_sql = "INSERT INTO wish (date, author, text, ip)" .
	"VALUES('{$date}', '{$author}', '{$text}', '{$ip}');";

	mysql_query($insert_sql);

    exit('<meta http-equiv="refresh" content="0; url=../" />');
?>
