     <div class="container">
		
	  <div class="hero-unit">
				
					<?php
  					  $db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
					  mysql_select_db("ajuntaments30_db",$db);
					  $result = mysql_query("SELECT id, tipo, titol, cos FROM contingut WHERE tipo='Mensaje del pie' ORDER BY id desc limit 1;",$db);
					  while($myrow = mysql_fetch_array($result)) { ?>  

					  		<p><?php echo ($myrow["cos"]);?></p>

					   		<?php
					   		}
					   		mysql_close($db);
					?>
					
					
      </div>
	  