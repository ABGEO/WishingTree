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
		<script type="text/javascript">
			function validate_form ( )
			{
				valid = true;
					if ( document.add_wish.message.value == "" )
					{
						alert ( "გთხოვთ, შეავსეთ ველი 'თქვენი ნატვრა!'." );
						valid = false;
					}

					return valid;
			}
		</script>
	</head>
	<body>
		<div class="main">
			<div class="header">
				<?include "includes/header.tpl"?>
			</div>
		  
			<div class="content">
				<div class="content_resize">
					<div class="mainbar">
						<div class="article">
							<h2>ახალი ნატვრის დამატება</h2>
							<div class="clr"></div>
							<form action="scripts/add.php" method="post" name="add_wish" onsubmit="return validate_form ( );" enctype="multipart/form-data">
								<ol>
									<li>
										<label for="name">სახელი</label>
										<input id="name" name="author" class="text" placeholder="თქ გსურთ ანონიმურად დარჩენა შეგიძლიათ არ შეავსოთ ეს ველი" />
									</li>
									<li>
										<label for="message">თქვენი ნატვრა</label>
										<textarea id="message" name="text" rows="8" cols="50"></textarea>
									</li>
									<li>
										<input type="submit" name="imageField" id="imageField" class="send" value="დამატება" />
										<div class="clr"></div>
									</li>
								</ol>
							</form>
						</div>
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
