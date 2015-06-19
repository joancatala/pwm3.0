<?php
	//
	// inici de la pagina web municipal
	//
	// organitzem el index.php amb includes per tal de tenir la portada de la web de manera
	// flexible i modulable. Si volem editar o deshabilitar qualsevol funció, nomès caldrà
	// anar al fitxer .inc en concret.
	//
	
	// Els par�metres de configuraci� b�sics com l'escut del municipi, el t�tol de la web
	// la url on la tenim albergada, etc.
	//
	include("./inc/parametres.inc");
	
	// Ac� les distintes seccions de la web
	// Si volem ocultar o deshabilitar alguna, nom�s cal comentar amb "//" davant de la l�nia.
	//
	include ("./inc/capcalera.inc");   
	include ("./inc/cookies.inc");   
	include ("./inc/menu.inc");   
	include ("./inc/nom_ajuntament.inc");
	include ("./inc/alerta.inc");

    include("./inc/noticies.inc");
    
    ?>
    
    
	<div class="container">	
	  <div class="hero-unit">
	Si deseas ver el resto de noticias, puedes acceder en nuestra <a href="./noticies.php">secci�n de noticias</a> donde tenemos archivadas
	todas las noticias pasadas ordenadas cronol�gicamente.
      </div>
    </div>
    
    
    <?php  
    include ("./inc/peu.inc");
	
	// Colorin colorat, aquest codi s'ha acabat.
	//
?>   
	 