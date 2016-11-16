<div class="gadget">
	<h2 class="star">რანდომი</h2>
	<div class="clr"></div>
	<ul class="sb_menu">
		<li>
			<?php 
				func_interes();
			?> 
		</li>
	</ul>
</div>
	
<div class="gadget">
	<h2 class="star">რეკლამა</h2>
	<div class="clr"></div>
	<ul class="ex_menu">	
		<?php 
			reclama();
		?> 
	</ul>
</div>


<?php
	function func_interes()
	{
		require 'scripts/connect.php';
						
							$sql_select = "SELECT * FROM wish ORDER BY rand() LIMIT 1";
							$result = mysql_query($sql_select);
							$row = mysql_fetch_array($result);

							do
							{
							
							if (empty($row['author'])) {
									$author = "<b>ანონიმი</b>";
							}else {
								$author = $row['author'];
							}
							
								printf(
									"<div class='article'>
										<p class='infopost'>
											<b>ავტორი: </b><i>".$author."</i>
										</p>
										<div class='clr'></div>
										<div class='post_content'>
											<p>".$row['text']."</p>
										</div>
										<div class='clr'></div>
									</div>"
								);
							}

							while($row = mysql_fetch_array($result));
	}
	
	function reclama()
	{
		require 'scripts/connect.php';
						
							$sql_select = "SELECT * FROM reclama ORDER BY rand() LIMIT 10";
							$result = mysql_query($sql_select);
							$row = mysql_fetch_array($result);

							do
							{
								printf(
										"<li>
											<a href='".$row['link']."' target='_blank'>".$row['title']."</a>
										</li>"
								);
							}

							while($row = mysql_fetch_array($result));
	}
?>