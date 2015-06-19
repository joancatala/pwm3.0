 
	  
	  <div id="footer">
				<div class="pagination-centered">
				
				<?php
  					  $db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
					  mysql_select_db("ajuntaments30_db",$db);
					  $result = mysql_query("SELECT nom, direccio, poblacio, codipostal, telefon, fax, email, twitter, facebook, googleplus FROM configuracions;",$db);
					  while($myrow = mysql_fetch_array($result)) { ?>
					    					  		
					  			<strong><?php echo ($myrow["nom"]);?></strong> <br />
								<?php echo ($myrow["direccio"]);?> - <?php echo ($myrow["codipostal"]);?> <?php echo ($myrow["poblacio"]);?> (Castell&oacute; de la Plana)<br />
								Tel&egrave;fon <?php echo ($myrow["telefon"]);?> - FAX <?php echo ($myrow["fax"]);?> - Correu: <?php echo ($myrow["email"]);?>
								
					   		<?php }
					   		mysql_close($db);
					?>
					
				</div>
				<p><br />&nbsp;<br /></p>
				
				<div class="pagination-centered">Desenvolupat amb programari lliure Bootstrap & PHP/CSS<br />
				<a href="http://pwm.dipcas.es">Projecte Web Municipal</a> - <a href="http://www.dipcas.es">Diputació de Castelló</a>
				</div>
				
				<p><br />&nbsp;<br /></p>
	  </div>
	  
	  
	  
	  

	  
	  
    </div> <!-- /container -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script> 
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap/js/carousel.js"></script>
		<script src="bootstrap/js/personalitzacions.js"></script>
	
  </body>
</html>
