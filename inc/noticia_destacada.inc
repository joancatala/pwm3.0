   
   <div class="hero-unit">
   
       <?php
  	$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
	mysql_select_db("ajuntaments30_db",$db);
	$result = mysql_query(" select id, tipo, titol, cos from contingut WHERE tipo='Noticia' order by id desc limit 1;",$db);
	while($myrow = mysql_fetch_array($result)) {   
	?>
	
		<h1><?php echo ($myrow["titol"]);?></h1>
		<p><?php echo ($myrow["cos"]);?></p>
	    <p><a href="./noticies.php" class="btn btn-primary btn-large">Más información</a></p>
	
	<?php
	}
	mysql_close($db);
	?>
   
    </div>
	 