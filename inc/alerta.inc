<div class="container">
		<div class="alert alert-danger">
		   
					<?php
  					  $db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
					  mysql_select_db("ajuntaments30_db",$db);
					  $result = mysql_query("SELECT id, tipo, titol, cos FROM contingut WHERE tipo='Mensaje de avis' ORDER BY id desc limit 1;",$db);
					  while($myrow = mysql_fetch_array($result)) { ?>  
					  		<strong><?php echo ($myrow["titol"]);?></strong>
					  		<?php echo ($myrow["cos"]);
					   		}
					   		mysql_close($db);
					?>

		</div>
</div>
	
	
	
