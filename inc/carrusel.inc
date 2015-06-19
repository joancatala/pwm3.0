
	<br />&nbsp;<br />
	
	<div id="myCarousel" class="carousel slide">
	   <!-- Carousel items -->
	   <div class="carousel-inner">
	
    <?php
    $contador=1;
  	$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
	mysql_select_db("ajuntaments30_db",$db);
	$result = mysql_query("select id, tipo, titol, imagen1 from contingut WHERE tipo='Carrusel' order by id asc limit 4;",$db);
	while($myrow = mysql_fetch_array($result)) {
	
	
	if ($contador==1) {
	?>


		      <div class="item active">
			      <img src="http://sepam.dipcas.es/ajuntaments30/images/continguts/<?php echo ($myrow["imagen1"]);?>" alt="1">
			      <div class="carousel-caption"><h2><?php echo ($myrow["titol"]);?></h2></div>
			  </div>

	<?php
	$contador = $contador+1;
	} else {
	?>
	
	
	      <div class="item">
			      <img src="http://sepam.dipcas.es/ajuntaments30/images/continguts/<?php echo ($myrow["imagen1"]);?>" alt="1">
			      <div class="carousel-caption"><h2><?php echo ($myrow["titol"]);?></h2></div>
			  </div>
	
	<?php
	}
	
	}   
	mysql_close($db);
	?>	
	   </div>	
		
	   <!-- Carousel nav -->
	   <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	   <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div> 