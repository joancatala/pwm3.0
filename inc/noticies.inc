<div class="container">
	
					<?php
  					  $db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
					  mysql_select_db("ajuntaments30_db",$db);
					  $result = mysql_query("select id, tipo, titol, cos, imagen1, imagen2, imagen3, imagen4 from contingut WHERE tipo='Noticia' order by id asc;",$db);
					  while($myrow = mysql_fetch_array($result)) { ?>  	  		

							
							<div class="hero-unit">
					  		<h1><?php echo ($myrow["titol"]);?></h1>
					  		<p><?php echo ($myrow["cos"]);?></p><br /><br />
					  		<?php echo ($myrow["imagen1"]);?><br />
					  		<?php echo ($myrow["imagen2"]);?><br />
					  		<?php echo ($myrow["imagen3"]);?><br />
					  		<?php echo ($myrow["imagen4"]);?><br /><br />
					  		</div>
					  		
					  		<?php
					   		}
					   		mysql_close($db);
					 ?>
					 
	 	
</div>