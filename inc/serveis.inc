    <br />&nbsp;<br />
	
	<div class="container">

     <div class="row">
     
     
    <?php
  	$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
	mysql_select_db("ajuntaments30_db",$db);
	$result = mysql_query(" select id, tipo, titol, imagen1 from contingut WHERE tipo='Servicio' order by id desc;",$db);
	while($myrow = mysql_fetch_array($result)) {   
	?>
	
	<div class="span3"><img src="http://sepam.dipcas.es/ajuntaments30/images/continguts/<?php echo ($myrow["imagen1"]);?>" alt="" /></div>
	
	<?php
	}
	mysql_close($db);
	?>
					
	
	<br />&nbsp;<br />

     
	</div>