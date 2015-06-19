  <div class="navbar navbar-fixed-top navbar">
		  <div class="navbar-inner">
			<div class="container">
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </a>

          <div class="nav-collapse">
          
           <!-- ----------------------------------------------------------------------------------- -->
		   <!-- Ací ficarem el menú principal de la web, dividit en 3 categories                    -->
		   <!-- ----------------------------------------------------------------------------------- -->

			<ul class="nav navbar-nav">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Para los ciudadanos <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
		
		

			<?php
			$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
			mysql_select_db("ajuntaments30_db",$db);
			$result = mysql_query("SELECT titol, categoria, cos FROM pagines WHERE categoria='Para los ciudadanos' ORDER BY titol asc;",$db);
			while($myrow = mysql_fetch_array($result)) {   
			?>

		   <li><a href="#"><?php echo ($myrow["titol"]);?></a></li>

			<?php
			}
			mysql_close($db);
		
			?>		
			
					
				  </ul>
				</li>
          </ul>
		  
		  
		  
		   <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Para los visitantes <span class="caret"></span></a>
       	  <ul class="dropdown-menu" role="menu">



			<?php
			$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
			mysql_select_db("ajuntaments30_db",$db);
			$result = mysql_query("SELECT titol, categoria, cos FROM pagines WHERE categoria='Para los visitantes' ORDER BY titol asc;",$db);
			while($myrow = mysql_fetch_array($result)) {   
			?>

		   <li><a href="#"><?php echo ($myrow["titol"]);?></a></li>

			<?php
			}
			mysql_close($db);
	
			?>	
			
			
			
              </ul>
            </li>
          </ul>
		  
		  
		  
		  <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Para las empresas <span class="caret"></span></a>
       	  <ul class="dropdown-menu" role="menu">
		        

			<?php
			$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
			mysql_select_db("ajuntaments30_db",$db);
			$result = mysql_query("SELECT titol, categoria, cos FROM pagines WHERE categoria='Para las empresas' ORDER BY titol asc;",$db);
			while($myrow = mysql_fetch_array($result)) {   
			?>

		   <li><a href="#"><?php echo ($myrow["titol"]);?></a></li>

			<?php
			}
			mysql_close($db);
		
			?>	

              </ul>
            </li>
          </ul>
		  
		  
		  
		  
		   <!-- ----------------------------------------------------------------------------------- -->
		   <!-- Ací ficarem les icones de les xarxes socials Twitter, Facebook i Google Plus        -->
		   <!-- ----------------------------------------------------------------------------------- -->
		    <ul class="nav navbar-nav navbar-right">
		      
		    <?php
			$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
			mysql_select_db("ajuntaments30_db",$db);
			$result = mysql_query("SELECT twitter FROM configuracions;",$db);
			while($myrow = mysql_fetch_array($result)) {   
			?>

		   <li><a href="<?php echo ($myrow["twitter"]);?>"><img src="images/social-twitter.png" alt="" /></a></li>

			<?php
			}
			mysql_close($db);
		
			?>	
			
			
			
			
			
			
			
			
			
			<?php
			$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
			mysql_select_db("ajuntaments30_db",$db);
			$result = mysql_query("SELECT facebook FROM configuracions;",$db);
			while($myrow = mysql_fetch_array($result)) {   
			?>

		   <li><a href="<?php echo ($myrow["facebook"]);?>"><img src="images/social-facebook.png" alt="" /></a></li>

			<?php
			}
			mysql_close($db);
		
			?>	
			
			
				
			
			
			
			
			

		    <?php
			$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
			mysql_select_db("ajuntaments30_db",$db);
			$result = mysql_query("SELECT googleplus FROM configuracions;",$db);
			while($myrow = mysql_fetch_array($result)) {   
			?>

		   <li><a href="<?php echo ($myrow["googleplus"]);?>"><img src="images/social-google+.png" alt="" /></a></li>

			<?php
			}
			mysql_close($db);
		
			?>	
			
			

							
  
          </ul>
	
          </div>
        </div>
      </div>
    </div>