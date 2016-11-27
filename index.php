<!DOCTYPE html>
<html>
	<head>
		<title>Wishing Tree</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
		<meta name="description" content="Wish Tree წარმოადგენს ონლაინ სერვისს სადაც თქვენ შეძლებთ განათავსოთ თქვენი ოცნებები, ნატვრები ან მიმართვა ვინმეს მიმართ. თქვენ შეგიძლიათ მიუთითოთ თქვენი სახელი ან დარჩეთ სრულიად ანონიმური.">
		<meta name="Keywords" content="ნატვრის ხე, ონლაინ ნატვრები, ოცნებები">
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-69195828-12', 'auto');
		  ga('send', 'pageview');
		</script>
	</head>
	<body>
		<div class="main">
			<div class="header">
				<? include "includes/header.tpl" ?>
			</div>
		  
			<div class="content">
				<div class="content_resize">
					<div class="mainbar">
						<?php
							require 'scripts/connect.php';
						
							$sql_select = "SELECT * FROM wish ORDER BY rand()";
							$result = mysql_query($sql_select);
							$row = mysql_fetch_array($result);
							
							$res = mysql_query("SELECT COUNT(1) FROM wish");
							$col_vo = mysql_fetch_array($res);
							
							echo "<h3>სულ ბაზაშია ", $col_vo[0], " ჩანაწერი:</h3>";
							
							do
							{
								
								if (empty($row['author'])) {
									$author = "<b>ანონიმი</b>";
								}else {
									$author = $row['author'];
								}
								
								printf(
									"<div class='article'>
										<h2>№".$row['id']."</h2>
										<p class='infopost'>
											<b>ავტორი: </b><i>".$author."</i><b> | თარიღი: </b><i>".$row['date']."</i>
										</p>
										<div class='post_content'>
											<p align='justify'>
												<mark class='text_mark'>"
													.$row['text'].
												"</mark>
											</p>
										</div>
									</div>"
								);
							}

							while($row = mysql_fetch_array($result));
						?>
					</div>
			  
					<div class="sidebar">
						<?include "includes/sidebar.tpl"?>
					</div>
					<div class="clr"></div>
				</div>
			</div>
		  
			<div class="fbg">
					<?include "includes/fbg.tpl"?>
			</div>
		  
			<div class="footer">
				<?include "includes/footer.tpl"?>
			</div>
		</div>
	</body>
</html>
