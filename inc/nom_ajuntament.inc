	<!-- caixa de dalt on fiquem el nom de l'ajuntament i un fons gran -->
	<div class="row caixa-ajuntament">
	
		<div class="container">
		
		<div id="caixa_escut">
		<img src="<?php echo $url; echo $escut_del_ajuntament;?>" alt="Escut de <?php echo $nom_del_ajuntament;?>" />
		</div>
		
		<div id="caixa_nom">
        <h1>


      
      
        			  <?php
        			  // Ací li direm el nom de l'Ajuntament
  					  $db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
					  mysql_select_db("ajuntaments30_db",$db);
					  $result = mysql_query("SELECT nom FROM configuracions;",$db);
					  while($myrow = mysql_fetch_array($result)) { ?>  
					  			<?php echo ($myrow["nom"]);
					   		}
					   		mysql_close($db);
					?>
										
		</h1>
        </div>
				
		</div>
	
    </div>